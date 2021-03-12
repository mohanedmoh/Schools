<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("address");
            $table->date("b_date");
            $table->string("phone");
            $table->string("discipline");
            $table->integer("gender");
            $table->integer("marital_status_id");
            $table->integer("qualification_id");
            $table->string("specialized_subjects");
            $table->integer("job_id");
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
        Schema::dropIfExists('employees');
    }
}
