<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('answer_id')->nullable();
            $table->text('question');
            $table->integer('q_status')->default(1);
            $table->timestamps();
        });
        \DB::statement('ALTER TABLE questions ADD FULLTEXT (question)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
