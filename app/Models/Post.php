<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
class Post extends Model
{
    //「1対多」の関係なので単数系に
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
        /**
         * Reverse the migrations.
         */
         // Categoryに対するリレーション

//「1対多」の関係なので単数系に
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // userに対するリレーション

//「1対多」の関係なので'users'と複数形に
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    use HasFactory;
}
