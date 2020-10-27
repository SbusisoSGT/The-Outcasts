<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
    * Return articles of the specified tag
    *
    * @param string $tag
    * @return Illuminate\Http\Response
    */
    public function show($tag)
    {
       $tag = Tag::where('link', $tag)->first();
       $articles = $tag->tag_articles();

       return view('blog.tags')
              ->with(['articles' => $articles, 'tag' => $tag]);
    }

    public function storeTags($tags, $article_id)
    {
        $tagsArr = explode(" ", str_replace(',', '', $tags));
        
        foreach($tagsArr as $tag)
        {
           $create_tag = new Tag;
           $create_tag->tag = $tag;
           $create_tag->save();

           DB::table('users')->insertOrIgnore([
                ['article_id' => $article_id, 'tag_id' => $create_tag->id],
            ]);

        }
    }
}
