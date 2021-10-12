<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course_type',1);
            $table->foreignId('category_id')->constrained();
            $table->string('place');
            $table->integer('lectures_num');
            $table->string('lecture_interval');
            $table->date('start_date');
            $table->date('end_date');
            $table->float('price');
            $table->string('details');
            $table->foreignId('trainer_id')->constrained();
            $table->string('image');
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
        Schema::dropIfExists('courses');
    }
}
