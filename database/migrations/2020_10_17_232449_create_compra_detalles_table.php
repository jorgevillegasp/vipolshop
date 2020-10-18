<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_detalles', function (Blueprint $table) {

            /**************************************************
             * Campos de la tabla
             ***************************************************/
            $table->bigIncrements('id');

            $table->bigInteger('compra_id')->unsigned()->nullable();
            $table->bigInteger('producto_id')->unsigned()->nullable();

            $table->integer('cantidad');
            $table->decimal('valor_unidad', 5, 2);
            $table->decimal('total', 5, 2);

            $table->timestamps();

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

            $table->foreign('compra_id')->references('id')->on('compras')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('producto_id')->references('id')->on('productos')
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
        Schema::dropIfExists('compra_detalles');
    }
}
