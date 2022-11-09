<?php

namespace Database\Seeders;

use App\Models\Genero_Obra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Genero_ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'1',
            'obra_id'=>'1',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'2',
            'obra_id'=>'2',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'3',
            'obra_id'=>'3',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'4',
            'obra_id'=>'4',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'5',
            'obra_id'=>'5',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'6',
            'obra_id'=>'6',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'7',
            'obra_id'=>'7',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'8',
            'obra_id'=>'8',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'9',
            'obra_id'=>'9',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'10',
            'obra_id'=>'10',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'11',
            'obra_id'=>'11',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'12',
            'obra_id'=>'1',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'13',
            'obra_id'=>'2',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'14',
            'obra_id'=>'3',
        ]);
        $genero_obra->save();
        $genero_obra = Genero_Obra::create([
            'genero_id'=>'15',
            'obra_id'=>'5',
        ]);
        $genero_obra->save();
    }
}
