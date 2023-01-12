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
        Schema::create('sec_audit_trxs', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamps();
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
        Schema::dropIfExists('sec_audit_trxs');
    }
};
