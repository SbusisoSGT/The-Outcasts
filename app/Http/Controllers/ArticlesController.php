<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ImageUploaderTrait;
use App\Http\Requests\StoreArticles;


class ArticlesController extends Controller
{
    use ImageUploaderTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::where('approved', 'true')->get();

        return view('blog.index');
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

        $image_url = storeImage($request, 'public\images\blog\articles\covers', $article_url);

        $article = new Article;
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->link = $article_url;
        $article->cover_image = $image_url;
        $article->quote = $request->input('quote');
        $article->allow_comments = $request->input('allow_comments');
        $article->user_id = auth()->user()->id;
        $article->save();
            
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
    public function show($id)
    {
        $article = Article::find($id);

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
