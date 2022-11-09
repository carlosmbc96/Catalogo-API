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
        Schema::create('gestionable_obra', function (Blueprint $table) {
            $table->id();
            $table->string('portada');
            $table->timestamps();

            $table->foreignId('obra_id')->references('id')->on('obras')->onDelete('cascade');
            $table->foreignId('gestionable_id')->references('id')->on('gestionables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestionable_obra');
    }
};
