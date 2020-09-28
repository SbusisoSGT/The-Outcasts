@extends('layouts.main')

@section('page-name', config('app.name', 'The Outcasts'))

@section('page-includes')
	<link rel="stylesheet" href={{asset("css/blog/show.css") }}>
@endsection

@section('fb-share-config')
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
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
	</div>
	<div class="article-container">
		<div class="article-body">
			<span class="article-title">
				Standard Beauty
			</span>
			<div class="article-attributes">
				<div class="article-aside-1">
					<img src={{asset("images/users/profile/blank-profile.png")}}>
					<div class="article-details">
						<span class="article-author">
							<a href={{url("/authors/")}}>Jane Doe</a>
						</span><br/>
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
					<a href="/blog/tags"><span class="article-tag">
						Confident
					</span></a>
				</div>
			</div>
			<div class="article-cover">
				<img src={{asset("images/blog/articles/covers/balloon_view.jpg")}}>
			</div>
			<div class="article-text">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br/>
				Quos, doloremque incidunt natus quis odit nisi. <br/>
				Hic aut nihil sapiente quod id repudiandae repellendus <br/>
				Dolorum fuga earum doloribus iure nobis. <br/>
				Adipisci ea delectus laboriosam quasi aspernatur, <br/>
				dolor cum sequi debitis maiores rem illo dicta dolores? <br/>
				Quaerat perspiciatis tempore suscipit distinctio sunt nemo, <br/>
				asperiores maxime iusto perspiciatis.<br/> 
				Repellendus molestiae sunt sapiente laborum! <br/><br/>

				Iusto ratione illo saepe soluta reiciendis sint quae<br/> 
				Exercitationem, dolor corrupti repellat commodi eveniet impedit, <br/>
				accusantium, quo aliquam ab corporis!<br/>
				Quae enim doloremque recusandae cumque at saepe delectus error. <br/>
				Tuis ipsum mollitia aliquid quisquam labore incidunt harum fugiat minus <br/>
				architecto cupiditate. <br/>
				Beatae quas quod repudiandae fugiat ullam iusto quo corrupti!<br/>
				Ducimus consectetur quia illo aliquam non voluptates delectus perspiciatis, <br/>
				ipsam eveniet corrupti vel corporis doloremque, fugiat sit suscipit ipsum odio<br/> 
				Vitae enim magni voluptas quibusdam eos dolor laboriosam. <br/>
				Deleniti, laudantium. <br/>
				Iste quidem eligendi illo accusantium incidunt, beatae, sint. <br/><br/>
				
				Dolorem quam quisquam mollitia non rerum. <br/>
				Dignissimos, commodi consectetur fugit aliquid et numquam! <br/>
				Unde libero ea voluptatum natus cupiditate odit sapiente hic quasi?<br/>
				Placeat ab culpa repudiandae ducimus consequatur dicta? <br/>
				Aperiam, error et! Asperiores quo laudantium reiciendis praesentium maxime ab, <br/>
				placeat corporis ad laboriosam, facere quidem atque! <br/>
				Reiciendis perspiciatis, porro saepe provident. <br/>
				Rem sit culpa ipsum est, tempore nemo ea. <br/>
				Est voluptatibus accusantium error adipisci, enim expedita sapiente. <br/>
				<a href="">Nesciunt</a> alias obcaecati nostrum mollitia harum, <br/>
				porro eligendi vitae incidunt numquam aliquid reiciendis. <br/>
				maxime necessitatibus veritatis corrupti id modi deserunt ut tempora <br/>
				Quaerat, amet dolorum? Repellendus vero nesciunt nemo, <br/>
				accusamus, ab quo labore placeat aut impedit sit. <br/>
				Provident eum ipsa delectus quod dignissimos vel repellat. <br/>
				Saepe, similique omnis fugiat ratione non assumenda!<br/>
			</div>
		</div>
		<div class="article-quote-container">
			<span class="article-quote">
				Nesciunt alias obcaecati nostrum mollitia harum maxime necessitatibus veritatis corrupti id
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

