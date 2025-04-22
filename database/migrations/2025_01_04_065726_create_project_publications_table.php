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
        Schema::create('project_publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('about_publication')->nullable();
            $table->string('year')->nullable();
            $table->string('document1')->nullable();
            $table->string('document12')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_publications');
    }
};
