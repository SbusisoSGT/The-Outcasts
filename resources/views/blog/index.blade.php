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
				Necessitatibus veritatis corrupti id modi 
			</div>
			<div class="latest-article-cover">
				<img src={{asset("images/blog/articles/covers/rainbow_16_4k_5k_hd_nature-1366x768.jpg")}}>
			</div>
			<div class="latest-article-attributes">
				<div class="article-aside-1">
					<div class="latest-article-details">
						<span class="latest-article-description">
							Dignissimos, commodi consectetur fugit aliquid et numquam. Unde libero ea voluptatum natus cupiditate odit sapiente hic quasi? Beatae quas quod repudiandae fugiat ullam iusto quo corrupti.
						</span>
						<div class="article-author-details">
							<img src={{asset("images/users/profile/sbusiso2.0.jpeg")}}>
							<div class="article-details">
								<span class="article-author">
									<a href={{url("/authors/")}}>James Gbenro</a>
								</span>
								<span class="article-createdat">
									10 July, 2020 11h55
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="article-tags">
					<a href="/blog/tags/"><span class="article-tag">
						Self-worth
					</span></a>
					<a href=""><span class="article-tag">
						Beauty
					</span></a>
					<a href="/blog/tags"><span class="article-tag">
						Confident
					</span></a>
				</div>
			</div>
		</div>
		
		<div class="articles-container">
			<div class="article-container">
				<div class="article-cover">
					<img src={{asset("images/blog/articles/covers/moon_tree-starry_sky.jpg")}}>
				</div>
				<div class="article-attributes">
					<div class="article-title">
						Est voluptatibus accusantium
					</div>
					<div class="article-description">
						Quaerat, amet dolorum? Repellendus vero  psa delectus quod dignissimosnesciunt nemo, accusamus, ab quo labore placeat aut impedit sit.
					</div>
					<div class="article-author-details">
						<img src={{asset("images/users/profile/sibongile.jfif")}}>
						<div class="article-details">
							<span class="article-author">
								<a href={{url("/authors/")}}>Jane Doe</a>
							</span>
							<span class="article-createdat">
								14 September, 2020 16h05
							</span>
						</div>
					</div>
					<div class="article-tags">
						<a href="/blog/tags/"><span class="article-tag">
							Self-worth
						</span></a>
						<a href=""><span class="article-tag">
							Beauty
						</span></a>
					</div>
				</div>
			</div>
			<div class="article-container">
				<div class="article-cover">
					<img src={{asset("images/blog/articles/covers/balloon_view.jpg")}}>
				</div>
				<div class="article-attributes">
					<div class="article-title">
						Placeat ab culpa repudiandae ducimus consequatur dicta?
					</div>
					<div class="article-description">
						Nesciunt alias obcaecati nostrum mollitia harum, porro eligendi vitae incidunt numquam aliquid reiciendis.
					</div>
					<div class="article-author-details">
						<img src={{asset("images/users/profile/sbusiso.jpeg")}}>
						<div class="article-details">
							<span class="article-author">
								<a href={{url("/authors/")}}>Jane Doe</a>
							</span>
							<span class="article-createdat">
								14 Sept, 2020 16h05 | 3min read
							</span>
						</div>
					</div>
					<div class="article-tags">
						<a href="/blog/tags/"><span class="article-tag">
							Self-worth
						</span></a>	
					</div>
				</div>
			</div>
			<div class="article-container">
				<div class="article-cover">
					<img src={{asset("images/blog/articles/covers/abstract_star_4k_hd-1366x768.jpg")}}>
				</div>
				<div class="article-attributes">
					<div class="article-title">
						Repellendus molestiae sunt sapiente laborum!
					</div>
					<div class="article-description">
						Life will always be fun I guess, I'm just writing gibberish only ... 
					</div>
					<div class="article-author-details">
						<img src={{asset("images/users/profile/blank-profile.png")}}>
						<div class="article-details">
							<span class="article-author">
								<a href={{url("/authors/")}}>John Doe</a>
							</span>
							<span class="article-createdat">
								07 January, 2020 17h05
							</span>
						</div>
					</div>
					<div class="article-tags">
						<a href="/blog/tags/"><span class="article-tag">
							Amazing
						</span></a>
						<a href=""><span class="article-tag">
							Self-esteem
						</span></a>
						<a href="/blog/tags"><span class="article-tag">
							Confident
						</span></a>
					</div>
				</div>
			</div>
		</div> 
		@include('inc._subscribe')
	</div>
@endsection