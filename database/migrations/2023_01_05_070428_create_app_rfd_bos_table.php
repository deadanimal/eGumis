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
        Schema::create('app_rfd_bos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('refund_info_id')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('boMasterID')->nullable();
            $table->integer('claimAmount')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('description')->nullable();
            $table->string('entity_code')->nullable();
            $table->string('entity_name')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_refno')->nullable();
            $table->string('financial_year')->nullable();
            $table->string('id_uma3')->nullable();
            $table->string('id_uma4')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('new_ic_number')->nullable();
            $table->string('old_ic_number')->nullable();
            $table->string('other_ref_no')->nullable();
            $table->binary('selected')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('status_date')->nullable();
            $table->integer('unclaimed_amount')->nullable();
            $table->string('wtd_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_bos');
    }
};
