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
        Schema::create('ref_regions', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->string('country_code')->nullable();
            $table->string('name')->nullable();
            $table->string('region_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_regions');
    }
};
