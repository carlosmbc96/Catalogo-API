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
        Schema::create('rol_permission', function (Blueprint $table) {
            $table->id();
            /* $table->integer('permission_id')->unsigned();
            $table->integer('rol_id')->unsigned(); */
            $table->timestamps();

            $table->foreignId('permission_id')->references('id')->on('permissions');
            $table->foreignId('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_permission');
    }
};
