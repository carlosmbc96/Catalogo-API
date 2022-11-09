<?php

namespace Database\Seeders;

use App\Models\Venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venta = Venta::create([
            'nombre'=>'Librería Fayad Jamis',
            'direccion'=>'Obispo No. 261, entre Cuba y Aguiar, La Habana Vieja',
        ]);
        $venta->save();
        $venta = Venta::create([
            'nombre'=>'La Virtuosa',
            'direccion'=>'Calzada No. 261, entre Lombillo y Single, Plaza',
        ]);
        $venta->save();
        $venta = Venta::create([
            'nombre'=>'Cuba Libros',
            'direccion'=>'https://www.cubalibros.cu',
        ]);
        $venta->save();
    }
}
