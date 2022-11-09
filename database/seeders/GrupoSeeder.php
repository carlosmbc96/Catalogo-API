<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Grupo = Grupo::create([
            'nombre'=>'Cuadernos de trabajo',
            'numero'=>'1',
        ]);
        $Grupo->save();
        $Grupo = Grupo::create([
            'nombre'=>'Registros y talonarios',
            'numero'=>'2',
        ]);
        $Grupo->save();
        $Grupo = Grupo::create([
            'nombre'=>'Laminarios',
            'numero'=>'3',
        ]);
        $Grupo->save();
        $Grupo = Grupo::create([
            'nombre'=>'Libros de la Educación Preescolar',
            'numero'=>'4',
        ]);
        $Grupo->save();
        $Grupo = Grupo::create([
            'nombre'=>'Libros de la Educación Primaria',
            'numero'=>'5',
        ]);
        $Grupo->save();
        $Grupo = Grupo::create([
            'nombre'=>'Libros de Secundaria Basica',
            'numero'=>'6',
        ]);
        $Grupo->save();
    }
}
