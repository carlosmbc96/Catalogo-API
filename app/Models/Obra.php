<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;
    protected $table = "obras";
    protected $fillable = [
            'titulo',
            'codigo',
            'isbn',
            'derechos_autor_talento_artistico',
            'isbn_obra',
            'servicios_cuc',
            'servicios_mn',
            'cpcu',
            'acetato',
            'pelicula_positiva',
            'original_impreso',
            'cdrom',
            'tripa',
            'cubierta',
            'cubierta_retiro',
            'flexiback',
            'hilo',
            'rustica',
            'caballete',
            'poligrafico',
            'entrega_ueb_editorial',
            'plan_terminado_ueb_editorial',
            'ancho',
            'alto',
                'sello',
            'riso',
            'edicion_editorial',
            'compl_general',
            'compl_general_valor',
            'compl_redaccion',
            'compl_mecanografia',
            'compl_correccion',
            'compl_ilustracion',
            'compl_prensa',
            'compl_prensa_valor',
            'ilust_cant',
            'ilust_linea',
            'ilust_color',
            'ilust_fotos',
            'peliculas_recibidas',
            'no_suplemento',
            'etapa',
            'plan',
            'comentarios',
            'obsv_pasaporte',
            'coeficiente',
            'paginas',
            'antecedentes',
            'tirada_plan',
            'cant_ename',
            'cant_ueb_ventas',
            'cant_otros',
            'cant_muestras',
            'precio_obra',
            'precio_costo',
            'entrada',
            'a_edicion',
            'devuelto',
            'cancelado',
            'registro',
            'term_editorial',
            'entr_sev_poligrafico',
            'entr_industria',
            'terminado',
            'pr',
            'art',
            'lh',
            'may',
            'm',
            'vc',
            'cf',
            'ss',
            'ca',
            'c',
            'lt',
            'h',
            'g',
            'sc',
            'gmo',
            'ename',
            'mined',
            'otros',
            'total',
            'suma',
            'subtitulo',
            'peso',
            'precio_cup',
            'precio_usd',
            'no_doc_aprobacion',
            'clav_meta',
            'narradores',
            'num_pistas',
            'derechos_autor',
            'desc_comercial',
            'version',
            'portada',
            'cont_muestra',
            'muestra',
            'version_epub',
            'sobre_derec_autor',
            'colaboradores',
            'nombre_coleccion',
            'numero_coleccion',
            'nove_version',
            'rese_editoriales',
            'nombre_apellidos',
            'fuente_resenha',
            'descripcion_resenha',
            'material_expl',
            'edicion',
            'imag_interiores',
            'ilustraciones',
            'detalles_obra',
            'personal_edicion',
            'tipo_trabajo_id',
            'clasificacion_id',
            'expediente_id',
            'personal_disenho_cub',
            'personal_disenho_int',
            'personal_emplane',
            'peq_resenha_obra',
            'ilustracion1',
            'ilustracion2',
            'ilustracion3',
            'ilustracion4',
            'ilustracion5',
    ];

    public function autores()
    {
        return $this->belongsToMany(Autor::class, 'autor_obra');
    }
    public function tematicas()
    {
        return $this->belongsToMany(Tematica::class, 'obra_tematica');
    }
    public function generos()
    {
        return $this->belongsToMany(Genero::class, 'genero_obra');
    }
    public function tiposLibro()
    {
        return $this->belongsToMany(TipoLibro::class, 'obra_tipo_libro');
    }
    public function tipoTrabajo()
    {
        return $this->belongsTo(TipoTrabajo::class, 'tipo_trabajo_id');
    }
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expediente_id');
    }
    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'clasificacion_id');
    }
    public function cartulinas()
    {
        return $this->belongsToMany(Cartulina::class, 'cartulina_obra');
    }
    public function papeles()
    {
        return $this->belongsToMany(Papel::class, 'obra_papel');
    }
    public function clasificadores()
    {
        return $this->belongsToMany(Clasificador::class, 'clasificador_obra');
    }
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'obra_venta');
    }
    public function idiomas()
    {
        return $this->belongsToMany(Idioma::class, 'idioma_obra');
    }
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_obra');
    }
    public function usuarios_editorial()
    {
        return $this->belongsToMany(Usuario::class, 'obra_usuario');
    }
    public function publicos_ebook()
    {
        return $this->belongsToMany(PublicoEbook::class, 'obra_publico_ebook');
    }
    public function publicos_audiolibro()
    {
        return $this->belongsToMany(PublicoAudiolibro::class, 'obra_publico_audiolibro');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'obra_user')->withPivot('relacion');
    }
    public function gestionables()
    {
        return $this->belongsToMany(Gestionable::class, 'gestionable_obra')->withPivot('portada');
    }
}
