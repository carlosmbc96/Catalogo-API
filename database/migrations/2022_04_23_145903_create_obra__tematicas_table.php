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
        Schema::create('obra_tematica', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('obra_id')->references('id')->on('obras');
            $table->foreignId('tematica_id')->references('id')->on('tematicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obra_tematica');
    }
};
