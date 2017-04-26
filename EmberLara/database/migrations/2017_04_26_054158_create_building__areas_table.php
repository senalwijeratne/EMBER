<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_areas', function (Blueprint $table) {
            $table->increments('buildingAreaID')->unsigned();
            $table->integer('buildingID')->index();
            // $table->foreign('buildingID')->references('buildingid')->on('Building');
            $table->integer('areaID')->index();
            // $table->foreign('AreaID')->references('AreaID')->on('Area');
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
        Schema::dropIfExists('building__areas');
    }
}
