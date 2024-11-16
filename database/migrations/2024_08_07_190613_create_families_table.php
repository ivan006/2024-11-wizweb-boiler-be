<?php
// filename: 2024_08_07_190613_create_families_table.php

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
        Schema::create('families', function (Blueprint $table) {
            $table->increments('id'); // Primary key as increments
            $table->string('name');
            $table->unsignedInteger('user_id'); // Foreign key as unsignedInteger
            $table->unsignedInteger('creator_id')->nullable(); // Foreign key as unsignedInteger
            $table->unsignedInteger('updater_id')->nullable(); // Foreign key as unsignedInteger
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updater_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('families');
    }
};
