<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('position')->unsigned();
            createDefaultRelationshipTableFields($table, 'city', 'property');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_property');
    }
}
