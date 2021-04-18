<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_detalle', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('compra_id')->unsigned()->nullable()->comment('ID DE COMPRA');
            $table->foreign('compra_id')
            ->references('id')
            ->on('compra')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
            $table->integer('producto_id')->unsigned()->nullable()->comment('ID DEL PRODUCTO');
            $table->foreign('producto_id')
            ->references('id')
            ->on('producto')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
            $table->double('comprad_cantidad',[18,4])->default(0)->comment('GUARDA LA CANTIDAD DE LA COMPRA');
            $table->double('comprad_preciolista',[18,2])->default(0)->comment('GUARDA EL PRECIO DE LA COMPRA');
            $table->double('comprad_impuesto',[18,2])->default(0)->comment('GUARDA EL IMPUESTO DE LA COMPRA');
            $table->double('comprad_descuento',[18,2])->default(0)->comment('GUARDA EL DESCUENTO DE LA COMPRA');
            $table->double('comprad_preciofinal',[18,2])->default(0)->comment('GUARDA EL PRECIO FINAL DE LA COMPRA');
            $table->double('comprad_total',[18,2])->default(0)->comment('GUARDA EL TOTAL DE LA COMPRA');
            $table->integer('empresa_id')->unsigned()->nullable()->comment('ID DE LA EMPRESA');
            $table->foreign('empresa_id')
            ->references('id')
            ->on('empresa')
            ->onDelete('RESTRICT')
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
        Schema::dropIfExists('compra_detalle');
    }
}
