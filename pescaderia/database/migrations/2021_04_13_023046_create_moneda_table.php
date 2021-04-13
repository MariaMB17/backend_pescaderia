<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moneda', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nombre",45)->comment('NOMBRE DE LA MONEDA');
            $table->string("descripcion",255)->comment('DESCRIPCION DE LA MONEDA');
            $table->string("simbolo",3)->comment('SIMBOLO DE LA MONEDA');
            $table->string("abrev",3)->comment('ABREVIATIRA DE LA MONEDA');
            $table->integer("status")->comment('STATUS DE LA MONEDA');
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
        Schema::dropIfExists('moneda');
    }
}
