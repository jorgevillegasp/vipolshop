<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {

            /**************************************************
             * Campos de la tabla
             ***************************************************/
            $table->bigIncrements('id');

            $table->bigInteger('proveedor_id')->unsigned()->nullable();

            $table->dateTime('fecha_compra');
            $table->decimal('costo_compra',4,2);
            $table->decimal('iva', 3, 2)->nullable();

            $table->timestamps();


            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

            $table->foreign('proveedor_id')->references('id')->on('proveedores')
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
        Schema::dropIfExists('compras');
    }
}
