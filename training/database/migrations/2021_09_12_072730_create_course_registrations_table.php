<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender',1);
            $table->string('email')->unique();
            $table->string('mobile',10);
            $table->string('address');
            $table->string('notes');
            $table->foreignId('course_id')->constrained();
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
        Schema::dropIfExists('course_registrations');
    }
}
