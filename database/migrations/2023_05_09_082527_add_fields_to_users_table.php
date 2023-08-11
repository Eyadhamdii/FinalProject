<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('UniId');
            $table->string('NationalId');
            $table->string('Mobile');
            $table->string('gender')->nullable();
            $table->string('role')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('UniId');
            $table->dropColumn('NationalId');
            $table->dropColumn('Mobile');
            $table->dropColumn('role');
            $table->dropColumn('gender');


        });
    }
};
