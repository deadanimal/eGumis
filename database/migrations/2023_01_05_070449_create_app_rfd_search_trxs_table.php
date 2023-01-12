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
        Schema::create('app_rfd_search_trxs', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('full_name')->nullable();
            $table->string('identity_number')->nullable();
            $table->dateTime('search_date')->nullable();
            $table->string('search_value')->nullable();
            $table->string('username')->nullable();
            $table->string('ip_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_search_trxs');
    }
};
