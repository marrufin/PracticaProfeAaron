<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string("nombre", 45)->nullable(false);
            $table->string("apellido", 80)->nullable(false);
            $table->tinyInteger("sexo")->default(3)->nullable(false);
            $table->date("fecha_nacimiento")->nullable();
            $table->string("celular", 15)->nullable();
            $table->string("email",45)->nullable(false)->unique();
            $table->string("password", 255);
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
    }
}
