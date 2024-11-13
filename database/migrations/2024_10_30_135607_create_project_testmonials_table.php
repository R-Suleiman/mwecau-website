<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_testmonials', function (Blueprint $table) {
            $table->id();
            $table->string('atestant_initials');
            $table->string('atestant_name');
            $table->string('profile_picture');
            $table->string('institute')->nullable();
            $table->string('occupation')->nullable();
            $table->string('google_scholar')->nullable();
            $table->string('twitter_x')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_testmonial');
    }
};
