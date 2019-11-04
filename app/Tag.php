<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

    public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_tags', 'tag_id', 'article_id');
    }
}
