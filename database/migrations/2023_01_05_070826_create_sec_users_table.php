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
        Schema::create('sec_users', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->integer('userEntity_id')->nullable();
            $table->char('activation_email')->nullable();
            $table->string('active_code')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('city')->nullable();
            $table->string('claimant_type')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('cpassword')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('email')->nullable();
            $table->binary('enabled')->nullable();
            $table->string('fax_no')->nullable();
            $table->binary('first_login')->nullable();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('home_no')->nullable();
            $table->string('identity_number')->nullable();
            $table->string('identity_type')->nullable();
            $table->dateTime('last_logged_in_date')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('office_no')->nullable();
            $table->string('password')->nullable();
            $table->dateTime('password_modified_date')->nullable();
            $table->string('position')->nullable();
            $table->string('postcode')->nullable();
            $table->binary('profileUpdated')->nullable();
            $table->char('reset_password_email')->nullable();
            $table->string('state')->nullable();
            $table->string('username')->nullable();
            $table->integer('search_count')->nullable();
            $table->dateTime('search_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_users');
    }
};
