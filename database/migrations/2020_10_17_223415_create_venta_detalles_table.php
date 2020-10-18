<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalles', function (Blueprint $table) {

            /**************************************************
             * Campos de la tabla
             ***************************************************/

            //clave primaria
            $table->bigIncrements('id');

            // Campos que referencian a las claves secundarias
            $table->bigInteger('producto_id')->unsigned()->nullable();
            $table->bigInteger('venta_id')->unsigned()->nullable();

            //Campos de datos
            $table->decimal('costo_unidad', 3, 2);
            $table->decimal('descuento_unidad', 3, 2)->nullable();
            $table->decimal('total', 3, 2);

            //Campos de registro de tiempo dado por laravel.
            //Se crean los campos: created_at y updated_at
            $table->timestamps();


            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/
            //referencia a la tabla productos
            $table->foreign('producto_id')->references('id')->on('productos')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('venta_id')->references('id')->on('ventas')
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
        Schema::dropIfExists('venta_detalles');
    }
}
