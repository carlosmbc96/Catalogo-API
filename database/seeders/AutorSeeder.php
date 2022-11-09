<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = Autor::create([
            'nombre'=>'Roberto Fernández Retamar',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'rafael@cuba.cu'
        ]);
        $autor->save();
        $autor = Autor::create([
            'nombre'=>'Alberto Fernández Brito',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'alberto@cuba.cu'
        ]);
        $autor->save();
        $autor = Autor::create([
            'nombre'=>'Leonor Bara Roca',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'leonor@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor->save();
        $autor = Autor::create([
            'nombre'=>'Anabel Pérez Campos',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'anabel@cuba.cu'
        ]);
        $autor->save();
        $autor = Autor::create([
            'nombre'=>'Carlos Méndez Martínez',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'carlos@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor->save();
        $autor = Autor::create([
            'nombre'=>'Daniel Buenaventura Rengo',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor = Autor::create([
            'nombre'=>'Tomasa Zafra',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor = Autor::create([
            'nombre'=>'Simon Saiz',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor = Autor::create([
            'nombre'=>'Valentin Pavon',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor = Autor::create([
            'nombre'=>'Vicente Jose Torregrosa',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor = Autor::create([
            'nombre'=>'Iñaki Molina',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor = Autor::create([
            'nombre'=>'Nicolae Prado',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor = Autor::create([
            'nombre'=>'Manuel Francisco Zabala',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor = Autor::create([
            'nombre'=>'Jose Tomas Valencia',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor = Autor::create([
            'nombre'=>'Luis Alberto Zabala',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor = Autor::create([
            'nombre'=>'Daniela Arcos',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu',
            'redes'=>'facebook',
        ]);
        $autor = Autor::create([
            'nombre'=>'Amalia Toledo',
            'fecha_nacimiento'=>'1990/02/22',
            'biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'peq_biografia'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
            architecto nostrum reprehenderit aliquid soluta ducimus, dolores,
            assumenda placeat distinctio iusto optio fugiat odio. Modi eos
            delectus voluptatum. Quo, eveniet perferendis. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Facere architecto nostrum
            reprehenderit aliquid soluta ducimus, dolores, assumenda placeat
            distinctio iusto optio fugiat odio. Modi eos delectus voluptatum. Quo,
            eveniet perferendis. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Facere architecto nostrum reprehenderit aliquid
            soluta ducimus, dolores, assumenda placeat distinctio iusto optio
            fugiat odio. Modi eos delectus voluptatum. Quo, eveniet perferendis.',
            'correo'=>'daniel@cuba.cu'
        ]);
        $autor->save();
    }
}
