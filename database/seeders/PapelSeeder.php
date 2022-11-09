<?php

namespace Database\Seeders;

use App\Models\Papel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $papel = Papel::create([
            'nombre'=>'Papel 1',
            'numero'=>'1',
        ]);
        $papel->save();
        $papel = Papel::create([
            'nombre'=>'Papel 2',
            'numero'=>'2',
        ]);
        $papel->save();
        $papel = Papel::create([
            'nombre'=>'Papel 3',
            'numero'=>'3',
        ]);
        $papel->save();
    }
}
