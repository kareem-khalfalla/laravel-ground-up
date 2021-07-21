<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public function path()
    {
        return route('posts.show', [
            'post' => $this->id,
            'slug' => Str::slug($this->title),
        ]);
    }
}
