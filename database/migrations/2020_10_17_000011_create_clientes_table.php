<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('sexo_id')->unsigned()->nullable();

            $table->string('cedula',25);
            $table->string('nombre_primero', 25)->nullable();
            $table->string('nombre_segundo', 25)->nullable();
            $table->string('apellido_paterno', 25)->nullable();
            $table->string('apellido_materno', 25)->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('telefono',25)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->decimal('deuda', 5,2);

            $table->timestamps();

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

            //referencia a la tabla de sexos
            $table->foreign('sexo_id')->references('id')->on('sexos')
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
        Schema::dropIfExists('clientes');
    }
}
