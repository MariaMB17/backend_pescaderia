<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdEmpresaToMoneda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('moneda', function (Blueprint $table) {
            $table->integer('empresa_id')->unsigned()->nullable()->comment('ID DE LA EMPRESA')->after('moneda_status');
            $table->foreign('empresa_id')
            ->references('id')
            ->on('empresa')
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
        Schema::table('moneda', function (Blueprint $table) {
            $table->dropColumn('empresa_id');
        });
    }
}
