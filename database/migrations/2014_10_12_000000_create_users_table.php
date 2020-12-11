<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('apellidos',250)->nullable();
            $table->string('email')->unique();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('subcategorias');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('kilatajes');
    }
}
