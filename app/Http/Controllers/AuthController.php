<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit;
        $page = $request->page;
        $order = $request->order;
        $filter = $request->filter;
        $all_users = [];
        if ($limit === null) {
            $users = DB::select('select id, name, email from users');
            return response()->json($users);
        } else {
            $users = DB::select('select id, name from users where name like ' . "'%$filter%'" . ' ORDER BY name ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
            $total_results = DB::select(
                'select id, name from users where name like ' . "'%$filter%'" . ' ORDER BY name ' . $order
            );
            foreach ($users as $user) {
                array_push($all_users, User::find($user->id));
            }
            foreach ($all_users as $user) {
                $user->rol;
            }

            return response()->json([$all_users, count($total_results)]);
        }
    }

    public function checkToken()
    {
        //esto es nuevo
        if (request()->user()){
            return User::where('email', request()->user()->email)->with('rol')->first();
        }
        return request()->user();
    }

    public function register(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email|unique:users,email',
            'name' => 'required|string|unique:users,name',
            'password' => 'required',
            'rol_id' => 'required'
        ]);

        $user = User::create([
            'email' => $fields['email'],
            'name' => $fields['name'],
            'password' => Hash::make($fields['password']),
            'rol_id' => $fields['rol_id'],
        ]);

        //create token
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'status' => true,
            'success' => true,
            'message' => 'registered successfully!',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ];
        return response($response, 201);
    }

    public function update(Request $request)
    {
        try {
            $user = User::find($request['id']);
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = $user->password;
            $user->rol_id = $request['rol_id'];
            $user->save();
            return response()->json($user);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required'
        ]);
        //check email
        $user = User::where('email', $fields['email'])->with('rol')->first();
        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(['status' => false, 'message' => 'invalid email or password'], 401);
        }

        //create token
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'status' => true,
            'message' => 'Login successful!',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ];
        return response($response, 201);
    }

    public function restore(Request $request)
    {

        //check email
        try {
            $field = $request->validate([
                'email' => 'required|string|email',
            ]);

            $user = User::where('email', $field['email'])->get()->first();
            if ($user) {

                    $token = $user->createToken('myapptoken')->plainTextToken;
                $url = env('APP_CLIENT_URL');
                $mail = new ResetPassword($user, $token, $url);

                DB::table('password_resets')->insert([
                    'email' => $field['email'],
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
                Mail::to($user['email'])->send($mail);
                return response([
                    'message' => 'Se ha enviado un correo de restablecimiento de contraseña'
                ], 200);


            } else return response()->json('no usuario');

        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function update_password(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
                'password_confirmation' => 'required|string',
            ]);
            $updatePassword = DB::table('password_resets')
                ->where([
                    'email' => $request->email,
                    'token' => $request->token
                ])
                ->first();

            if ($updatePassword) {
                User::where('email', $request->email)
                    ->update(['password' => password_hash($request['password'], PASSWORD_BCRYPT)]);

                DB::table('password_resets')->where(['email' => $request->email])->delete();

                return response([
                    'message' => 'Se ha actualizado su contraseña'
                ], 200);
            } else {
                return response([
                    'message' => 'Token inválido'
                ], 200);
            }
        } catch (\Exception $exception) {
            return $exception;
        }
    }
    public function IsUniqueEmail(Request $request)
    {
        $user = DB::select('select id from users where email like ' . "'$request->email'");
        return count($user) !== 0 ? response()->json(true) : response()->json(false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $idUsers = $request['users'];
            User::destroy($idUsers);
            return response()->json(
                [
                    'success' => true,
                    'data' => $idUsers,
                    'message' => 'All data deleted succesfully'
                ],
                200
            );
        } catch (\Exception $exception) {
            return response()->json(
                [
                    'success' => false,
                    'data' => null,
                    'message' => $exception->getMessage(),
                ],
                500
            );
        }
    }
}
