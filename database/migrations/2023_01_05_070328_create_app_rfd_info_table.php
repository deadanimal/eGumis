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
        Schema::create('app_rfd_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id')->nullable();
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






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_info');
    }
};
