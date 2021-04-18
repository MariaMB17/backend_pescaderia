<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->increments("id");
            $table->dateTime("compra_fecha")->nullable()->comment('FECHA DE COMPRA');
            $table->integer('moneda_id')->unsigned()->nullable()->comment('ID DE LA MONEDA');
            $table->foreign('moneda_id')
            ->references('id')
            ->on('moneda')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
            $table->integer("compra_exento")->comment('COMPRA EXENTA');
            $table->integer("compra_almacen")->comment('COMPRA ALMACEN');
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
        Schema::dropIfExists('compra');
    }
}
