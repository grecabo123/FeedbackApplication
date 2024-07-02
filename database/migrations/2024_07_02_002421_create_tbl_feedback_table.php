<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_fk');
            $table->foreign('user_fk')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('link');
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
        Schema::dropIfExists('tbl_feedback');
    }
}
