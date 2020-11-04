<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('producto_id')->unsigned()->nullable();
            $table->bigInteger('color_id')->unsigned()->nullable();

            $table->binary('imagen')->nullable();
            $table->decimal('precio_venta',5,2);
            $table->integer('stock');
            $table->timestamps();
            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/
            $table->foreign('producto_id')->references('id')->on('productos')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('color_id')->references('id')->on('colores')
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
        Schema::dropIfExists('producto_detalles');
    }
}
