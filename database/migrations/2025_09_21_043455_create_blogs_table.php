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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('category_id');
            $table->string('slug');
            $table->string('author');
            $table->string('publication_date');
            $table->string('featured_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('thumb_image')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->longText('content');
            $table->tinyInteger('is_featured');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
