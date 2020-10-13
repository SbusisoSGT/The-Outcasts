<?php

namespace App\Traits;
 
use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Facades\DB;

trait StoreTagsTrait{

    public function storeTags($tags, $article_id)
    {
        $tagsArr = explode(" ", str_replace(',', '', $tags));
        
        foreach($tagsArr as $tag)
        {
           $create_tag = new Tag;
           $create_tag->tag = $tag;
           $create_tag->save();

           DB::table('article_tags')->insert([
                ['article_id' => $article_id, 'tag_id' => $create_tag->id],
            ]);

        }
    }
}