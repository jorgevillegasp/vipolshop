<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoColorTallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_color_tallas', function (Blueprint $table) {
            /**************************************************
             * Campos de la tabla
             ***************************************************/
            $table->bigIncrements('id');
            $table->bigInteger('talla_id')->unsigned()->nullable();
            $table->bigInteger('producto_color_id')->unsigned()->nullable();

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/
            $table->foreign('talla_id')->references('id')->on('tallas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('producto_color_id')->references('id')->on('producto_colores')
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
