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
         Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('body', 100);
            $table->string('image', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    // Categoryに対するリレーション

//「1対多」の関係なので単数系に
    public function category_post()
    {
        return $this->belongsTo(category_post::class);
    }
    
        /**
         * Reverse the migrations.
         */
         // Categoryに対するリレーション

//「1対多」の関係なので単数系に
    public function comments()
    {
        return $this->belongsTo(comments::class);
    }
    // userに対するリレーション

//「1対多」の関係なので'users'と複数形に
    public function users()   
    {
        return $this->hasMany(users::class);  
    }
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
