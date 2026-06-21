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
            $table->string('slug');
            $table->string('title');
            $table->text('description')->nullable();
            $table->boolean('published');
            $table->boolean('featured');
            $table->foreignId('owner_id');
            $table->integer('price'); // last two digits decimals

            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
        });

        // Schema::create("service_images", function (Blueprint $table) {});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
