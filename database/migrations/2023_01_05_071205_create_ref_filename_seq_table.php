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
        Schema::create('ref_filename_seq', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->integer('cur_seq_no')->nullable();
            $table->string('form_name')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_filename_seq');
    }
};
