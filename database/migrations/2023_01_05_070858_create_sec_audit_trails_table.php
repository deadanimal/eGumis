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
        Schema::create('sec_audit_trails', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
            $table->integer('audit_log_id')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('menu_name_en')->nullable();
            $table->string('menu_name_ms')->nullable();
            $table->string('menu_url')->nullable();
            $table->string('method_name')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('module_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_audit_trails');
    }
};
