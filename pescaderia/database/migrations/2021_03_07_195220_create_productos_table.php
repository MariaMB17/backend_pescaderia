<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("descripcion",150)->unique()->comment('NOMBRE DEL PRODUCTO');
            $table->decimal('costo_compra_divisa', 9, 2);
            $table->decimal('costo_compra_bs', 20, 2);
            $table->decimal('costo_venta_divisa', 9, 2);
            $table->decimal('costo_venta_bs', 20, 2);
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
        Schema::dropIfExists('productos');
    }
}
