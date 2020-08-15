<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_productos');
            $table->string('producto');
            $table->string('descripcion');
            $table->string('RFC');
            $table->string('material');
            $table->string('Foto');
            $table->integer('descuento')->default(0);
            $table->boolean('activo')->default(1);
            $table->boolean('destacado');
            $table->enum('kilataje', ['10k', '14k', '18k'])->default('10k');
            $table->decimal('precio');
            $table->decimal('peso')->default(0);;
            $table->unsignedBigInteger('id_cat');
            $table->foreign('id_cat')->references('id_cat')->on('categorias');
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
        Schema::dropIfExists('productos');
    }
}
