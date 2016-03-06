<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->increments('id');

            

            $table->string('name');
            $table->string('adress');
            $table->string('plz');
            $table->string('city');

            $table->string('tel');
            $table->string('fax');
            $table->string('mobil');

            $table->string('email');
            $table->string('info_email');

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
        Schema::drop('business');
    }
}
