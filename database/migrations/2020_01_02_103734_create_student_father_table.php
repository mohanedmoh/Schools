<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFatherTable extends Migration
{
    /**
     * Run the migrations.
     *'student_id', 'name', 'birth_date', 'is_alive', 'education','job', 'phone','status_id'
     * @return void
     */
    public function up()
    {
        Schema::create('student_father', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->date('birth_date')->nullable(true);
            $table->tinyInteger('is_alive')->default(1);
            $table->string('education')->nullable(true);
            $table->string('job')->nullable(true);
            $table->integer('phone')->nullable(true);
            $table->tinyInteger('status_id')->default(1);
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
        Schema::dropIfExists('student_father');
    }
}
