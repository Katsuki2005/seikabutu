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
    Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // 外部キー制約
            $table->foreignId('post_id')->constrained()->onDelete('cascade');  // 外部キー制約
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
     public function posts()   
    {
        return $this->hasMany(posts::class);  
    }
    
    public function cateegories()   
    {
        return $this->hasMany(categories::class);  
    }
    
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
