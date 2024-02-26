<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title',
        'post_content',
        'post_slug',
        'category_id',
        'featured_image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
