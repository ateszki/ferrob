<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer("categoria_id")->unsigned();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->text('descripcion_larga')->nullable();
            $table->longText('preparacion')->nullable();
            $table->longText('aplicacion')->nullable();
            $table->longText('caracteristicas')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::drop('productos');
    }
}
