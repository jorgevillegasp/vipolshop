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

            $table->string('nombre_primero', 10)->nullable();
            $table->string('nombre_segundo', 10)->nullable();
            $table->string('apellido_paterno', 10)->nullable();
            $table->string('apellido_materno', 10)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->string('correo', 45)->nullable();
            $table->integer('telefono')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->decimal('deuda', 4, 2);

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
