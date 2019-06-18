<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('form_questions')) {
            Schema::create('form_files', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('src');
                $table->unsignedBigInteger('form_question_id');
                $table->foreign('form_question_id')
                    ->references('id')
                    ->on('form_questions');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_files');
    }
}
