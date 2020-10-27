<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TagController;
use App\Traits\ImageUploaderTrait;
use App\Traits\StoreTagsTrait;
use App\Http\Requests\StoreArticles;
use App\Article;


class ArticlesController extends Controller
{
    use ImageUploaderTrait;
    use StoreTagsTrait;
    // protected $tagController;

    // public function _constructor(TagController $tagController)
    // {
    //     $this->tagController = new $tagController;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('approved', 1)->get();

        
        return view('blog.index')->with('articles', $articles); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreArticles  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticles $request)
    {
        $validated = $request->validated();

        //Image upload & store
        $image_url = $this->storeImage($request, 'public/covers');

        $article = new Article;
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->body = $request->input('body');
        $article->cover_image = $image_url;
        $article->quote = $request->input('quote');
        $article->allow_comments = $request->input('allow_comments');
        $article->user_id = auth()->user()->id;
        $article->save();
        
        $this->storeTags($request->input('tags'), $article->id);

        return redirect()
                ->back()
                ->with('success', 'Article created. Awaiting to be approved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        $article = Article::where('link', $article)->first();

        if(empty($article))
            return view('blog.index');
        
        return view('blog.show')->with('article', $article); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->guest())
            abort(403);
        else
            return view('blog.edit')->with('article', $article); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
