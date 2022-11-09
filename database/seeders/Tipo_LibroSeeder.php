<?php

namespace Database\Seeders;

use App\Models\TipoLibro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = TipoLibro::create([
            'nombre'=>'Texto',
            'numero'=>'1',
        ]);
        $tipo->save();
        $tipo = TipoLibro::create([
            'nombre'=>'Niños',
            'numero'=>'2',
        ]);
        $tipo->save();
        $tipo = TipoLibro::create([
            'nombre'=>'Jóvenes',
            'numero'=>'3',
        ]);
        $tipo->save();
    }
}
