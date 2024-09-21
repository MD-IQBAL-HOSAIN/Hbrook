<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('c_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->text('sub_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('link_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('spotify_url')->nullable();
            $table->string('apple_url')->nullable();
            $table->timestamps();
        });

        DB::table('c_m_s')->insert([
            // Landing Page ................................................................
            // banner
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
            // Header
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
            // album Header
            ['title' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_m_s');
    }
};
