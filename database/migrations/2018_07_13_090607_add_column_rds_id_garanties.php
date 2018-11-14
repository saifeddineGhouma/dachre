<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRdsIdGaranties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('garanties', function (Blueprint $table) {
            $table->integer('rds_id')->unsigned()->after('id');
            $table->foreign('rds_id')->references('id')->on('rds');

                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('garanties', function (Blueprint $table) {
             $table->dropForeign(['rds_id']);
          $table->dropColumn('rds_id');
        });
    }
}
