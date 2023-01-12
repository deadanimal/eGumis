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
        Schema::create('audit_log_mas', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('menu_name_en')->nullable();
            $table->string('menu_name_ms')->nullable();
            $table->string('menu_url')->nullable();
            $table->string('method_name')->nullable();
            $table->string('description')->nullable();
            $table->string('descriptionmy')->nullable();
            $table->string('modified_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->dateTime('date_logged_in')->nullable();
            $table->dateTime('date_logged_out')->nullable();
            $table->string('http_method')->nullable();
            $table->string('ip_address')->nullable();
            $table->dateTime('requested_time')->nullable();
            $table->string('requested_url')->nullable();
            $table->string('session_id')->nullable();
            $table->string('action')->nullable();
            $table->string('action_by')->nullable();
            $table->text('detail')->nullable();
            $table->integer('entity_id')->nullable();
            $table->string('entity_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_log_mas');
    }
};
