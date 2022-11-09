<?php

namespace Database\Seeders;

use App\Models\Clasificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clasificacion = Clasificacion::create([
            'nombre'=>'Primera edición',
            'siglas'=>'1Edic',
        ]);
        $clasificacion->save();
        $clasificacion = Clasificacion::create([
            'nombre'=>'Segunda edición',
            'siglas'=>'2Edic',
        ]);
        $clasificacion->save();
        $clasificacion = Clasificacion::create([
            'nombre'=>'Tercera edición',
            'siglas'=>'3Edic',
        ]);
        $clasificacion->save();
        $clasificacion = Clasificacion::create([
            'nombre'=>'Cuarta edición',
            'siglas'=>'4Edic',
        ]);
        $clasificacion->save();
        $clasificacion = Clasificacion::create([
            'nombre'=>'Servicios de Anuncios',
            'siglas'=>'Anucios',
        ]);
        $clasificacion->save();
        $clasificacion = Clasificacion::create([
            'nombre'=>'Compra',
            'siglas'=>'Compra',
        ]);
        $clasificacion->save();
    }
}
