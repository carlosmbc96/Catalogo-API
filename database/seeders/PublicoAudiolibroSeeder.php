<?php

namespace Database\Seeders;

use App\Models\PublicoAudiolibro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicoAudiolibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publico = PublicoAudiolibro::create([
            'nombre'=>'Grados K - 3',
        ]);
        $publico->save();
        $publico = PublicoAudiolibro::create([
            'nombre'=>'Pre - K',
        ]);
        $publico->save();
        $publico = PublicoAudiolibro::create([
            'nombre'=>'Grados 5 - 8',
        ]);
        $publico->save();
    }
}
