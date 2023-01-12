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
        Schema::create('app_rfd_joints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->foreignId('refund_bo_id')->references('id')->on('')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('refund_bo_id')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('financial_year')->nullable();
            $table->string('id_uma3')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('new_ic_number')->nullable();
            $table->string('old_ic_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_rfd_joints');
    }
};
