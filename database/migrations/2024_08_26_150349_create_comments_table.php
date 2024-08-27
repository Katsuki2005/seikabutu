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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');  // 外部キー制約
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // 外部キー制約
            $table->softDeletes();  // deleted_atカラムをtimestamp型で追加
        });
    }

    /**
     * Reverse the migrations.
     */
     public function posts()   
    {
        return $this->hasMany(posts::class);  
    }
    public function users()   
    {
        return $this->hasMany(users::class);  
    }
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
