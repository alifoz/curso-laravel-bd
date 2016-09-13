<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompletAddressToExamples extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->table('examples', function (Blueprint $table) {
            $table->string('street');
            $table->string('street2');
            $table->string('number',4);
            $table->string('city',100);
            $table->string('state',2);
            $table->string('postal',9);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->table('examples', function (Blueprint $table) {
            $table->dropColumn  ('street');
            $table->dropColumn('street2');
            $table->dropColumn('number');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('postal');
        });
    }
}
