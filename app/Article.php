<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'body', 'cover_image', 'allow_comments',
        'approved', 'user_id', 'quote', 'link',
    ];
    
    /** 
     * Get the user who posted this article
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /** 
     * Get the tags of this article
     * 
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'article_tags');
    }

    /**
     * Get the comments of this article
     * 
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
