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
        Schema::create('app_claim_documents', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('description')->nullable();
            $table->string('descriptionmy')->nullable();
            $table->string('doc_category')->nullable();
            $table->string('doc_code')->nullable();
            $table->binary('mandatory')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('name_my')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_claim_documents');
    }
};
