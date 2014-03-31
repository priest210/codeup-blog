@extends('layouts.master-blog')


@section('content')
	<h1>{{{ $posts->title }}}</h1>

	<!-- Grabs single post from object returned from table in DB -->
		<div class="blog-post">
	            <h2 class="blog-post-title">{{{$posts->title}}}</h2>
	            <p class="blog-post-meta">{{{$posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
	            <p>{{{$posts->body}}}</p>
	          	<a href="{{{ action('PostsController@index') }}}">Return to posts listing</a></p>
		</div>
@stop