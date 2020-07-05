<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'tag'
    ];

    public function author(){
        return $this->belongsTo(User::class);
    }
}
