<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEspesToPrimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('primes', function (Blueprint $table) {
          $table->double('espece')->nullable();
          $table->double('check')->nullable();

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
           $table->dropColumn('espece');
         });
    }
}
