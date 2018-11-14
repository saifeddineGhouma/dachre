<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classe');
            $table->string('nbr_de_sinistre');
            $table->string('immatriculation');
            $table->date('mise_en_circulation');
            $table->string('marque');
            $table->integer('nbre_de_place');
            $table->string('puissance');
            $table->string('genre');
            $table->string('garantie');
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
        Schema::dropIfExists('autos');
    }
}
