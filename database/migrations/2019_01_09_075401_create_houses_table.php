<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->integer('id')
            ->unsigned()->nullable()->default('NULL');
            $table->string('houseName','128');
            $table->string('locationName', '128');
            $table->integer('numberOfRooms');
            $table->integer('numberOfBeds');
            Schema::
            $table->string('houseType', '128');
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
        Schema::dropIfExists('houses');
    }
}
