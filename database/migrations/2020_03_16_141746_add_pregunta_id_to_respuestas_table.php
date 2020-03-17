<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPreguntaIdToRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('respuestas', function (Blueprint $table) {
          $table->unsignedBigInteger('pregunta_id')->nullable();
          $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('respuestas', function (Blueprint $table) {
          $table->dropForeign('pregunta_id');
          $table->dropColumn('pregunta_id');
        });
    }
}
