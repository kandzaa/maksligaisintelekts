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
        Schema::create('developments', function (Blueprint $table) {
            $table->id();
            $table->string('title_lv');
            $table->string('title_en');
            $table->text('content_lv');
            $table->text('content_en');
            $table->text('description_lv')->nullable();
            $table->text('description_en')->nullable();
            $table->string('icon_class')->nullable();
            $table->integer('order')->default(0);
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developments');
    }
};
