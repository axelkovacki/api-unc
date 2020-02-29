<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('review_id');
            $table->foreign('review_id')->references('id')->on('reviews');
            $table->unsignedBigInteger('review_question_id');
            $table->foreign('review_question_id')->references('id')->on('review_questions');
            $table->unsignedBigInteger('review_question_option_id');
            $table->foreign('review_question_option_id')->references('id')->on('review_question_options');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_answers');
    }
}
