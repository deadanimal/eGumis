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
        Schema::table('app_rfd_docs', function (Blueprint $table) {
            //
            $table->string('description','4294967295')->change();
            $table->string('descriptionmy','4294967295')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_rfd_docs', function (Blueprint $table) {
            //
        });
    }
};
