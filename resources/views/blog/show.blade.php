@extends('layouts.main')

@section('page-name', $article->title." | ".config('app.name', 'The Outcasts'))

@section('page-includes')
	<link rel="stylesheet" href={{asset("css/blog/show.css") }}>
@endsection

@section('fb-share-config')
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content={{$article->title}} />
	<meta property="og:description"   content={{$article->description}} />
	<meta property="og:image"         content={{ asset('storage/covers/'.$article->cover_image)}} />
@endsection

@section('content')
	<div class="article-share-side">
		<a href="https://facebook.com/theoutcasts">
			<i id="facebook-share" class="fa fa-facebook article-share"></i>
		</a>
       	<a href="https://twitter.com/theoutcasts">
       		<i id="twitter-share" class="fab fa-twitter article-share"></i>
       	</a>
       	<a href="https://instagram.com/theoutcasts">
        	<i class="fas fa-envelope article-share"></i>
		</a>
		<a href="https://pinterst.com/theoutcasts">
			<i class="fas fa-print article-share"></i>
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
							<a href={{url("/authors/".$article->user->name)}}>
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
					@if(!empty($article->article_tags()))
						@foreach ($article->article_tags() as $tag)
							<a href={{"/blog/tags/".$tag->tag}}>
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
				<a href="https://facebook.com/theoutcasts">
					<i id="facebook-share" class="fa fa-facebook share-mobile"></i>
				</a>
				<a href="https://twitter.com/theoutcasts">
					<i class="fab fa-twitter share-mobile"></i>
				</a>
				<a href="https://pinterst.com/theoutcasts">
					<i class="fas fa-envelope share-mobile"></i>
				</a>
				<a href="https://pinterst.com/theoutcasts">
					<i class="fas fa-print share-mobile"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="comment-container">
	</div>
@endsection

@section('js-active')
	<script>
		let links = document.getElementByClassName('links');
		let link = links[2][0]; 
		link.document.addId = "active-link";
	</script>
@endsection

