<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the primary_family column and set it as a foreign key
            $table->unsignedInteger('primary_family_id')->nullable()->after('id');

            // Define the foreign key constraint
            $table->foreign('primary_family_id')
                ->references('id')->on('families')
                ->onDelete('set null'); // Optional: Set null on delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the foreign key constraint and the column
            $table->dropForeign(['primary_family_id']);
            $table->dropColumn('primary_family_id');
        });
    }
};
