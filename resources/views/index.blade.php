@extends('layouts.main')

@section('page-name', config('app.name', 'The Outcasts'))

@section('page-includes')
    <link rel="stylesheet" href={{asset("css/index.css") }}>
@endsection

@section('content')
    <div class="cover-container">
        <div class="cover">
            <span class="cover-text">
                <span class="text-1">Here's to the <span id="misfits">Misfits</span>!</span>
                    <span class="text-2">Welcome to where</span>
                    <span id="belong">You Belong</span>
            </span>
            <span class="blog-link">

            </span>
        </div>
    </div>
@endsection