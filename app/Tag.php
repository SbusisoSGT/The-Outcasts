<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class Tag extends Model
{
    /**
	* @var string
    */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag', 'link' ];

    /**
     * Get the articles that have this tag
     *
     * @return App\Article $articles
     */
    public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_tags');
    }
}
