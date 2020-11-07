<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            /**************************************************
             * Campos de la tabla
             ***************************************************/
            $table->bigIncrements('id');
            $table->bigInteger('seccion_id')->unsigned()->nullable();
            $table->string('categoria',50);
            $table->text('descripcion');
            $table->boolean('estado');
            $table->timestamps();

            /*****************************************************************************
             * Declaración de las Claves segundarías que referencia a otra tabla
             ****************************************************************************/

            $table->foreign('seccion_id')->references('id')->on('secciones')
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
        Schema::dropIfExists('categorias');
    }
}
