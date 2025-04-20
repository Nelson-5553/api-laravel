<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;

class Post extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'content',
        'user_id',
        'category_id',
    ];
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function getExcerptAttribute(){
        return substr($this->content, 0,120);
    }

    public function getPublishedAtAttribute(){
        Carbon::setLocale('es');
        return $this->created_at->translatedFormat('d \d\e F \d\e Y');

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
