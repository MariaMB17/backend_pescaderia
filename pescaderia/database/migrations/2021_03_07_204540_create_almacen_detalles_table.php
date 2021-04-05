<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_detalles', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('almacen_id')->unsigned()->nullable()->comment('REFERENCIA ALMACEN');
            $table->foreign('almacen_id')
                  ->references('id')
                  ->on('almacen')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->integer('tipo_movimiento_id')->unsigned()->nullable()->comment('REFERENCIA TIPO DE MOVIEMIENTO');
            $table->foreign('tipo_movimiento_id')
                  ->references('id')
                  ->on('tipo_movimientos')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
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
        Schema::dropIfExists('almacen_detalles');
    }
}
