<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("phone");
            $table->string("car_no");
            $table->string("driver_license");
            $table->string("car_license");
            $table->string("insurance_details");
            $table->integer("payment_type_id");
            $table->double("payment_amount");
            $table->integer("area_id");
            $table->integer("status_id")->default('1');
            $table->string("comments");
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
        Schema::dropIfExists('drivers');
    }
}
