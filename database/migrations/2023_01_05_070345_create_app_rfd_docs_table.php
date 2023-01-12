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
        Schema::create('app_rfd_docs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('claim_doc_code')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('description')->nullable();
            $table->string('descriptionMy')->nullable();
            $table->string('doc_category')->nullable();
            $table->string('file_name')->nullable();
            $table->binary('mandatory')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('name_my')->nullable();
            $table->bigInteger('recordId')->nullable();
            $table->string('ref_no')->nullable();
            $table->bigInteger('refundId')->nullable();
            $table->binary('reupload')->nullable();
            $table->string('wtd_type_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_docs');
    }
};
