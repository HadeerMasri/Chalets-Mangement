<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('area',['500-1000','1000-2000','2000 more']);
            $table->enum('individuals_num',['1-5','5-10','10-20','20 more']);
            $table->boolean('Bedroom')->default(0);
            $table->boolean('Garden')->default(0 );
            $table->boolean('Parking')->default(0 );
            $table->boolean('Large_Swimming_pool')->default(0 );
            $table->boolean('Child_Swimming_pool')->default(0 );
            $table->boolean('Bathroom')->default(0 );;
            $table->boolean('SalonForEvents')->default(0 );
            $table->boolean('Tennis_Table')->default(0 );
            $table->boolean('Pool_Table')->default(0 );
            $table->boolean('Play_Station')->default(0 );
            $table->boolean('Volleyball')->default(0 );
            $table->boolean('football')->default(0 );
            $table->boolean('basketball')->default(0 );
            $table->boolean('Soggy_Barrel')->default(0 );
            $table->boolean('Barbecue')->default(0 );
            $table->boolean('Electric_Oven')->default(0 );
            $table->boolean('Gaz')->default(0 );
            $table->boolean('Fridge')->default(0 );;
            $table->boolean('Television')->default(0 );
            $table->boolean('WIFI')->default(0 );
            $table->boolean('Electronic_Generator')->default(0 );
            $table->boolean('Solar_Energy')->default(0 );
            $table->boolean('UPS')->default(0 );
            $table->string('other')->nullable();
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
        Schema::dropIfExists('details');
    }
}
