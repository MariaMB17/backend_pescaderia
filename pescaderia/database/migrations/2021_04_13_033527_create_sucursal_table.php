<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal', function (Blueprint $table) {
            $table->increments("id");
            $table->string("sucursal_name",255)->comment('NOMBRE DE LA SUCURSALES');
            $table->text("sucursal_descripcion")->comment('DESCRIPCION DE LA SUCURSALES');
            $table->string("sucursal_direccion",255)->comment('DIRECCION DE LA SUCURSALES');   
            $table->string("sucursal_telefono",45)->comment('TELEFONO DE LA SUCURSALES');
            $table->string("sucursal_correo",45)->comment('CORREO DE LA SUCURSALES');
            $table->integer('empresa_id')
                  ->unsigned()->nullable();
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
        Schema::dropIfExists('sucursal');
    }
}
