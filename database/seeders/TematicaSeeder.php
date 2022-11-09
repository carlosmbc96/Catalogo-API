<?php

namespace Database\Seeders;

use App\Models\Tematica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TematicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tematica = Tematica::create([
            'nombre'=>'Autoayuda',
            'numero'=>'1',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Aventura',
            'numero'=>'2',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Ciencia Ficción',
            'numero'=>'3',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Ciencias Naturales',
            'numero'=>'4',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Cine',
            'numero'=>'5',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Crítica literaria y de arte',
            'numero'=>'6',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Deporte',
            'numero'=>'7',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Divulgación científica',
            'numero'=>'8',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Economía',
            'numero'=>'9',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Gráfica y pasatiempos',
            'numero'=>'10',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Histórica',
            'numero'=>'11',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Horror',
            'numero'=>'12',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Humor',
            'numero'=>'13',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Medicina',
            'numero'=>'14',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Música',
            'numero'=>'15',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Policiacos',
            'numero'=>'16',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Político-social',
            'numero'=>'17',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Religión',
            'numero'=>'18',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Romántica',
            'numero'=>'19',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Textos literarios',
            'numero'=>'20',
        ]);
        $tematica->save();
        $tematica = Tematica::create([
            'nombre'=>'Otras',
            'numero'=>'21',
        ]);
        $tematica->save();
    }
}
