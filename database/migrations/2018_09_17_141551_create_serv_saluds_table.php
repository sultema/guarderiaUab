<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_salud', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('tratamiento');
            $table->unsignedInteger('inscrito_id');
            $table->timestamps();

            $table->foreign('inscrito_id')->references('id')->on('inscritos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_salud');
    }
}
