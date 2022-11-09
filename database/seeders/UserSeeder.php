<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passwordHash = password_hash('catalogo123', PASSWORD_BCRYPT);
        $rolAdmin = Rol::where('name',"Admin")->first();
        $user = User::create([
            'name'=>'Jade',
            'password'=>$passwordHash,
            'email'=>'catalogo@gmail.com',
            'active' => true,
            'rol_id'=> $rolAdmin->id
        ]);
        $user->save();
    }
}
