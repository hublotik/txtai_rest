<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersAsr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers_asr', function (Blueprint $table) {
            $table->integer('Price');
            $table->uuid('id', false)->primary(); 
            $table->string('Type');
            $table->string('Brand');
            $table->string('Model');
            $table->float('Sensitivity');
            $table->float('Rate');
            $table->string('Recommendation');
            $table->string('Review_Date');
            $table->string('Link');
            $table->integer('Impedance');
            $table->longText('Review');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speakers_asr');
    }
}

