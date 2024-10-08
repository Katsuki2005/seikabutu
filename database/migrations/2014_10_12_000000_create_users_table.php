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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function posts()
    {
        return $this->belongsTo(posts::class);
    }
    
        /**
         * Reverse the migrations.
         */
     public function comments()
    {
        return $this->belongsTo(comments::class);
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};