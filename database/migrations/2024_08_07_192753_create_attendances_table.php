<?php
// filename: 2024_08_07_190617_create_attendances_table.php

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
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id'); // Primary key as increments
            $table->unsignedInteger('event_id'); // Foreign key as unsignedInteger
            $table->unsignedInteger('child_id'); // Foreign key as unsignedInteger
            $table->unsignedInteger('creator_id')->nullable(); // Foreign key as unsignedInteger
            $table->unsignedInteger('updater_id')->nullable(); // Foreign key as unsignedInteger
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');
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
        Schema::dropIfExists('attendances');
    }
};
