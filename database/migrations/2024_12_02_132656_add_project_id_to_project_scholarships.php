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
        Schema::table('project_scholarships', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->after('id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_scholarships', function (Blueprint $table) {
            $table->dropColumn('project_id');
            $table->dropForeign('project_id');
        });
    }
};
