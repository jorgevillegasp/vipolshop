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

            $table->bigInteger('categoria_id')->unsigned()->nullable();

            $table->string('nombre', 45);
            $table->boolean('estado');
            $table->timestamps();

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

             $table->foreign('categoria_id')->references('id')->on('categorias')
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
        Schema::dropIfExists('productos');
    }
}
