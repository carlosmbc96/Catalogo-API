<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idioma = Idioma::create([
            'nombre'=>'Español',
            'numero'=>'1',
        ]);
        $idioma->save();
        $idioma = Idioma::create([
            'nombre'=>'Inglés',
            'numero'=>'2',
        ]);
        $idioma->save();
        $idioma = Idioma::create([
            'nombre'=>'Francés',
            'numero'=>'3',
        ]);
        $idioma->save();
        $idioma = Idioma::create([
            'nombre'=>'Chino',
            'numero'=>'4',
        ]);
        $idioma->save();
    }
}
