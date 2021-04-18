<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments("id");
            $table->string("prov_name",100)->comment('NOMBRE DEL PROVEEDOR');
            $table->string("prov_description",255)->comment('DESCRIPCION DEL PROVEEDOR');
            $table->string("prov_direccion",255)->comment('DIRECCION DEL PROVEEDOR');
            $table->string("prov_telefono",255)->comment('TELEFONO DEL PROVEEDOR');
            $table->string("prov_correo",255)->comment('CORREO DEL PROVEEDOR');
            $table->integer("prov_tipo")->comment('TIPO DE PROVEEDOR');
            $table->integer("prov_status")->comment('STATUS DEL PROVEEDOR');
            $table->integer("empresa_id")->unsigned()->nullable()->comment('ID DE LA EMPRESA');
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
        Schema::dropIfExists('proveedor');
    }
}
