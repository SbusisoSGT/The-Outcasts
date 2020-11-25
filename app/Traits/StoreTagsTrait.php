<?php

namespace App\Traits;
 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Tag;

trait StoreTagsTrait{

    public function storeTags($tags, $article_id)
    {
        $tagsArr = explode(" ", str_replace(',', '', $tags));
        
        foreach($tagsArr as $tag)
        {
           $create_tag = new Tag;
           $create_tag->tag = Str::title($tag);
           $create_tag->link = Str::slug($tag);
           $create_tag->save();

           DB::table('article_tags')->insert([
                ['article_id' => $article_id, 'tag_id' => $create_tag->id],
            ]);
        }
    }
}