<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_faq_details', function (Blueprint $table) {
            $table->integer('faq_detail_id');
            $table->integer('faq_header_id');
            $table->timestamps();
            $table->binary('active')->nullable();
            $table->text('answer_en')->nullable();
            $table->text('answer_my')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->integer('display_order')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('question_en')->nullable();
            $table->string('question_my')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_faq_details');
    }
};
