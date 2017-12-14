<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'url',
        'title',
        'description',
        'content',
        'blog',
        'user_id',
        'category_id',
        'image',
    ];

    public function users()
    {
        return $this->belongTo(User::class);
    }

    public function postTags()
    {
        return $this->hasMany(PostTag::class);
    }

    public function category()
    {
        return $this->belongTo(Category::class);
    }
}
