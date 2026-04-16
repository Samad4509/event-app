<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // BASIC FIELDS
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('location');
            $table->date('event_date');
            $table->integer('seats')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('event_type_id')->nullable()->constrained()->onDelete('cascade');

            // SEO FIELDS
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('og_image')->nullable();

            // EXTRA
            $table->integer('position')->default(0);
            $table->string('status')->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
