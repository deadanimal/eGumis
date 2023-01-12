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
        Schema::create('sec_audit_logs', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('date_logged_in')->nullable();
            $table->dateTime('date_logged_out')->nullable();
            $table->string('full_name')->nullable();
            $table->string('http_method')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->dateTime('requested_time')->nullable();
            $table->string('requested_url')->nullable();
            $table->string('session_id')->nullable();
            $table->string('username')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_audit_logs');
    }
};
