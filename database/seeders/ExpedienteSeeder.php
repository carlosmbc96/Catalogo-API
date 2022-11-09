<?php

namespace Database\Seeders;

use App\Models\Expediente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expediente = Expediente::create([
            'nombre'=>'Sexualidad y Géneros',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'La Edad de Oro',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'La Caperucita Roja',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'El Gato con Botas',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'Los Cuentos de Don Rafael',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'La Vida y La Muerte',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'Historias del Deporte Cubano',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'Si me quieres',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'Creatividad, Innovación y Emprendedorismo',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'Creatividad, Comunicación y Cultura',
        ]);
        $expediente->save();
        $expediente = Expediente::create([
            'nombre'=>'Por el Terraplén',
        ]);
        $expediente->save();
    }
}
