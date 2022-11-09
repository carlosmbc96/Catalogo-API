<?php

namespace Database\Seeders;

use App\Models\Clasificador_Obra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Clasificador_ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'1',
            'obra_id'=>'1',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'2',
            'obra_id'=>'2',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'3',
            'obra_id'=>'3',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'1',
            'obra_id'=>'4',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'2',
            'obra_id'=>'5',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'3',
            'obra_id'=>'6',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'1',
            'obra_id'=>'7',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'2',
            'obra_id'=>'8',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'3',
            'obra_id'=>'9',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'1',
            'obra_id'=>'10',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Clasificador_Obra::create([
            'clasificador_id'=>'2',
            'obra_id'=>'11',
        ]);
        $obra_tipo_libro->save();
    }
}
