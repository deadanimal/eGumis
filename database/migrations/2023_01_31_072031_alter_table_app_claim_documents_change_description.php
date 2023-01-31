<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET SESSION sql_require_primary_key=0;');
        Schema::table('app_claim_documents', function (Blueprint $table) {
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
        Schema::table('app_claim_documents', function (Blueprint $table) {
            //
        });
    }
};
