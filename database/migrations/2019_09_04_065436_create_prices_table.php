<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('sat_morning');
            $table->double('sat_evening');
            $table->double('sun_morning');
            $table->double('sun_evening');
            $table->double('mon_morning');
            $table->double('mon_evening');
            $table->double('tue_morning');
            $table->double('tue_evening');
            $table->double('wed_morning');
            $table->double('wed_evening');
            $table->double('thu_morning');
            $table->double('thu_evening');
            $table->double('fri_morning');
            $table->double('fri_evening');
            $table->unsignedBigInteger('chalet_id');
            $table->foreign('chalet_id')->references('id')->on('chalets')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('prices');
    }
}
