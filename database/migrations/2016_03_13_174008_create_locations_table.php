<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id')->foreign('business_id')->references('id')->on('business');

            $table->string('title');
            $table->text('description');

            $table->string('adress');
            $table->string('plz');
            $table->string('city');

            $table->string('tel');
            $table->string('fax');
            $table->string('email');

            $table->text('times');
            $table->text('map');

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
        Schema::drop('locations');
    }
}
