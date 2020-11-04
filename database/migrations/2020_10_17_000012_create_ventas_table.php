<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {

            /**************************************************
             * Campos de la tabla
             ***************************************************/

            //clave primaria
            $table->bigIncrements('id');

            // Campos que referenciaran a las claves secundarias
            $table->bigInteger('venta_detalle_id')->unsigned()->nullable();
            $table->bigInteger('cliente_id')->unsigned()->nullable();

            //Campos de datos
            $table->dateTime('fecha_venta')->nullable();
            $table->decimal('iva', 5, 2);
            $table->decimal('subtotal', 5, 2);
            $table->decimal('total', 5, 2);
            $table->decimal('ganancia', 5, 2);

            //Campos de registro de tiempo dado por laravel.
            //Se crean los campos: created_at y updated_at
            $table->timestamps();


            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

            //referencia a la tabla de clientes
            $table->foreign('cliente_id')->references('id')->on('clientes')
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
        Schema::dropIfExists('ventas');
    }
}
