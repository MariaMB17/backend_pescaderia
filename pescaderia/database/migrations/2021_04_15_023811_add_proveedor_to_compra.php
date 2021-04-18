<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProveedorToCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra', function (Blueprint $table) {
            $table->integer('proveedor_id')->unsigned()->nullable()->comment('ID DEL PROVEEDOR')->after('compra_fecha');
            $table->foreign('proveedor_id')
            ->references('id')
            ->on('proveedor')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra', function (Blueprint $table) {
            $table->dropColumn('proveedor_id');
        });
    }
}
