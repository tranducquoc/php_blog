<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag',
    ];

    public function postTags()
    {
        return $this->hasMany(PostTag::class);
    }
}
