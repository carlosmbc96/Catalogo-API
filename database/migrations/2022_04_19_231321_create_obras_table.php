<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->text('titulo')->nullable();
            $table->text('codigo')->nullable();
            $table->text('isbn')->nullable();
            $table->text('derechos_autor_talento_artistico')->nullable();
            $table->text('isbn_obra')->nullable();
            $table->text('servicios_cuc')->nullable();
            $table->text('servicios_mn')->nullable();
            $table->text('cpcu')->nullable();
            $table->integer('acetato')->nullable();
            $table->integer('pelicula_positiva')->nullable();
            $table->integer('original_impreso')->nullable();
            $table->integer('cdrom')->nullable();
            $table->integer('tripa')->nullable();
            $table->integer('cubierta')->nullable();
            $table->integer('cubierta_retiro')->nullable();
            $table->boolean('flexiback')->nullable();
            $table->boolean('hilo')->nullable();
            $table->boolean('rustica')->nullable();
            $table->boolean('caballete')->nullable();
            $table->text('poligrafico')->nullable();
            $table->text('entrega_ueb_editorial')->nullable();
            $table->text('plan_terminado_ueb_editorial')->nullable();
            $table->text('ancho')->nullable();
            $table->text('alto')->nullable();
            $table->boolean('sello')->nullable();
            $table->boolean('riso')->nullable();
            $table->text('edicion_editorial')->nullable();
            $table->text('compl_general')->nullable();
            $table->integer('compl_general_valor')->nullable();
            $table->text('compl_redaccion')->nullable();
            $table->text('compl_mecanografia')->nullable();
            $table->text('compl_correccion')->nullable();
            $table->text('compl_ilustracion')->nullable();
            $table->text('compl_prensa')->nullable();
            $table->integer('compl_prensa_valor')->nullable();
            $table->integer('ilust_cant')->nullable();
            $table->integer('ilust_linea')->nullable();
            $table->integer('ilust_color')->nullable();
            $table->integer('ilust_fotos')->nullable();
            $table->integer('peliculas_recibidas')->nullable();
            $table->integer('no_suplemento')->nullable();
            $table->text('etapa')->nullable();
            $table->text('plan')->nullable();
            $table->text('comentarios')->nullable();
            $table->text('obsv_pasaporte')->nullable();
            $table->integer('coeficiente')->nullable();
            $table->integer('paginas')->nullable();
            $table->text('antecedentes')->nullable();
            $table->integer('tirada_plan')->nullable();
            $table->integer('cant_ename')->nullable();
            $table->integer('cant_ueb_ventas')->nullable();
            $table->integer('cant_otros')->nullable();
            $table->integer('cant_muestras')->nullable();
            $table->text('precio_obra')->nullable();
            $table->text('precio_costo')->nullable();
            $table->text('entrada')->nullable();
            $table->text('a_edicion')->nullable();
            $table->text('devuelto')->nullable();
            $table->text('cancelado')->nullable();
            $table->text('registro')->nullable();
            $table->text('term_editorial')->nullable();
            $table->text('entr_sev_poligrafico')->nullable();
            $table->text('entr_industria')->nullable();
            $table->text('terminado')->nullable();
            $table->integer('pr')->nullable();
            $table->integer('art')->nullable();
            $table->integer('lh')->nullable();
            $table->integer('may')->nullable();
            $table->integer('m')->nullable();
            $table->integer('vc')->nullable();
            $table->integer('cf')->nullable();
            $table->integer('ss')->nullable();
            $table->integer('ca')->nullable();
            $table->integer('c')->nullable();
            $table->integer('lt')->nullable();
            $table->integer('h')->nullable();
            $table->integer('g')->nullable();
            $table->integer('sc')->nullable();
            $table->integer('gmo')->nullable();
            $table->integer('ename')->nullable();
            $table->integer('mined')->nullable();
            $table->integer('otros')->nullable();
            $table->integer('total')->nullable();
            $table->integer('suma')->nullable();
            $table->text('subtitulo')->nullable();
            $table->text('peso')->nullable();
            $table->text('precio_cup')->nullable();
            $table->text('precio_usd')->nullable();
            $table->integer('no_doc_aprobacion')->nullable();
            $table->text('clav_meta')->nullable();
            $table->text('narradores')->nullable();
            $table->integer('num_pistas')->nullable();
            $table->text('derechos_autor')->nullable();
            $table->text('desc_comercial')->nullable();
            $table->text('version')->nullable();
            $table->text('portada')->nullable();
            $table->text('ilustracion1')->nullable();
            $table->text('ilustracion2')->nullable();
            $table->text('ilustracion3')->nullable();
            $table->text('ilustracion4')->nullable();
            $table->text('ilustracion5')->nullable();
            $table->boolean('cont_muestra')->nullable();
            $table->text('muestra')->nullable();
            $table->text('version_epub')->nullable();
            $table->text('sobre_derec_autor')->nullable();
            $table->text('colaboradores')->nullable();
            $table->text('nombre_coleccion')->nullable();
            $table->integer('numero_coleccion')->nullable();
            $table->text('nove_version')->nullable();
            $table->text('rese_editoriales')->nullable();
            $table->text('nombre_apellidos')->nullable();
            $table->text('fuente_resenha')->nullable();
            $table->text('descripcion_resenha')->nullable();
            $table->text('material_expl')->nullable();
            $table->text('edicion')->nullable();
            $table->integer('imag_interiores')->nullable();
            $table->text('ilustraciones')->nullable();
            $table->text('detalles_obra')->nullable();
            $table->text('personal_edicion')->nullable();
            $table->text('personal_disenho_cub')->nullable();
            $table->text('personal_disenho_int')->nullable();
            $table->text('personal_emplane')->nullable();
            $table->text('peq_resenha_obra')->nullable();

            $table->foreignId('tipo_trabajo_id')->references('id')->on('tipos_trabajo');
            $table->foreignId('clasificacion_id')->references('id')->on('clasificaciones');
            $table->foreignId('expediente_id')->references('id')->on('expedientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
};
