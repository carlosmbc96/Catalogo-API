<?php

namespace Database\Seeders;

use App\Models\Obra_Papel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Obra_PapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'1',
            'obra_id'=>'1',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'2',
            'obra_id'=>'2',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'3',
            'obra_id'=>'3',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'1',
            'obra_id'=>'4',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'2',
            'obra_id'=>'5',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'3',
            'obra_id'=>'6',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'1',
            'obra_id'=>'7',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'2',
            'obra_id'=>'8',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'3',
            'obra_id'=>'9',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'1',
            'obra_id'=>'10',
        ]);
        $obra_tipo_libro->save();
        $obra_tipo_libro = Obra_Papel::create([
            'papel_id'=>'2',
            'obra_id'=>'11',
        ]);
        $obra_tipo_libro->save();
    }
}
