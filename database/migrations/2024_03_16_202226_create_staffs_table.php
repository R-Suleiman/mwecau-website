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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->enum('title', ['Mr', 'Ms', 'Dr', 'Prof'])->default('Mr');
            $table->string('staffID');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('aboutStaff');
            $table->text('academicQualification');
            $table->string('department');
            $table->string('email');
            $table->string('phone');
            $table->enum('gender', ['male', 'female'])->default('female');
            $table->string('nationality');
            $table->enum('language', ['swahili', 'english', 'swahili and english'])->default('English');
            $table->string('staffProfile_picture')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
