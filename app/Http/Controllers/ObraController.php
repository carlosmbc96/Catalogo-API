<?php

namespace App\Http\Controllers;

use App\Models\Autor_Obra;
use App\Models\Obra;
use App\Models\Autor;
use App\Models\Genero_Obra;
use App\Models\Obra_Tematica;
use App\Models\Grupo_Obra;
use App\Models\Idioma_Obra;
use App\Models\Obra_Papel;
use App\Models\Cartulina_Obra;
use App\Models\Clasificador_Obra;
use App\Models\Obra_PublicoAudiolibro;
use App\Models\Obra_PublicoEbook;
use App\Models\Obra_TipoLibro;
use App\Models\Obra_User;
use App\Models\Obra_UsuarioEditorial;
use App\Models\Obra_Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ObraController extends Controller
{

    public function index(Request $request)
    {

        $limit = $request->limit;
        $page = $request->page;
        $order = $request->order;
        $filter = $request->filter;
        $all_literary_works = [];
        if ($limit === null) {
            $literary_works = DB::select('select id, titulo, isbn, isbn_obra, cpcu from obras');
            return response()->json($literary_works);
        } else {
            $literary_works = DB::select('select id, titulo from obras where titulo like ' . "'%$filter%'" . ' ORDER BY titulo ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
            $total_results = DB::select(
                'select id, titulo from obras where titulo like ' . "'%$filter%'" . ' ORDER BY titulo ' . $order
            );
            foreach ($literary_works as $literary_work) {
                array_push($all_literary_works, Obra::find($literary_work->id));
            }
            foreach ($all_literary_works as $literary_work) {
                $literary_work->tipoTrabajo;
                $literary_work->expediente->obras;
                $literary_work->tiposLibro;
                $literary_work->autores;
                $literary_work->grupos;
                $literary_work->papeles;
                $literary_work->cartulinas;
                $literary_work->clasificadores;
                $literary_work->idiomas;
                $literary_work->generos;
                $literary_work->tematicas;
                $literary_work->users;
                $literary_work->ventas;
                $literary_work->usuarios_editorial;
                $literary_work->publicos_ebook;
                $literary_work->publicos_audiolibro;
            }
            return response()->json([$all_literary_works, count($total_results)]);
        }
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $obra = Obra::create([
                'titulo' => $request['titulo'],
                'codigo' => $request['codigo'],
                'isbn' => $request['isbn'],
                'derechos_autor_talento_artistico' => $request['derechos_autor_talento_artistico'],
                'isbn_obra' => $request['isbn_obra'],
                'servicios_cuc' => $request['servicios_cuc'],
                'servicios_mn' => $request['servicios_mn'],
                'cpcu' => $request['cpcu'],
                'acetato' => $request['acetato'],
                'pelicula_positiva' => $request['pelicula_positiva'],
                'original_impreso' => $request['original_impreso'],
                'cdrom' => $request['cdrom'],
                'tripa' => $request['tripa'],
                'tipo_trabajo_id' => $request['tipo_trabajo_id'],
                'clasificacion_id' => $request['clasificacion_id'],
                'expediente_id' => $request['expediente_id'],
                'cubierta' => $request['cubierta'],
                'cubierta_retiro' => $request['cubierta_retiro'],
                'flexiback' => $request['flexiback'],
                'hilo' => $request['hilo'],
                'rustica' => $request['rustica'],
                'caballete' => $request['caballete'],
                'poligrafico' => $request['poligrafico'],
                'entrega_ueb_editorial' => $request['entrega_ueb_editorial'],
                'plan_terminado_ueb_editorial' => $request['plan_terminado_ueb_editorial'],
                'ancho' => $request['ancho'],
                'alto' => $request['alto'],
                'sello' => $request['sello'],
                'riso' => $request['riso'],
                'edicion_editorial' => $request['edicion_editorial'],
                'compl_general' => $request['compl_general'],
                'compl_general_valor' => $request['compl_general_valor'],
                'compl_redaccion' => $request['compl_redaccion'],
                'compl_mecanografia' => $request['compl_mecanografia'],
                'compl_correccion' => $request['compl_correccion'],
                'compl_ilustracion' => $request['compl_ilustracion'],
                'compl_prensa' => $request['compl_prensa'],
                'compl_prensa_valor' => $request['compl_prensa_valor'],
                'ilust_cant' => $request['ilust_cant'],
                'ilust_linea' => $request['ilust_linea'],
                'ilust_color' => $request['ilust_color'],
                'ilust_fotos' => $request['ilust_fotos'],
                'peliculas_recibidas' => $request['peliculas_recibidas'],
                'no_suplemento' => $request['no_suplemento'],
                'etapa' => $request['etapa'],
                'plan' => $request['plan'],
                'comentarios' => $request['comentarios'],
                'obsv_pasaporte' => $request['obsv_pasaporte'],
                'coeficiente' => $request['coeficiente'],
                'paginas' => $request['paginas'],
                'antecedentes' => $request['antecedentes'],
                'tirada_plan' => $request['tirada_plan'],
                'cant_ename' => $request['cant_ename'],
                'cant_ueb_ventas' => $request['cant_ueb_ventas'],
                'cant_otros' => $request['cant_otros'],
                'cant_muestras' => $request['cant_muestras'],
                'precio_obra' => $request['precio_obra'],
                'precio_costo' => $request['precio_costo'],
                'entrada' => $request['entrada'],
                'a_edicion' => $request['a_edicion'],
                'devuelto' => $request['devuelto'],
                'cancelado' => $request['cancelado'],
                'registro' => $request['registro'],
                'term_editorial' => $request['term_editorial'],
                'entr_sev_poligrafico' => $request['entr_sev_poligrafico'],
                'entr_industria' => $request['entr_industria'],
                'terminado' => $request['terminado'],
                'pr' => $request['pr'],
                'art' => $request['art'],
                'lh' => $request['lh'],
                'may' => $request['may'],
                'm' => $request['m'],
                'vc' => $request['vc'],
                'cf' => $request['cf'],
                'ss' => $request['ss'],
                'ca' => $request['ca'],
                'c' => $request['c'],
                'lt' => $request['lt'],
                'h' => $request['h'],
                'g' => $request['g'],
                'sc' => $request['sc'],
                'gmo' => $request['gmo'],
                'ename' => $request['ename'],
                'mined' => $request['mined'],
                'otros' => $request['otros'],
                'total' => $request['total'],
                'suma' => $request['suma'],
                'subtitulo' => $request['subtitulo'],
                'peso' => $request['peso'],
                'precio_cup' => $request['precio_cup'],
                'precio_usd' => $request['precio_usd'],
                'no_doc_aprobacion' => $request['no_doc_aprobacion'],
                'clav_meta' => $request['clav_meta'],
                'narradores' => $request['narradores'],
                'num_pistas' => $request['num_pistas'],
                'derechos_autor' => $request['derechos_autor'],
                'desc_comercial' => $request['desc_comercial'],
                'version' => $request['version'],
                'cont_muestra' => $request['cont_muestra'],
                'muestra' => $request['muestra'],
                'version_epub' => $request['version_epub'],
                'sobre_derec_autor' => $request['sobre_derec_autor'],
                'colaboradores' => $request['colaboradores'],
                'nombre_coleccion' => $request['nombre_coleccion'],
                'numero_coleccion' => $request['numero_coleccion'],
                'nove_version' => $request['nove_version'],
                'rese_editoriales' => $request['rese_editoriales'],
                'nombre_apellidos' => $request['nombre_apellidos'],
                'fuente_resenha' => $request['fuente_resenha'],
                'descripcion_resenha' => $request['descripcion_resenha'],
                'material_expl' => $request['material_expl'],
                'edicion' => $request['edicion'],
                'imag_interiores' => $request['imag_interiores'],
                'ilustraciones' => $request['ilustraciones'],
                'detalles_obra' => $request['detalles_obra'],
                'personal_edicion' => $request['personal_edicion'],
                'personal_disenho_cub' => $request['personal_disenho_cub'],
                'personal_disenho_int' => $request['personal_disenho_int'],
                'personal_emplane' => $request['personal_emplane'],
                'peq_resenha_obra' => $request['peq_resenha_obra'],
            ]);
            if ($request->authors_id !== "undefined") {
                $autores = $request->authors_id;
                foreach ($autores as $autor) {
                    if (gettype($autor) !== 'string') {
                        Autor_Obra::create([
                            "autor_id" => $autor,
                            "obra_id" => $obra->id
                        ]);
                    }
                }
            }
            if ($request->tematics_id !== "undefined") {
                $tematics = $request->tematics_id;
                foreach ($tematics as $tematic) {
                    Obra_Tematica::create([
                        "tematica_id" => $tematic,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->groups_id !== "undefined") {
                $groups = $request->groups_id;
                foreach ($groups as $group) {
                    Grupo_Obra::create([
                        "grupo_id" => $group,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->genders_id !== "undefined") {
                $genders = $request->genders_id;
                foreach ($genders as $gender) {
                    Genero_Obra::create([
                        "genero_id" => $gender,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->languages_id !== "undefined") {
                $languages = $request->languages_id;
                foreach ($languages as $language) {
                    Idioma_Obra::create([
                        "idioma_id" => $language,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->papers_id !== "undefined") {
                $papers = $request->papers_id;
                foreach ($papers as $paper) {
                    Obra_Papel::create([
                        "papel_id" => $paper,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->cardboards_id !== "undefined") {
                $carboards = $request->cardboards_id;
                foreach ($carboards as $carboard) {
                    Cartulina_Obra::create([
                        "cartulina_id" => $carboard,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->clasificators_id !== "undefined") {
                $clasificators = $request->clasificators_id;
                foreach ($clasificators as $clasificator) {
                    Clasificador_Obra::create([
                        "clasificador_id" => $clasificator,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->publicos_audiolibro_id !== "undefined") {
                $publicos_audiolibro = $request->publicos_audiolibro_id;
                foreach ($publicos_audiolibro as $publico_audiolibro) {
                    Obra_PublicoAudiolibro::create([
                        "publico_audiolibro_id" => $publico_audiolibro,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->publicos_ebook_id !== "undefined") {
                $publicos_ebook = $request->publicos_ebook_id;
                foreach ($publicos_ebook as $publico_ebook) {
                    Obra_PublicoEbook::create([
                        "publico_ebook_id" => $publico_ebook,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->usuarios_obra_id !== "undefined") {
                $usuarios_obra = $request->usuarios_obra_id;
                foreach ($usuarios_obra as $usuario_obra) {
                    Obra_UsuarioEditorial::create([
                        "usuario_id" => $usuario_obra,
                        "obra_id" => $obra->id
                    ]);
                }
            }
            if ($request->types_book_id !== "undefined") {
                $types_book = $request->types_book_id;
                foreach ($types_book as $type_book) {
                    Obra_TipoLibro::create([
                        "tipo_libro_id" => $type_book,
                        "obra_id" => $obra->id
                    ]);
                }
            }

            if ($request->edit_list_worker !== [null]) {
                $workers = $request->edit_list_worker;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => 'edicion',
                    ]);
                }
            }
            if ($request->design_cub_list !== [null]) {
                $workers = $request->design_cub_list;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => 'disenho_cubierta',
                    ]);
                }
            }
            if ($request->design_int_list !== [null]) {
                $workers = $request->design_int_list;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => 'disenho_interior',
                    ]);
                }
            }
            if ($request->emplane_list !== [null]) {
                $workers = $request->emplane_list;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => 'emplane',
                    ]);
                }
            }
            if ($request->places_list !== [null]) {
                $places_list = $request->places_list;
                for ($i = 0; $i < count($places_list); $i++) {
                    Obra_Venta::create([
                        "venta_id" => $places_list[$i],
                        "obra_id" => $obra->id
                    ]);
                }
            }
            $obra->save();
            DB::commit();
            return response()->json($obra);
        } catch (\Exception $exception) {
            DB::rollback();
            return $exception;
        }
    }

    public function update(Request $request)
    {
        //se añadieron transiciones a los metodos
        try {
            DB::beginTransaction();
                $obra = Obra::find($request['id']);
                $obra->titulo = $request['titulo'];
                $obra->codigo = $request['codigo'];
                $obra->isbn = $request['isbn'];
                $obra->derechos_autor_talento_artistico = $request['derechos_autor_talento_artistico'];
                $obra->isbn_obra = $request['isbn_obra'];
                $obra->servicios_cuc = $request['servicios_cuc'];
                $obra->servicios_mn = $request['servicios_mn'];
                $obra->cpcu = $request['cpcu'];
                $obra->acetato = $request['acetato'];
                $obra->pelicula_positiva = $request['pelicula_positiva'];
                $obra->original_impreso = $request['original_impreso'];
                $obra->cdrom = $request['cdrom'];
                $obra->tripa = $request['tripa'];
                $obra->tipo_trabajo_id = $request['tipo_trabajo_id'];
                $obra->clasificacion_id = $request['clasificacion_id'];
                $obra->expediente_id = $request['expediente_id'];
                $obra->cubierta = $request['cubierta'];
                $obra->cubierta_retiro = $request['cubierta_retiro'];
                $obra->flexiback = $request['flexiback'];
                $obra->hilo = $request['hilo'];
                $obra->rustica = $request['rustica'];
                $obra->caballete = $request['caballete'];
                $obra->poligrafico = $request['poligrafico'];
                $obra->entrega_ueb_editorial = $request['entrega_ueb_editorial'];
                $obra->plan_terminado_ueb_editorial = $request['plan_terminado_ueb_editorial'];
                $obra->ancho = $request['ancho'];
                $obra->alto = $request['alto'];
                $obra->sello = $request['sello'];
                $obra->riso = $request['riso'];
                $obra->edicion_editorial = $request['edicion_editorial'];
                $obra->compl_general = $request['compl_general'];
                $obra->compl_general_valor = $request['compl_general_valor'];
                $obra->compl_redaccion = $request['compl_redaccion'];
                $obra->compl_mecanografia = $request['compl_mecanografia'];
                $obra->compl_correccion = $request['compl_correccion'];
                $obra->compl_ilustracion = $request['compl_ilustracion'];
                $obra->compl_prensa = $request['compl_prensa'];
                $obra->compl_prensa_valor = $request['compl_prensa_valor'];
                $obra->ilust_cant = $request['ilust_cant'];
                $obra->ilust_linea = $request['ilust_linea'];
                $obra->ilust_color = $request['ilust_color'];
                $obra->ilust_fotos = $request['ilust_fotos'];
                $obra->peliculas_recibidas = $request['peliculas_recibidas'];
                $obra->no_suplemento = $request['no_suplemento'];
                $obra->etapa = $request['etapa'];
                $obra->plan = $request['plan'];
                $obra->comentarios = $request['comentarios'];
                $obra->obsv_pasaporte = $request['obsv_pasaporte'];
                $obra->coeficiente = $request['coeficiente'];
                $obra->paginas = $request['paginas'];
                $obra->antecedentes = $request['antecedentes'];
                $obra->tirada_plan = $request['tirada_plan'];
                $obra->cant_ename = $request['cant_ename'];
                $obra->cant_ueb_ventas = $request['cant_ueb_ventas'];
                $obra->cant_otros = $request['cant_otros'];
                $obra->cant_muestras = $request['cant_muestras'];
                $obra->precio_obra = $request['precio_obra'];
                $obra->precio_costo = $request['precio_costo'];
                $obra->entrada = $request['entrada'];
                $obra->a_edicion = $request['a_edicion'];
                $obra->devuelto = $request['devuelto'];
                $obra->cancelado = $request['cancelado'];
                $obra->registro = $request['registro'];
                $obra->term_editorial = $request['term_editorial'];
                $obra->entr_sev_poligrafico = $request['entr_sev_poligrafico'];
                $obra->entr_industria = $request['entr_industria'];
                $obra->terminado = $request['terminado'];
                $obra->pr = $request['pr'];
                $obra->art = $request['art'];
                $obra->lh = $request['lh'];
                $obra->may = $request['may'];
                $obra->m = $request['m'];
                $obra->vc = $request['vc'];
                $obra->cf = $request['cf'];
                $obra->ss = $request['ss'];
                $obra->ca = $request['ca'];
                $obra->c = $request['c'];
                $obra->lt = $request['lt'];
                $obra->h = $request['h'];
                $obra->g = $request['g'];
                $obra->sc = $request['sc'];
                $obra->gmo = $request['gmo'];
                $obra->ename = $request['ename'];
                $obra->mined = $request['mined'];
                $obra->otros = $request['otros'];
                $obra->total = $request['total'];
                $obra->suma = $request['suma'];
                $obra->subtitulo = $request['subtitulo'];
                $obra->peso = $request['peso'];
                $obra->precio_cup = $request['precio_cup'];
                $obra->precio_usd = $request['precio_usd'];
                $obra->no_doc_aprobacion = $request['no_doc_aprobacion'];
                $obra->clav_meta = $request['clav_meta'];
                $obra->narradores = $request['narradores'];
                $obra->num_pistas = $request['num_pistas'];
                $obra->derechos_autor = $request['derechos_autor'];
                $obra->desc_comercial = $request['desc_comercial'];
                $obra->version = $request['version'];
                $obra->portada =  $obra->portada;
                $obra->ilustracion1 =  $obra->ilustracion1;
                $obra->ilustracion2 =  $obra->ilustracion2;
                $obra->ilustracion3 =   $obra->ilustracion3;
                $obra->ilustracion4 =  $obra->ilustracion4;
                $obra->ilustracion5 =  $obra->ilustracion5;
                $obra->cont_muestra = $request['cont_muestra'];
                $obra->muestra = $request['muestra'];
                $obra->version_epub = $request['version_epub'];
                $obra->sobre_derec_autor = $request['sobre_derec_autor'];
                $obra->colaboradores = $request['colaboradores'];
                $obra->nombre_coleccion = $request['nombre_coleccion'];
                $obra->numero_coleccion = $request['numero_coleccion'];
                $obra->nove_version = $request['nove_version'];
                $obra->rese_editoriales = $request['rese_editoriales'];
                $obra->nombre_apellidos = $request['nombre_apellidos'];
                $obra->fuente_resenha = $request['fuente_resenha'];
                $obra->descripcion_resenha = $request['descripcion_resenha'];
                $obra->material_expl = $request['material_expl'];
                $obra->edicion = $request['edicion'];
                $obra->imag_interiores = $request['imag_interiores'];
                $obra->ilustraciones = $request['ilustraciones'];
                $obra->detalles_obra = $request['detalles_obra'];
                $obra->personal_edicion = $request['personal_edicion'];
                $obra->personal_disenho_cub = $request['personal_disenho_cub'];
                $obra->personal_disenho_int = $request['personal_disenho_int'];
                $obra->personal_emplane = $request['personal_emplane'];
                $obra->peq_resenha_obra = $request['peq_resenha_obra'];

                for ($i = count($obra->tiposLibro()->get()) - 1; $i >= 0; $i--) {
                    $obra->tiposLibro()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->autores()->get()) - 1; $i >= 0; $i--) {
                    $obra->autores()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->grupos()->get()) - 1; $i >= 0; $i--) {
                    $obra->grupos()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->papeles()->get()) - 1; $i >= 0; $i--) {
                    $obra->papeles()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->cartulinas()->get()) - 1; $i >= 0; $i--) {
                    $obra->cartulinas()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->clasificadores()->get()) - 1; $i >= 0; $i--) {
                    $obra->clasificadores()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->idiomas()->get()) - 1; $i >= 0; $i--) {
                    $obra->idiomas()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->generos()->get()) - 1; $i >= 0; $i--) {
                    $obra->generos()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->tematicas()->get()) - 1; $i >= 0; $i--) {
                    $obra->tematicas()->get()[$i]->pivot->delete();
                }
                for ($i = 0; $i < count($obra->users()->get()); $i++) {
                    $obra->users()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->ventas()->get()) - 1; $i >= 0; $i--) {
                    $obra->ventas()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->publicos_audiolibro()->get()) - 1; $i >= 0; $i--) {
                    $obra->publicos_audiolibro()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->publicos_ebook()->get()) - 1; $i >= 0; $i--) {
                    $obra->publicos_ebook()->get()[$i]->pivot->delete();
                }
                for ($i = count($obra->usuarios_editorial()->get()) - 1; $i >= 0; $i--) {
                    $obra->usuarios_editorial()->get()[$i]->pivot->delete();
                }

                $publicos_audiolibro = $request->publicos_audiolibro_id;
                foreach ($publicos_audiolibro as $publico_audiolibro) {
                    Obra_PublicoAudioLibro::create([
                        "publico_audiolibro_id" => $publico_audiolibro,
                        "obra_id" => $obra->id
                    ]);
                }
                $publicos_ebook = $request->publicos_ebook_id;
                foreach ($publicos_ebook as $publico_ebook) {
                    Obra_PublicoEbook::create([
                        "publico_ebook_id" => $publico_ebook,
                        "obra_id" => $obra->id
                    ]);
                }
                $usuarios_obra = $request->usuarios_obra_id;
                foreach ($usuarios_obra as $usuario_obra) {
                    Obra_UsuarioEditorial::create([
                        "usuario_id" => $usuario_obra,
                        "obra_id" => $obra->id
                    ]);
                }
                $autores = $request->authors_id;
                foreach ($autores as $autor) {
                    if (gettype($autor) !== 'string') {
                        Autor_Obra::create([
                            "autor_id" => $autor,
                            "obra_id" => $obra->id
                        ]);
                    }
                }
                $grupos = $request->groups_id;
                foreach ($grupos as $grupo) {
                    Grupo_Obra::create([
                        "grupo_id" => $grupo,
                        "obra_id" => $obra->id
                    ]);
                }
                $papeles = $request->papers_id;
                foreach ($papeles as $papel) {
                    Obra_Papel::create([
                        "papel_id" => $papel,
                        "obra_id" => $obra->id
                    ]);
                }
                $cartulinas = $request->cardboards_id;
                foreach ($cartulinas as $cartulina) {
                    Cartulina_Obra::create([
                        "cartulina_id" => $cartulina,
                        "obra_id" => $obra->id
                    ]);
                }
                $clasificadores = $request->clasificators_id;
                foreach ($clasificadores as $clasificador) {
                    Clasificador_Obra::create([
                        "clasificador_id" => $clasificador,
                        "obra_id" => $obra->id
                    ]);
                }
                $idiomas = $request->languages_id;
                foreach ($idiomas as $idioma) {
                    Idioma_Obra::create([
                        "idioma_id" => $idioma,
                        "obra_id" => $obra->id
                    ]);
                }
                $generos = $request->genders_id;
                foreach ($generos as $genero) {
                    Genero_Obra::create([
                        "genero_id" => $genero,
                        "obra_id" => $obra->id
                    ]);
                }
                $tematicas = $request->tematics_id;
                foreach ($tematicas as $tematica) {
                    Obra_Tematica::create([
                        "tematica_id" => $tematica,
                        "obra_id" => $obra->id
                    ]);
                }
                $types_book = $request->types_book_id;
                foreach ($types_book as $type_book) {
                    Obra_TipoLibro::create([
                        "tipo_libro_id" => $type_book,
                        "obra_id" => $obra->id
                    ]);
                }
                $workers = $request->edit_list_worker;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => "edicion",
                    ]);
                }
                $workers = $request->design_cub_list;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => "disenho_cubierta",
                    ]);
                }
                $workers = $request->design_int_list;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => "disenho_interior",
                    ]);
                }
                $workers = $request->emplane_list;
                foreach ($workers as $worker) {
                    Obra_User::create([
                        "user_id" => $worker,
                        "obra_id" => $obra->id,
                        "relacion" => "emplane",
                    ]);
                }
                $places = $request->places_list;
                foreach ($places as $place) {
                    Obra_Venta::create([
                        "venta_id" => $place,
                        "obra_id" => $obra->id
                    ]);
                }
                $obra->save();
                DB::commit();
                return response()->json($obra);

        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }

    public function destroy(Request $request)
    {
        try {
            DB::beginTransaction();
                foreach ($request['obra'] as $obra) {
                    $item = Obra::find($obra['id']);
                    if (count($item->autores()->get()) !== 0) {
                        for ($i = count($item->autores()->get()) - 1; $i >= 0; $i--) {
                            $item->autores()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->tematicas()->get()) !== 0) {
                        for ($i = count($item->tematicas()->get()) - 1; $i >= 0; $i--) {
                            $item->tematicas()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->generos()->get()) !== 0) {
                        for ($i = count($item->generos()->get()) - 1; $i >= 0; $i--) {
                            $item->generos()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->tiposLibro()->get()) !== 0) {
                        for ($i = count($item->tiposLibro()->get()) - 1; $i >= 0; $i--) {
                            $item->tiposLibro()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->grupos()->get()) !== 0) {
                        for ($i = count($item->grupos()->get()) - 1; $i >= 0; $i--) {
                            $item->grupos()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->papeles()->get()) !== 0) {
                        for ($i = count($item->papeles()->get()) - 1; $i >= 0; $i--) {
                            $item->papeles()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->publicos_ebook()->get()) !== 0) {
                        for ($i = count($item->publicos_ebook()->get()) - 1; $i >= 0; $i--) {
                            $item->publicos_ebook()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->publicos_audiolibro()->get()) !== 0) {
                        for ($i = count($item->publicos_audiolibro()->get()) - 1; $i >= 0; $i--) {
                            $item->publicos_audiolibro()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->usuarios_editorial()->get()) !== 0) {
                        for ($i = count($item->usuarios_editorial()->get()) - 1; $i >= 0; $i--) {
                            $item->usuarios_editorial()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->cartulinas()->get()) !== 0) {
                        for ($i = count($item->cartulinas()->get()) - 1; $i >= 0; $i--) {
                            $item->cartulinas()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->clasificadores()->get()) !== 0) {
                        for ($i = count($item->clasificadores()->get()) - 1; $i >= 0; $i--) {
                            $item->clasificadores()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->idiomas()->get()) !== 0) {
                        for ($i = count($item->idiomas()->get()) - 1; $i >= 0; $i--) {
                            $item->idiomas()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->users()->get()) !== 0) {
                        for ($i = count($item->users()->get()) - 1; $i >= 0; $i--) {
                            $item->users()->get()[$i]->pivot->delete();
                        }
                    }
                    if (count($item->ventas()->get()) !== 0) {
                        for ($i = count($item->ventas()->get()) - 1; $i >= 0; $i--) {
                            $item->ventas()->get()[$i]->pivot->delete();
                        }
                    }
                    if ($item->portada !== null) {
                        Storage::disk('public')->delete($item->portada);
                    }
                    if ($item->ilustracion1 !== null) {
                        Storage::disk('public')->delete($item->ilustracion1);
                    }
                    if ($item->ilustracion2 !== null) {
                        Storage::disk('public')->delete($item->ilustracion2);
                    }
                    if ($item->ilustracion3 !== null) {
                        Storage::disk('public')->delete($item->ilustracion3);
                    }
                    if ($item->ilustracion4 !== null) {
                        Storage::disk('public')->delete($item->ilustracion4);
                    }
                    if ($item->ilustracion5 !== null) {
                        Storage::disk('public')->delete($item->ilustracion5);
                    }
                    $item->delete();
                }
                DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception;
        }
        return response()->json();
    }

    public function storeAuthors(Request $request)
    {
        $res = [];
        try {
            foreach ($request->names as $nombre) {
                $autor = Autor::create([
                    "nombre" => $nombre,
                    'ci' => '',
                    'biografia' => '',
                    'nacionalidad' => '',
                    'correo' => '',
                    'redes' => '',
                ]);
                array_push($res, $autor);
            }
            return response()->json($res);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
    public function filtersObras(Request $request)
    {
        //opcion del select general
        $option_search = $request->option_search;
        $obras_complete = [];
        //tematicas
        $tematicas_id = $request->tematicas_id;
        $cant_tematicas = count($tematicas_id);
        $tematicas_ids = join(', ', $tematicas_id);
        //formato
        $formato_id = $request->formato_id;
        //autores
        $authors_id = $request->authors_id;
        $cant_authors = count($authors_id);
        $authors_ids = join(', ', $authors_id);
        //lo que se ha escrito en la busqueda general
        $input = $request->input_search;
        //parametro limit que es la cantidad de resultados que se van a devolver para la paginacion
        $limit = $request->limit;
        //parametro page es la pagina actual que se utiliza para calcular el offset
        $page = $request->page;
        $query_tematicas = '';
        $query_formatos = '';
        $query_authors = '';
        $query_general_search = '';
        $inner_join_authors = '';
        $inner_join_tematics = '';
        $having_tematics = '';
        $having_authors = '';
        $AND = ($cant_authors !== 0 && $cant_tematicas !== 0) ? ' AND' : '';
        $order_by = $request->order;
        $HAVING = ($cant_authors !== 0 || $cant_tematicas !== 0) ? ' HAVING' : '';

        if ($cant_tematicas !== 0) {
            $inner_join_tematics = 'INNER JOIN obra_tematica ON obras.id = obra_tematica.obra_id';
            $query_tematicas = ' AND tematica_id IN ( ' . $tematicas_ids . ' )';
            $having_tematics = ' count( DISTINCT tematica_id ) = ' . $cant_tematicas;
        }
        if ($formato_id !== null) {
            $query_formatos = ' AND obras.tipo_trabajo_id = ' . $formato_id;
        }
        if ($cant_authors !== 0) {
            $inner_join_authors = 'INNER JOIN autor_obra ON obras.id = autor_obra.obra_id';
            $query_authors = ' AND autor_id IN ( ' . $authors_ids . ' )';
            $having_authors = ' count( DISTINCT autor_id ) = ' . $cant_authors;
        }

        switch ($option_search) {
            case 'Autor':
                $query_general_search = 'SELECT
        obras.titulo
        FROM
        obras '
                    . $inner_join_tematics . '
        INNER JOIN autor_obra ON obras.id = autor_obra.obra_id
        INNER JOIN autores ON autor_obra.autor_id = autores.id
        WHERE
        (autores.nombre LIKE ' . "'%$input%'" . ')';
                break;

            case 'Titulo':
                $query_general_search = 'SELECT
        obras.titulo
        FROM
        obras ' . $inner_join_tematics . $inner_join_authors . '
        WHERE
        (obras.titulo LIKE ' . "'%$input%'" . ')';
                break;

            case 'Tematica':
                $query_general_search = 'SELECT
        obras.titulo
        FROM
        obras ' . $inner_join_authors . '
        INNER JOIN obra_tematica ON obras.id = obra_tematica.obra_id
        INNER JOIN tematicas ON obra_tematica.tematica_id = tematicas.id
        WHERE
        (tematicas.nombre LIKE ' . "'%$input%'" . ')';
                break;

            default:
                $query_general_search = 'SELECT
            obras.titulo
        FROM
            obras
            INNER JOIN autor_obra ON obras.id = autor_obra.obra_id
            INNER JOIN autores ON autor_obra.autor_id = autores.id
            INNER JOIN obra_tematica ON obras.id = obra_tematica.obra_id
            INNER JOIN tematicas ON obra_tematica.tematica_id = tematicas.id
        WHERE
            (autores.nombre LIKE  ' . "'%$input%'" . '
            OR obras.titulo LIKE  ' . "'%$input%'" . '
            OR tematicas.nombre LIKE  ' . "'%$input%'" . '
            )';
                break;
        }
        $total_obras = DB::select(
            $query_general_search .
                $query_formatos .
                $query_tematicas .
                $query_authors . '
        GROUP BY obras.titulo ' . $HAVING
                . $having_tematics . $AND . $having_authors
        );
        $obras = DB::select(
            $query_general_search .
                $query_formatos .
                $query_tematicas .
                $query_authors  . '
            GROUP BY obras.titulo ' . $HAVING
                . $having_tematics . $AND . $having_authors . ' ORDER BY obras.titulo ' . $order_by . '
                LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit
        );
        foreach ($obras as $obra) {
            array_push($obras_complete, Obra::where('titulo', $obra->titulo)->first());
        }
        foreach ($obras_complete as $obra) {
            $obra->tipoTrabajo;
            $obra->expediente->obras;
            $obra->tiposLibro;
            $obra->autores;
            $obra->grupos;
            $obra->papeles;
            $obra->cartulinas;
            $obra->clasificadores;
            $obra->idiomas;
            $obra->generos;
            $obra->tematicas;
            $obra->users;
            $obra->ventas;
            $obra->usuarios_editorial;
            $obra->publicos_ebook;
            $obra->publicos_audiolibro;
            foreach ($obra->expediente->obras as $obra) {
                $obra->tipoTrabajo;
                $obra->ventas;
            }
        }

        return response()->json([$obras_complete, count($total_obras)]);
    }
    public function getAuthorsByObraId(Request $request)
    {
        $obras = [];
        $obras_id = $request->obras_id;
        foreach ($obras_id as $obra_id) {
            $obra = Obra::find($obra_id);
            $obra->autores;
            array_push($obras, $obra);
        }
        return response()->json($obras);
    }
    public function updatePortada(Request $request)
    {
        $obra = Obra::find($request['id']);
        if ($request->hasFile('portada')) {
            if ($obra->portada !== null) {
                Storage::disk('public')->delete($obra->portada);
            }
            $obra->portada = $request->file('portada')->store('obras', 'public');
        } else if ($request['portada'] !== null) {
            $obra->portada = $obra->portada;
        } else {
            if ($obra->portada !== null) {
                Storage::disk('public')->delete($obra->portada);
                $obra->portada = null;
            }
        }
        if ($request->hasFile('ilustracion1')) {
            if ($obra->ilustracion1 !== null) {
                Storage::disk('public')->delete($obra->ilustracion1);
            }
            $obra->ilustracion1 = $request->file('ilustracion1')->store('obras', 'public');
        } else if ($request['ilustracion1'] !== null) {
            $obra->ilustracion1 = $obra->ilustracion1;
        } else {
            if ($obra->ilustracion1 !== null) {
                Storage::disk('public')->delete($obra->ilustracion1);
                $obra->ilustracion1 = null;
            }
        }
        if ($request->hasFile('ilustracion2')) {
            if ($obra->ilustracion2 !== null) {
                Storage::disk('public')->delete($obra->ilustracion2);
            }
            $obra->ilustracion2 = $request->file('ilustracion2')->store('obras', 'public');
        } else if ($request['ilustracion2'] !== null) {
            $obra->ilustracion2 = $obra->ilustracion2;
        } else {
            if ($obra->ilustracion2 !== null) {
                Storage::disk('public')->delete($obra->ilustracion2);
                $obra->ilustracion2 = null;
            }
        }
        if ($request->hasFile('ilustracion3')) {
            if ($obra->ilustracion3 !== null) {
                Storage::disk('public')->delete($obra->ilustracion3);
            }
            $obra->ilustracion3 = $request->file('ilustracion3')->store('obras', 'public');
        } else if ($request['ilustracion3'] !== null) {
            $obra->ilustracion3 = $obra->ilustracion3;
        } else {
            if ($obra->ilustracion3 !== null) {
                Storage::disk('public')->delete($obra->ilustracion3);
                $obra->ilustracion3 = null;
            }
        }
        if ($request->hasFile('ilustracion4')) {
            if ($obra->ilustracion4 !== null) {
                Storage::disk('public')->delete($obra->ilustracion4);
            }
            $obra->ilustracion4 = $request->file('ilustracion4')->store('obras', 'public');
        } else if ($request['ilustracion4'] !== null) {
            $obra->ilustracion4 = $obra->ilustracion4;
        } else {
            if ($obra->ilustracion4 !== null) {
                Storage::disk('public')->delete($obra->ilustracion4);
                $obra->ilustracion4 = null;
            }
        }
        if ($request->hasFile('ilustracion5')) {
            if ($obra->ilustracion5 !== null) {
                Storage::disk('public')->delete($obra->ilustracion5);
            }
            $obra->ilustracion5 = $request->file('ilustracion5')->store('obras', 'public');
        } else if ($request['ilustracion5'] !== null) {
            $obra->ilustracion5 = $obra->ilustracion5;
        } else {
            if ($obra->ilustracion5 !== null) {
                Storage::disk('public')->delete($obra->ilustracion5);
                $obra->ilustracion5 = null;
            }
        }
        $obra->save();
    }
}
