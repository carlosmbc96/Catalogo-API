<?php

namespace Database\Seeders;

use App\Models\TipoTrabajo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_TrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = TipoTrabajo::create([
            'nombre'=>'Libro',
            'numero'=>'1',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Folleto',
            'numero'=>'2',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Revista',
            'numero'=>'3',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Braille',
            'numero'=>'4',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Modelo',
            'numero'=>'5',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Tabloide',
            'numero'=>'6',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Otros Trabajos',
            'numero'=>'7',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Otros Servicios',
            'numero'=>'8',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Cuadernos',
            'numero'=>'9',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Periolibro',
            'numero'=>'10',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Laminario',
            'numero'=>'11',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Exámenes',
            'numero'=>'12',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Libretas',
            'numero'=>'13',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Diplomas',
            'numero'=>'14',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'PDF',
            'numero'=>'15',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'EPUB',
            'numero'=>'16',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'Audiolibro',
            'numero'=>'17',
        ]);
        $tipo->save();
        $tipo = TipoTrabajo::create([
            'nombre'=>'APK',
            'numero'=>'18',
        ]);
        $tipo->save();
    }
}
