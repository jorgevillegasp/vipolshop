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

            /**************************************************
             * Campos de la tabla
             ***************************************************/

            $table->bigIncrements('id');
            $table->bigInteger('talla_id')->unsigned()->nullable();
            $table->bigInteger('color_id')->unsigned()->nullable();
            $table->string('nombre', 45);
            $table->decimal('precio_venta', 4, 2)->nullable();
            $table->binary('imagen')->nullable();
            $table->integer('stock');

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

            $table->foreign('talla_id')->references('id')->on('tallas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('color_id')->references('id')->on('colores')
            ->onDelete('set null')
            ->onUpdate('cascade');


            $table->timestamps();
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
