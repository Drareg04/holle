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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('featured');
            $table->foreignId('owner_id')->nullable();
            $table->integer('price'); // last two digits decimals

            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
        });

        Schema::create('carousel', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->string('href');
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
