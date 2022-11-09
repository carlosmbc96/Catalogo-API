<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = Genero::create([
            'nombre'=>'Biografía',
            'numero'=>'1',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Cancionero',
            'numero'=>'2',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Cuento',
            'numero'=>'3',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Ensayo',
            'numero'=>'4',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Historietas',
            'numero'=>'5',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Investigación',
            'numero'=>'6',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Literatura centifico-técnica',
            'numero'=>'7',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Literatura infantil',
            'numero'=>'8',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Literatura para jóvenes',
            'numero'=>'9',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Novela',
            'numero'=>'10',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Poesía',
            'numero'=>'11',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Relato',
            'numero'=>'12',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Teatro',
            'numero'=>'13',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Testimonio',
            'numero'=>'14',
        ]);
        $genero->save();
        $genero = Genero::create([
            'nombre'=>'Otros',
            'numero'=>'15',
        ]);
        $genero->save();
    }
}
