<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->increments('id');
           // $table->integer('anio');
           // $table->string('descripcion');
           $table->dateTime('fecha');
            $table->string('observaciones');
            $table->unsignedInteger('infante_id');
            $table->unsignedInteger('grupo_id');
            //$table->unsignedInteger('educadora_id');
            $table->timestamps();

            $table->foreign('infante_id')->references('id')->on('infantes')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
           // $table->foreign('educadora_id')->references('id')->on('educadoras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestiones');
    }
}
