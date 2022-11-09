<?php

namespace Database\Seeders;

use App\Models\Obra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'Sexualidad y Géneros',
            'tipo_trabajo_id'=>'1',
            'clasificacion_id'=>'1',
            'expediente_id'=>'1',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'578-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'La Edad de Oro',
            'tipo_trabajo_id'=>'2',
            'clasificacion_id'=>'1',
            'expediente_id'=>'2',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'378-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'La Caperucita Roja',
            'tipo_trabajo_id'=>'3',
            'clasificacion_id'=>'1',
            'expediente_id'=>'3',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'El Gato con Botas',
            'tipo_trabajo_id'=>'4',
            'clasificacion_id'=>'1',
            'expediente_id'=>'4',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'Los Cuentos de Don Rafael',
            'tipo_trabajo_id'=>'5',
            'clasificacion_id'=>'1',
            'expediente_id'=>'5',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'La Vida y La Muerte',
            'tipo_trabajo_id'=>'1',
            'clasificacion_id'=>'1',
            'expediente_id'=>'6',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'Historias del Deporte Cubano',
            'tipo_trabajo_id'=>'4',
            'clasificacion_id'=>'1',
            'expediente_id'=>'7',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-9',
            'isbn'=>'178-959-13-4167-9',
            'titulo'=>'Si me quieres',
            'tipo_trabajo_id'=>'6',
            'clasificacion_id'=>'1',
            'expediente_id'=>'8',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-1',
            'isbn'=>'178-959-13-4167-1',
            'titulo'=>'Creatividad, Innovación y Emprendedorismo',
            'tipo_trabajo_id'=>'3',
            'clasificacion_id'=>'1',
            'expediente_id'=>'9',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-2',
            'isbn'=>'178-959-13-4167-2',
            'titulo'=>'Creatividad, Comunicación y Cultura',
            'tipo_trabajo_id'=>'1',
            'clasificacion_id'=>'1',
            'expediente_id'=>'10',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
        $obra = Obra::create([
            'isbn_obra'=>'978-959-13-4167-7',
            'isbn'=>'178-959-13-4167-7',
            'titulo'=>'Por el Terraplén',
            'tipo_trabajo_id'=>'7',
            'clasificacion_id'=>'1',
            'expediente_id'=>'11',
            'flexiback'=>'0',
            'hilo'=>'0',
            'rustica'=>'0',
            'caballete'=>'0',
            'sello'=>'0',
            'riso'=>'0',
            'cont_muestra'=>'0',
            'codigo'=>'0PRE021',
            'cpcu'=>'23641.3.67.56.4689.1',
            'acetato'=> '2',
            'pelicula_positiva'=> '0',
            'original_impreso'=> '0',
            'cdrom'=> '0',
            'tripa'=> '1',
            'cubierta'=> '2',
            'cubierta_retiro'=> '0',
            'ancho'=> '2"',
            'alto'=> '2"',
            'ilust_cant'=> '10',
            'ilust_linea'=> '2',
            'ilust_color'=> '2',
            'ilust_fotos'=> '6',
            'antecedentes'=> 'Antecedente 01',
            'precio_obra'=> '20',
            'precio_costo'=> '10',
            'peq_resenha_obra'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
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
        ]);
        $obra->save();
    }
}
