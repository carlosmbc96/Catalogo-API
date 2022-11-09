<?php

namespace Database\Seeders;

use App\Models\Gestionable_Obra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gestionable_ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gestionable_obra = Gestionable_Obra::create([
            'gestionable_id'=>'1',
            'obra_id'=>'1',
            'portada'=>'',
        ]);
        $gestionable_obra->save();
        $gestionable_obra = Gestionable_Obra::create([
            'gestionable_id'=>'1',
            'obra_id'=>'2',
            'portada'=>'',
        ]);
        $gestionable_obra->save();
        $gestionable_obra = Gestionable_Obra::create([
            'gestionable_id'=>'1',
            'obra_id'=>'3',
            'portada'=>'',
        ]);
        $gestionable_obra->save();
    }
}
