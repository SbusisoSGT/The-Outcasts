<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
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
