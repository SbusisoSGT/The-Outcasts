@extends('layouts.main')

@section('page-name', $article->title)

@section('page-includes')
	<link rel="stylesheet" href={{asset("css/blog/show.css") }}>
@endsection

@section('fb-share-config')
	<!-- Facebook Open Graph Tags -->
	<meta property="og:locale" content="en_US" />
	<meta property="fb:app_id" content="" />
	<meta property="og:site_name" content="The Outcasts Blog" />
	<meta property="article:author" content="https://www.facebook.com/theoutcastsblog" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{url()->full()}}" />
	<meta property="og:title" content="{{$article->title}}" />
	<meta property="og:description" content="{{$article->description}}" />
	<meta property="og:image" content="{{asset('storage/covers/'.$article->cover_image)}}" />
	<meta property="article:published_time" content="{{$article->created_at}}" />
	<meta property="article:modified_time" content="{{$article->updated_at}}" />
@endsection

@section('twt-share-config')
	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@thebalance" />
	<meta name="twitter:title" content="{{$article->title}}" />
	<meta name="twitter:description" content="{{$article->description}}" />
	<meta name="twitter:image" content="{{asset('storage/covers/'.$article->cover_image)}}">
@endsection

@section('content')
	<div class="article-share-side">
		<a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank">
					<i data-href="{{url()->full()}}" id="facebook-share" class="fa fa-facebook article-share"></i>
		</a>
       	<a href="https://twitter.com/intent/tweet?url={{url()->full()}}">
       		<i id="twitter-share" class="fab fa-twitter article-share"></i>
       	</a>
       <a href="mailto:?subject={{$article->title}}&body=Hey there%2C I was reading this article and I thought you would appreciate it%0A%0A{{url()->full()}}">
        	<i class="fas fa-envelope article-share"></i>
		</a>
		<a>
			<i class="fas fa-print article-share" onclick="window.print()"></i>
		</a>
	</div>
	<div class="article-container">
		<div class="article-body">
			<span class="article-title">
				{{$article->title}}
			</span>
			<div class="article-attributes">
				<div class="article-aside-1">
					<img src={{asset("images/users/profile/".$article->user->profile_pic)}}>
					<div class="article-details">
						<span class="article-author">
							<a href="{{url('/authors/'.$article->user->name)}}">
								{{ $article->user->name }}
							</a>
						</span><br/>
						<span class="article-createdat">
							@if ($article->updated_at == $article->created_at)
								{{$article->created_at->format('d M Y, H\hi') }}
							@else
								Updated at {{$article->updated_at->format('d M Y, H\hi') }}
							@endif
						</span>
					</div>
				</div>
				<div class="article-tags">
					@if(!empty($article->tags()->get()))
						@foreach ($article->tags()->get() as $tag)
							<a href={{"/blog/tags/".$tag->link}}>
								<span class="article-tag">
									{{$tag->tag}}
								</span>
							</a>
						@endforeach
					@endif
				</div>
			</div>
			<div class="article-cover">
				<img src={{ asset('storage/covers/'.$article->cover_image)}}>
			</div>
			<div class="article-text">
				{!! $article->body !!}
			</div>
		</div>
		<div class="article-quote-container">
			<span class="article-quote">
				{{$article->quote}}
			</span>
		</div>
		<div class="article-share-mobile">
			<h2>Sharing is caring</h2>
			<div class="share-icons-container">
				<a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank">
					<i data-href="{{url()->full()}}" id="facebook-share" class="fa fa-facebook share-mobile"></i>
				</a>
				<a href="https://twitter.com/theoutcasts">
					<i class="fab fa-twitter share-mobile"></i>
				</a>
				<a href="mailto:?subject={{$article->title}}&body=Hey there%2C I was reading this article and I thought you would appreciate it%0A%0A{{url()->full()}}">
					<i class="fas fa-envelope share-mobile"></i>
				</a>
				<a>
					<i class="fas fa-print share-mobile" onclick="window.print()"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="comment-container">
	</div>
@endsection

@section('js-code')
    <script>
        let links = document.querySelector(".links");
		links.children[1].firstElementChild.id = "active-link";
		
		let dropdown_links = document.querySelector('.dropdown-links');
        dropdown_links.children[1].firstElementChild.id = "active-link-dropdown";
    </script>
@endsection