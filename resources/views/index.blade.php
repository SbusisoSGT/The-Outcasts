@extends('layouts.main')

<!-- @section('page-name', config('app.name', 'The Outcasts')) -->

@section('page-includes')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('fb-share-config')
    <!-- Facebook Open Graph Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->full()}}" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="The Outcasts Blog" />
    <meta property="fb:app_id" content="" />
@endsection

@section('content')
    <div class="cover-container">
        <div class="cover">
            <div class="cover-text">
                <span class="text-1">Here's to the <span id="misfits">Misfits</span>!</span>
                    <span class="text-2">Welcome to where</span>
                    <span id="belong">You Belong</span>
            </div>
            <a href="/blog/articles">
                <div class="blog-link">
                Read articles <i class="far fa-arrow-alt-circle-right"></i>
                </div>
            </a>
        </div>
    </div>
@endsection