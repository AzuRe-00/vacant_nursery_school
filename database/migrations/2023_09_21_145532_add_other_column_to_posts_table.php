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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('vacant');
            $table->string('borrow');
            $table->string('fee');
            $table->string('parking');
            $table->string('schedule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('vacant');
            $table->dropColumn('borrow');
            $table->dropColumn('fee');
            $table->dropColumn('parking');
            $table->dropColumn('schedule');
        });
    }
};
