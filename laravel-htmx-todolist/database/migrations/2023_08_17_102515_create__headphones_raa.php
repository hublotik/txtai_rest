<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadphonesRaa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headphones_raa', function (Blueprint $table) {
            $table->uuid('id', false)->primary(); 
            $table->string('Model');
            $table->float('Sensitivity');
            $table->float('Sensitivity2');
            $table->float('Impedance');
            $table->string('Acoustic_design');
            $table->string('Type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headphones_raa');
    }
}