<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('idcar');
            $table->boolean('activo');
            $table->boolean('comprado');
            $table->boolean('grabado');
            $table->integer('cantidad');
            $table->string('foto');
            $table->string('descripcion');
            $table->integer('preciounitario');
            $table->integer('total');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->unsignedBigInteger('id_productos');
            $table->foreign('id_productos')->references('id_productos')->on('productos');
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
        Schema::dropIfExists('carritos');
    }
}
