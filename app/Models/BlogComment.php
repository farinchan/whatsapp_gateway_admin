<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function parent()
    {
        return $this->belongsTo(BlogComment::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(BlogComment::class, 'parent_id');
    }
}
