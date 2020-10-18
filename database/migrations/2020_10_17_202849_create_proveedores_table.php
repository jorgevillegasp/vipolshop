<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            /**************************************************
             * Campos de la tabla
             ***************************************************/
            $table->bigIncrements('id');

            $table->string('nombre', 45)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->string('correo', 45)->nullable();
            $table->integer('telefono')->nullable();
            $table->decimal('deuda', 4, 2);

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
        Schema::dropIfExists('proveedores');
    }
}
