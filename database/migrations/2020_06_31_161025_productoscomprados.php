<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productoscomprados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoscomprados', function (Blueprint $table) {
            $table->bigIncrements('id_compra');
            $table->integer('cantidad');
            $table->boolean('activo')->default(0);
            $table->boolean('enviado')->default(0);
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->timestamps();
        });
        //
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
