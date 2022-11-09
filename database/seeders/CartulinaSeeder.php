<?php

namespace Database\Seeders;

use App\Models\Cartulina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartulinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartulina = Cartulina::create([
            'nombre'=>'Cartulina 1',
            'numero'=>'1',
        ]);
        $cartulina->save();
        $cartulina = Cartulina::create([
            'nombre'=>'Cartulina 2',
            'numero'=>'2',
        ]);
        $cartulina->save();
        $cartulina = Cartulina::create([
            'nombre'=>'Cartulina 3',
            'numero'=>'3',
        ]);
        $cartulina->save();
    }
}
