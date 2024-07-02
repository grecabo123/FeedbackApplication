<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFeedbackAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feedback_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feedback_details_fk');
            $table->foreign('feedback_details_fk')->references('id')->on('tbl_feedback_details')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_feedback_answer');
    }
}
