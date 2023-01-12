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
        Schema::create('app_email_templates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->nullable();
            $table->string('city')->nullable();
            $table->dateTime('claim_date')->nullable();
            $table->string('id_no')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_my')->nullable();
            $table->binary('status')->nullable();
            $table->text('template_content_en')->nullable();
            $table->text('template_content_my')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_email_templates');
    }
};
