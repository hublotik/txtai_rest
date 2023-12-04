<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadphonesAsr extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('headphones_asr', function (Blueprint $table) {
                $table->integer('Price');
                $table->uuid('id', false)->primary(); 
                $table->string('Type');
                $table->string('Brand');
                $table->string('Model');
                $table->float('Sensitivity');
                $table->string('Review_Date');
                $table->string('Link');
                $table->float('Impedance');
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
            Schema::dropIfExists('headphones_asr');
        }
    }
    