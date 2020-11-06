<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tagproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagproductos', function (Blueprint $table) {
            $table->bigIncrements('id_tagproductos');
            $table->unsignedBigInteger('id_tags');
            $table->foreign('id_tags')->references('id_tags')->on('tags');
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
        //
    }
}
