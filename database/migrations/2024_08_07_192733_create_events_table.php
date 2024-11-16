<?php
// filename: 2024_08_07_190616_create_events_table.php

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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id'); // Primary key as increments
            $table->string('name');
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
            $table->unsignedInteger('school_id'); // Foreign key as unsignedInteger
            $table->unsignedInteger('creator_id')->nullable(); // Foreign key as unsignedInteger
            $table->unsignedInteger('updater_id')->nullable(); // Foreign key as unsignedInteger
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
};
