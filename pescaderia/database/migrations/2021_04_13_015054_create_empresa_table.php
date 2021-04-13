<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name",255)->comment('NOMBRE DE LA EMPRESA');
            $table->string("direccion",255)->comment('DIRECCION DE LA EMPRESA');
            $table->string("telefono",45)->comment('TELEFONO DE LA EMPRESA');
            $table->string("correo",45)->comment('CORREO DE LA EMPRESA');
            $table->text("descripcion")->comment('DIRECCION DE LA EMPRESA');
            $table->timestamps();
            $table->engine = 'InnoDB';	
            $table->charset = 'utf8';	
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
