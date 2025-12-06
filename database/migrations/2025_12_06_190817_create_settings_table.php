<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('title')->nullable();
            $table->text('about_text')->nullable();
            $table->string('photo')->nullable();  // avatar image filename
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
