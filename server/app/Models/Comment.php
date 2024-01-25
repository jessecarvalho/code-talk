<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'post_id',
        'comment',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
