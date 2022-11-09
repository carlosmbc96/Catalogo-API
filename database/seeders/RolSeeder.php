<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::create(['name'=>'Admin']);
        $rol->save();

        $permission = DB::table('permissions')
            ->select('permissions.id')
            ->get();

        foreach ($permission as $p) {
            DB::table('rol_permission')->insert([
                'permission_id' => $p->id,
                'rol_id' => $rol->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $rol = Rol::create(['name'=>'Editor']);
        $rol->save();

    }
}
