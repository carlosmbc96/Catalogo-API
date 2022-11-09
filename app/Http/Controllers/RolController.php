<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->limit;
        $page = $request->page;
        $order = $request->order;
        $filter = $request->filter;
        $all_rols = [];
        if ($limit === null) {
            $rols = DB::select('select id, name from rols');
            return response()->json($rols);
        } else {
            $rols = DB::select('select id, name from rols where name like ' . "'%$filter%'" . ' ORDER BY name ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
            $total_results = DB::select(
                'select id, name from rols where name like ' . "'%$filter%'" . ' ORDER BY name ' . $order
            );
            foreach ($rols as $rol) {
                array_push($all_rols, Rol::find($rol->id));
            }
            foreach ($all_rols as $rol) {
                $rol->permissions;
            }

            return response()->json([$all_rols, count($total_results)]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $rol = Rol::create([
                'name' => $request['name'],
                'description' => $request['description']
            ]);
            $rol->save();
            $permissions = $request['permissions'];

            foreach ($permissions as $permission) {
                DB::table('rol_permission')->insert([
                    'permission_id' => $permission,
                    'rol_id' => $rol->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            return response()->json(
                [
                    'success' => true,
                    'data' => $rol,
                    'message' => 'All data saved succesfully'
                ],
                201
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

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Rol $rol
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Rol $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $rol = Rol::where('id', $request['id'])->get()->first();
            $rol->name = $request['name'];
            $rol->description = $request['description'];
            $rol->save();

            $permissions = $request['permissions'];
            $this->clearPermissions($rol->id);

            foreach ($permissions as $permission) {
                DB::table('rol_permission')->insert([
                    'permission_id' => $permission,
                    'rol_id' => $rol->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            return response()->json(
                [
                    'success' => true,
                    'data' => $rol,
                    'message' => 'All data saved succesfully'
                ],
                201
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

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Rol $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            foreach ($request['rols'] as $rol) {
                $item = Rol::find($rol['id']);
                if (count($item->permissions()->get()) !== 0) {
                    for ($i = count($item->permissions()->get()) - 1; $i >= 0; $i--) {
                        $item->permissions()->get()[$i]->pivot->delete();
                    }
                }
                $item->delete();
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json();
    }
    private function clearPermissions($idRol)
    {
        DB::table('rol_permission')->where('rol_id', $idRol)->delete();
    }
}
