@extends('layouts.main')

@section('page-name', "Blog | ".config('app.name', 'The Outcasts'))

@section('page-includes')
	<link rel="stylesheet" href={{asset("css/blog/index.css") }}>
	<link rel="stylesheet" href={{asset("css/inc/_subscribe.css") }}>
@endsection

@section('fb-share-config')
	<meta property="og:url" content="https://www.your-domain.com/your-page.html" />
	<meta property="og:type" content="www.theoutcasts.co.za" />
	<meta property="og:title" content="Your Website Title" />
	<meta property="og:description" content="Your description" />
	<meta property="og:image" content="https://www.your-domain.com/path/image.jpg" />
@endsection

@section('twitter-share-config')

@endsection

@section('content')
	<div class="content-container">
		<div class="latest-article-container">
			<div class="latest-article-title">
				{{$articles->first()->title}} 
			</div>
			<div class="latest-article-cover">
				<img src={{asset('storage/covers/'.$articles->first()->cover_image)}}>
			</div>
			<div class="latest-article-attributes">
				<div class="article-aside-1">
					<div class="latest-article-details">
						<span class="latest-article-description">
							{{$articles->first()->description}}
						</span>
						<div class="article-author-details">
							<img src={{asset("images/users/profile/".$articles->first()->user->profile_pic)}}>
							<div class="article-details">
								<span class="article-author">
									<a href={{url("/authors/".$articles->first()->user->name)}}>
										{{ $articles->first()->user->name }}
									</a>
								</span>
								<span class="article-createdat">
									@if ($articles->first()->updated_at == $articles->first()->created_at)
										{{$articles->first()->created_at->format('d M Y, H\hi') }}
									@else
										Updated at {{$articles->first()->updated_at->format('d M Y, H\hi') }}
									@endif
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="article-tags">
					@if(!empty($articles->first()->article_tags()))
						@foreach ($articles->first()->article_tags() as $tag)
							<a href={{"/blog/tags/".$tag->tag}}>
								<span class="article-tag">
									{{$tag->tag}}
								</span>
							</a>
						@endforeach
					@endif
				</div>
			</div>
		</div>
		
		<div class="articles-container">
			@for($x = 1; $x < count($articles); $x++)
				<div class="article-container">
					<div class="article-cover">
						<img src={{asset('storage/covers/'.$articles[$x]->cover_image)}}>
					</div>
					<div class="article-attributes">
						<div class="article-title">
							{{$articles[$x]->title}}
						</div>
						<div class="article-description">
							{{$articles[$x]->description}}
						</div>
						<div class="article-author-details">
							<img src={{asset("images/users/profile/".$articles[$x]->user->profile_pic)}}>
							<div class="article-details">
								<span class="article-author">
									<a href={{url("/authors/".$articles[$x]->user->name)}}>
										{{$articles[$x]->user->name }}
									</a>
								</span>
								<span class="article-createdat">
									@if ($articles[$x]->updated_at == $articles[$x]->created_at)
										{{$articles[$x]->created_at->format('d M Y, H\hi') }}
									@else
										Updated at {{$articles[$x]->updated_at->format('d M Y, H\hi') }}
									@endif
								</span>
							</div>
						</div>
						<div class="article-tags">
							@if(!empty($articles[$x]->article_tags()))
								@foreach ($articles[$x]->article_tags() as $tag)
									<a href={{"/blog/tags/".$tag->tag}}>
										<span class="article-tag">
											{{$tag->tag}}
										</span>
									</a>
								@endforeach
							@endif
						</div>
					</div>
				</div>
			@endfor
		</div> 
		@include('inc._subscribe')
	</div>
@endsection