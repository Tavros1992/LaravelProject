<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geoname', function (Blueprint $table) {
            $table->increments('geonameid');
            $table->string('name');
            $table->string('asciiname');
            $table->string('alternatenames');

            $table->string('latitude');
            $table->string('longitude');

            $table->string('feature_class');
            $table->string('feature_code');
            $table->string('country_code');
            $table->string('cc2');

            $table->string('admin1_code');
            $table->string('admin2_code');
            $table->string('admin3_code');
            $table->string('admin4_code');

            $table->string('population');
            $table->string('elevation');
            $table->string('dem');
            $table->string('timezone');
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
        //
    }
}
