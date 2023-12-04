<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmpMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amp_main', function (Blueprint $table) {
            $table->uuid('id', false)->primary(); 
            $table->string('Model');
            $table->float('THD');
            $table->integer('SINAD');
            $table->integer('Power');
            $table->integer('Price');
            $table->string('Source');
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
        Schema::dropIfExists('amp_main');
    }
}
