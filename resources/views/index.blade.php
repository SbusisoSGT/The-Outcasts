@extends('layouts.main')

@section('page-name', "Home of the Misfits!")

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

@section('twt-share-config')
<!-- Twitter Card -->
    <meta name="twitter:domain" content="theoutcasts.co.za">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{url()->full()}}">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="theme-color" content="#9B29A5">
@endsection

@section('content')
    <div class="cover-overlay"></div>
    <div class="cover-container">
        <div class="cover">
            <div class="cover-text">
                {{-- <span class="text-1">Here's to the <span id="misfits">Misfits</span>!</span>
                <span class="text-2">Welcome to where</span>
                <span id="belong">You Belong</span> --}}
                <span class="cover-text-heading">Here's to the <i><u>Misfits!</u></i><br/>Welcome to where you belong</span>
                <span class="cover-text-subtext">Adipisicing elit perferendis, animi asperiores perspiciatis eveniet quae ipsa quasi magnam voluptas ex similique. </span>
            </div>
        </div>
        <a href="/blog/articles">
            <div class="blog-link">
                Read articles <i class="far fa-arrow-alt-circle-right"></i>
            </div>
        </a>
    </div>
@endsection

@section('js-code')
    <script>
        let links = document.querySelector(".links");
        links.children[0].firstElementChild.id = "active-link";

        let dropdown_links = document.querySelector('.dropdown-links');
        dropdown_links.children[0].firstElementChild.id = "active-link-dropdown";
    </script>
@endsection