<?php

namespace Database\Seeders;

use App\Models\Gestionable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GestionableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gestionable = Gestionable::create([
            'titulo'=>'Nuestro Catálogo',
            'eslogan'=>'Más de 2000 libros sobre una amplia gama de temas',
            'titulo_carrusel'=>'Obras recomendadas:',
        ]);
        $gestionable->save();
    }
}
