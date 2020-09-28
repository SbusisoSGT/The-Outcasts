@extends('layouts.main')

@section('page-name', config('app.name', 'The Outcasts')." | Blog")

@section('page-includes')
	<link rel="stylesheet" href={{asset("css/blog/create.css") }}>
	<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	<script src={{asset("js/blog/create.js") }} type="text/javascript"></script>
@endsection

@section('content')
	<div class="create-container">
		<h2>Create an Article Post</h2> 
		<div class="create-form-container">
			<form method="POST" action="/blog/articles/store">
		        @csrf
		        <div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" name="title" class="form-control">
		        </div>
		        <div class="form-group">
		        	<label for="description">Description</label>
		        	<textarea name="description" class="form-control"></textarea>
		        </div>
		        <div class="form-group">
			        <label for="quote">Quote</label>
			        <textarea type="text" name="quote" class="form-control"></textarea>
		        </div>
		        <div class="form-group">
		        	<label for="tags">Tags</label>
			        <input type="text" name="tags" class="form-control" placeholder="e.g Beauty, Self-worth, Independence">
			        <span id="tag-info">Seperate tags by comma</span>
		        </div>
		        <div class="form-group">
		        	<label for="allow-comments">Allow Comments</label><br/>
		        	<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="allow-comments" value="true" disabled>
						<label class="form-check-label" for="allow-comments1">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="allow-comments" value="false" checked>
					  <label class="form-check-label" for="allow-comments2">No</label>
					</div>
				</div>
		        <div class="form-group">
				    <label for="cover-image">Cover Image</label>
				    <input type="file" class="form-control-file">
				</div>
				<div class="form-group">
		        	<label for="body">Body</label>
		            <textarea class="ckeditor form-control" name="body"></textarea>
		        </div>
				<input type="submit" class="btn btn-danger btn-block" value="Submit">
		    </form>
		</div>
	</div>

@endsection