<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create(['name'=>'Gestionar expedientes','code'=>'01']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura expedientes','code'=>'02']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar obras','code'=>'03']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura obras','code'=>'04']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar autores','code'=>'05']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura autores','code'=>'06']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar temáticas','code'=>'07']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura temáticas','code'=>'08']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar géneros','code'=>'09']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura géneros','code'=>'10']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar grupos','code'=>'11']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura grupos','code'=>'12']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar tipos de trabajo','code'=>'13']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura tipos de trabajo','code'=>'14']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar clasificaciones','code'=>'15']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura clasificaciones','code'=>'16']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar clasificadores','code'=>'17']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura clasificadores','code'=>'18']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar idiomas','code'=>'19']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura idiomas','code'=>'20']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar tipos de libro','code'=>'21']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura tipos de libro','code'=>'22']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar papeles','code'=>'23']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura papeles','code'=>'24']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar cartulinas','code'=>'25']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura cartulinas','code'=>'26']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar sitios de venta','code'=>'27']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura sitios de venta','code'=>'28']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar cabecera del catálogo','code'=>'29']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura cabecera del catálogo','code'=>'30']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar carrusel del catálogo','code'=>'31']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura carrusel del catálogo','code'=>'32']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar usuarios','code'=>'33']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura usuarios','code'=>'34']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar roles','code'=>'35']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura roles','code'=>'36']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar usuarios de obra','code'=>'37']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura usuarios de obra','code'=>'38']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar publicos objetivos audiolibros','code'=>'39']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura publicos objetivos audiolibros','code'=>'40']);
        $permission->save();
        $permission = Permission::create(['name'=>'Gestionar publicos objetivos ebooks','code'=>'41']);
        $permission->save();
        $permission = Permission::create(['name'=>'Lectura publicos objetivos ebooks','code'=>'42']);
        $permission->save();
    }
}
