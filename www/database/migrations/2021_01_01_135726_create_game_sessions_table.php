<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session')->unique;

            $table->unsignedBigInteger('xapi_profile_id');
            $table->foreign('xapi_profile_id')->references('id')->on('xapi_profiles')
            ->onDelete('cascade');


            $table->unsignedBigInteger('game_id')->nullable;
            $table->foreign('game_id')->references('id')->on('games')
                ->onDelete('cascade');

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
        Schema::dropIfExists('game_sessions');
    }
}
