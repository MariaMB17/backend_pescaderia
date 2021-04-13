<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id')->comment('ID UNICO');
            $table->string('cat_nombre',45)->comment('GUARDA EL NOMBRE DE LA CATEGORIA');
            $table->text('cat_descripcion')->comment('GUARDA LA DESCRIPCION DE LA CATEGORIA');
            $table->integer('cat_status')->default(1)->comment('GUARDA EL ESTATUS DE LA CATEGORIA');
            $table->integer('cat_empresa_id')->comment('GUARDA LA EMPRESA DE LA CATEGORIA');
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
        Schema::dropIfExists('categoria');
    }
}
