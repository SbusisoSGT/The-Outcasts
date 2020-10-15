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
    protected $fillable = ['tag'];

    /**
     * Get the articles that have this tag
     *
     * @return App\Article $articles
     */
    public function tag_articles()
    {
        $articles = DB::table('articles')
                        ->join('article_tags', 'articles.id', '=', 'article_tags.article_id')
                        ->join('tags', 'tags.id', '=', 'article_tags.tag_id')
                        ->where('tags.id', '=', $this->id)
                        ->select('articles.*')
                        ->get();

        return $articles;
    }
}
