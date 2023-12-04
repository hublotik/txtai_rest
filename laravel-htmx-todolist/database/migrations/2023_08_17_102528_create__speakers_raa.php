<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersRaa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers_raa', function (Blueprint $table) {
            $table->uuid('id', false)->primary(); 
            $table->string('Model');
            $table->float('Voltage');
            $table->float('Current_strenght');
            $table->float('Impedance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speakers_raa');
    }
}
