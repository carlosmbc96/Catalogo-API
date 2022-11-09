<?php

namespace Database\Seeders;

use App\Models\Clasificador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasificadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clasificador = Clasificador::create([
            'nombre'=>'No Clasificado',
            'numero'=>'1',
        ]);
        $clasificador->save();
        $clasificador = Clasificador::create([
            'nombre'=>'Generalidades',
            'numero'=>'2',
        ]);
        $clasificador->save();
        $clasificador = Clasificador::create([
            'nombre'=>'Filosofía y Psicología',
            'numero'=>'3',
        ]);
        $clasificador->save();
        $clasificador = Clasificador::create([
            'nombre'=>'Religión y Teología',
            'numero'=>'4',
        ]);
        $clasificador->save();
        $clasificador = Clasificador::create([
            'nombre'=>'Sociología y Estadística',
            'numero'=>'5',
        ]);
        $clasificador->save();
        $clasificador = Clasificador::create([
            'nombre'=>'Ciencias Políticas y Económicas',
            'numero'=>'6',
        ]);
        $clasificador->save();
    }
}
