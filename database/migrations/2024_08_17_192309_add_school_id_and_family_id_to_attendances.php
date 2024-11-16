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
        Schema::table('attendances', function (Blueprint $table) {
            $table->unsignedInteger('school_id')->nullable()->after('id');
            $table->unsignedInteger('family_id')->nullable()->after('school_id');

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropForeign(['family_id']);
            $table->dropColumn('school_id');
            $table->dropColumn('family_id');
        });
    }
};
