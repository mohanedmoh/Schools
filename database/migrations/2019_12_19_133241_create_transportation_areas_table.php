<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportation_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //        'area_name','transportation_line_id','status_id'
            $table->string("area_name");
            $table->integer("transportation_line_id");
            $table->integer("status_id")->default('1');
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
        Schema::dropIfExists('transportation_areas');
    }
}
