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
        Schema::create('ref_usercode_headers', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->string('code')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_my')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_usercode_headers');
    }
};
