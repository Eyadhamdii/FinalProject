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
        Schema::create('recognized_names', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('time'); // Add the 'time' column
            $table->string('day'); // Add the 'day' column            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recognized_names');
    }
};
