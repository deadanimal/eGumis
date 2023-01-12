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
        Schema::create('ref_bo_masters', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->string('additional_notes')->nullable();
            $table->integer('amount')->nullable();
            $table->string('bil')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('financial_year')->nullable();
            $table->string('id_uma3')->nullable();
            $table->string('id_uma4')->nullable();
            $table->string('idd_file_name')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('new_ic_number')->nullable();
            $table->string('old_ic_number')->nullable();
            $table->string('other_ref_no')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('ref_bo_masters');
    }
};
