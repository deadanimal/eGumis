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
        Schema::create('app_rfd_payees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('refund_info_id');
            $table->string('acc_no')->nullable();
            $table->string('address')->nullable();
            $table->string('bankCode')->nullable();
            $table->string('city')->nullable();
            $table->integer('claimAmount')->nullable();
            $table->string('country')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('email')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('id_no')->nullable();
            $table->string('idType')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('postcode')->nullable();
            $table->string('validateStatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_payees');
    }
};
