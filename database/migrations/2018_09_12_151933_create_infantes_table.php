<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('sexo');
            $table->date('fechanacimiento');
            $table->unsignedInteger('beneficiario_id');
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
            $table->timestamps();

            //llaves foraneas
            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infantes');
    }
}
