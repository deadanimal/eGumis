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
        Schema::create('app_rfd_statuss', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->string('ip_address')->nullable();
            $table->integer('rfd_id');
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('description')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_ref_no')->nullable();
            $table->string('idd_file_name')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('status_date')->nullable();
            $table->string('status_description')->nullable();
            $table->string('verify_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_statuss');
    }
};
