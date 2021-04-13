<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_producto', function (Blueprint $table) {
            $table->increments('id')->comment('ID UNICO');
            $table->string('tipop_nombre',45)->comment('GUARDA NOMBRE DEL TIPO DE PRODUCTO');
            $table->text('tipop_descripcion')->comment('GUARDA LA DESCRIPCION DEL TIPO DE PRODUCTO');
            $table->integer('tipop_status')->default(1)->comment('GUARDA EL ESTATUS DEL TIPO DE PRODUCTO');
            $table->integer('tipop_empresa_id')->nullable()->comment('GUARDA EL LA EMPRESA DEL TIPO DE PRODUCTO');
            $table->timestamps();   
            $table->engine = "InnoDB";
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
        Schema::dropIfExists('tipo_producto');
    }
}
