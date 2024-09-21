<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biography_page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->text('sub_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('link_url')->nullable();
            $table->timestamps();
        });

        DB::table('biography_page_contents')->insert([
            // Biography Page ................................................................
            // header
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // biography
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Feature Album
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Live Interview
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Store
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Media
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Send Notes
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // interview
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Header for discography
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Header for media page
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Media gallary header for media page
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Header for shop
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // Header for discography Gallary
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biography_page_contents');
    }
};
