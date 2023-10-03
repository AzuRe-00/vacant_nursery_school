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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name_kana');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('hope');
            $table->dropColumn('other');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('name_kana')->default(false);
            $table->boolean('phone')->default(false);
            $table->boolean('address')->default(false);
            $table->boolean('hope')->default(false);
            $table->boolean('other')->default(false);
        });
    }
};
