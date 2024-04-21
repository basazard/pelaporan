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
        Schema::create('subscreens', function (Blueprint $table) {
            $table->string('subscreen_id')->primary();
            $table->string('screen_id');
            $table->string('description');
            $table->integer('order');

            $table->foreign('screen_id')->references('screen_id')->on('screens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscreens');
    }
};
