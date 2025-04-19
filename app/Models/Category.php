<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'state',
        'post_id'
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
