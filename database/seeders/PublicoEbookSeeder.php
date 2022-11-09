<?php

namespace Database\Seeders;

use App\Models\PublicoEbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicoEbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publico = PublicoEbook::create([
            'nombre'=>'Profesional y Académica',
        ]);
        $publico->save();
        $publico = PublicoEbook::create([
            'nombre'=>'Solo para público adulto',
        ]);
        $publico->save();
        $publico = PublicoEbook::create([
            'nombre'=>'Adultos jóvenes',
        ]);
        $publico->save();
    }
}
