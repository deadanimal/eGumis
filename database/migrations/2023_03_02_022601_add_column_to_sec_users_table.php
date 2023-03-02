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
        Schema::table('sec_users', function (Blueprint $table) {
            //
            $table->string('new_ic_number')->nullable();
            $table->string('old_ic_number')->nullable();
            $table->string('no_tentera')->nullable();
            $table->string('no_polis')->nullable();
            $table->string('no_passport')->nullable();
            $table->string('no_sijil_kelahiran')->nullable();
            $table->string('no_pendaftaran_syarikat_firma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sec_users', function (Blueprint $table) {
            //
        });
    }
};
