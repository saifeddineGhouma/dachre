<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnContratIdPrimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('primes', function (Blueprint $table) {
            $table->integer('contrat_id')->unsigned()->after('id');
            $table->foreign('contrat_id')->references('id')->on('contrats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('primes', function (Blueprint $table) {
             $table->dropForeign(['contrat_id']);
          $table->dropColumn('contrat_id');
        });
    }
}
