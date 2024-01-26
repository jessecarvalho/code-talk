<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'tags',
        'categories',
        'created_at',
        'banner',
        'resume',
        'content',
        'user_id',
    ];

    protected $casts = [
        'content' => 'array',
        'categories' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
