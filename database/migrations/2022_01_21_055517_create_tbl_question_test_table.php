<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblQuestionTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_question_test', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->nullable()->constrained('tbl_questions')->cascadeOnDelete();
            $table->foreignId('test_id')->nullable()->constrained('tbl_tests')->cascadeOnDelete();
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
        Schema::dropIfExists('question_test');
    }
}
