@extends('layouts.master-blog')

@section('content')


	<!-- Iterates through posts returned from table in DB -->
	@foreach ($posts as $post)
	<div class="well well-lg">
		<div class="blog-post">
		    <h2 class="blog-post-title">{{{$post->title}}}</h2>
            <p class="blog-post-meta">{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}} {{{ $post->user->email }}}</p>
            <img src="{{{ $post->image }}}">
            <p>{{{ Str::words($post->body, 10)}}}</p>  
            <p><a href="{{{ action('PostsController@show', $post->id) }}}">View Full Post</a></p>

		</div>
	</div>




    @endforeach
@stop




