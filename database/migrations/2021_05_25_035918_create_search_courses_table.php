<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('course_name');
            $table->string('course_fee');
            $table->string('course_teacher');
            $table->string('course_review');
            $table->string('course_details');
            $table->string('sign_up');
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
        Schema::dropIfExists('search_courses');
    }
}
