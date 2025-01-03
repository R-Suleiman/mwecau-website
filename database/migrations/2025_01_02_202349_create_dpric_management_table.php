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
        Schema::create('dpric_management', function (Blueprint $table) {
            $table->id();
            $table->string('initial');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('last_name');
            $table->string('position');
            $table->string('photo');
            $table->integer('rank')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dpric_management');
    }
};
