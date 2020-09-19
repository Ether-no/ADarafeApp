<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritograbadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritograbados', function (Blueprint $table) {
            $table->bigIncrements('idcartgrabado');
            $table->string('grabado');
            $table->integer('numero')->default(0);
            $table->unsignedBigInteger('id_productos');
            $table->foreign('id_productos')->references('id_productos')->on('productos');
            $table->unsignedBigInteger('idcar');
            $table->foreign('idcar')->references('idcar')->on('carritos');
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
        Schema::dropIfExists('carritograbados');
    }
}
