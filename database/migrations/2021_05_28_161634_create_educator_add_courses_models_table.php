<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducatorAddCoursesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educator_add_courses_models', function (Blueprint $table) {
            $table->id();


            $table->string('thumnail_img')->nullable();
            $table->string('title');
            $table->string('fullcoursename');
            $table->string('rating');
            $table->string('price');
            $table->string('lessons');
            $table->string('seats');
            $table->string('overview');
            $table->string('features');
            $table->string('learn');
            $table->string('content');
            $table->string('faq');
            $table->string('faq1');
            $table->string('faq2');
            $table->string('faq3');
            $table->string('email');

           
            

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
        Schema::dropIfExists('educator_add_courses_models');
    }
}
