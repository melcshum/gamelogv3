<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScenarioPrefabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('prefab_scenario', function (Blueprint $table) {
            $table->bigInteger('scenario_id')->unsigned()->index();
            $table->foreign('scenario_id')->references('id')->on('scenarios')->onDelete('cascade');

            $table->bigInteger('prefab_id')->unsigned()->index();
            $table->foreign('prefab_id')->references('id')->on('prefabs')->onDelete('cascade');

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
        Schema::drop('prefab_scenario');
    }
}
