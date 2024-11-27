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
        Schema::create('display_banners', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_head')->nullable();
            $table->string('banner_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('display_banners');
    }
};
