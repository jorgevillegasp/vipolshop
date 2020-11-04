<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoDetalleTallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_detalle_tallas', function (Blueprint $table) {
            /**************************************************
             * Campos de la tabla
             ***************************************************/
            $table->bigIncrements('id');
            $table->bigInteger('talla_id')->unsigned()->nullable();
            $table->bigInteger('producto_detalle_id')->unsigned()->nullable();

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/
            $table->foreign('talla_id')->references('id')->on('tallas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('producto_detalle_id')->references('id')->on('producto_detalle')
                ->onDelete('set null')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_detalle_tallas');
    }
}
