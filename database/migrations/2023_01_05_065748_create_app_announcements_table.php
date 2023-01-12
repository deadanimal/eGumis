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
        Schema::create('app_announcements', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->text('announcement_en')->nullable();
            $table->text('announcement_my')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('expiryDate')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->binary('newContent')->nullable();
            $table->integer('new_content_count')->nullable();
            $table->dateTime('publishDate')->nullable();
            $table->binary('status')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_my')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_announcements');
    }
};
