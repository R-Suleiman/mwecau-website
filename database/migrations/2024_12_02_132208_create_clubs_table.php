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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique('name');
            $table->text('description');
            $table->string('department');
            $table->text('welcome_message');
            $table->text('mission');
            $table->text('vision');
            $table->string('found_date');
            $table->string('total_members');
            $table->string('total_projects');
            $table->string('primary_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};