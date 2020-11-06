<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Descuentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->bigIncrements('id_descuentos');
            $table->integer('porcentaje');
            $table->unsignedBigInteger('id_subcategoria');
            $table->foreign('id_subcategoria')->references('id_subcategoria')->on('subcategorias');
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
        //
    }
}
