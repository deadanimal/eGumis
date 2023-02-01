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
        Schema::table('ref_bo_joints', function (Blueprint $table) {
            //
            $table->string('id_uma3')->nullable();
            $table->string('idd_file_name')->nullable();
            $table->string('name')->nullable();
            $table->string('new_ic_number')->nullable();
            $table->string('old_ic_number')->nullable();
            $table->string('bo_master_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ref_bo_joints', function (Blueprint $table) {
            //
        });
    }
};
