<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_enrolls', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('student_id')->unsigned();
			$table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('lesson_id')->unsigned();
			$table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
			$table->dateTime('enroll_date');
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
        Schema::dropIfExists('lesson_enrolls');
    }
}
