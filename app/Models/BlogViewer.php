<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogViewer extends Model
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

}
