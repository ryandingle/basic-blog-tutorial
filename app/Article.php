<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'category_id', 'tag_id', 'body'];

    public function tag()
    {
        return $this->hasOne('App\Tag', 'id', 'tag_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
