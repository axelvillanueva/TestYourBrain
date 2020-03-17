<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaIdToPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('preguntas', function (Blueprint $table) {
          $table->unsignedBigInteger('categoria_id')->nullable();
          $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preguntas', function (Blueprint $table) {
            $table->dropForeign('categoria_id');
            $table->dropColumn('categoria_id');
        });
    }
}
