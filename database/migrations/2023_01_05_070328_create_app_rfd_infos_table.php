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
        Schema::create('app_rfd_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('city')->nullable();
            $table->dateTime('claim_date')->nullable();
            $table->string('id_no')->nullable();
            $table->string('claimantIdType')->nullable();
            $table->string('claimantName')->nullable();
            $table->string('country')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('email')->nullable();
            $table->char('email_status')->nullable();
            $table->binary('express')->nullable();
            $table->string('fax_no')->nullable();
            $table->binary('idd_created')->nullable();
            $table->string('idd_file_name')->nullable();
            $table->binary('joint_account')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('postcode')->nullable();
            $table->string('record_count')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('state')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('status_date')->nullable();
            $table->integer('total_claim')->nullable();
            $table->string('validateStatus')->nullable();
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
        Schema::dropIfExists('app_rfd_infos');
    }
};
