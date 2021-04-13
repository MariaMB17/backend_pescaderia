<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id')->comment('ID UNICO');
            $table->string('prod_desc_corta')->comment('GUARDA LA DESCRIPCION CORTA DEL PRODUCTO');
            $table->string('prod_desc_larga')->comment('GUARDA LA DESCRIPCION LARGA DEL PRODUCTO');
            $table->integer('prod_tipo_id')->unsigned()->nullable()->comment('GUARDA EL TIPO DE PRODUCTO DEL PRODUCTO');
            $table->foreign('prod_tipo_id')
            ->references('id')
            ->on('tipo_producto')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
            $table->integer('prod_cat_id')->unsigned()->nullable()->comment('GUARDA LA CATEGORIA DEL PRODUCTO DEL PRODUCTO');
            $table->foreign('prod_cat_id')
            ->references('id')
            ->on('categoria')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
            $table->double('prod_minstock',[18,4])->default(0)->comment('GUARDA EL STOCK MINIMO DEL PRODUCTO');
            $table->double('prod_maxstock',[18,4])->default(0)->comment('GUARDA EL STOCK MAXIMO DEL PRODUCTO');
            $table->string('prod_path_img')->nullable()->comment('GUARDA LA RUTA DE LA IMAGEN DEL PRODUCTO');
            $table->integer('prod_status')->default(1)->comment('GUARDA EL STATUS DEL PRODUCTO 0 = INACTIVO, 1 = ACTIVO');
            $table->integer('prod_empresa_id')->comment('GUARDA LA EMPRESA DEL PRODUCTO');            
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
        Schema::dropIfExists('producto');
    }
}
