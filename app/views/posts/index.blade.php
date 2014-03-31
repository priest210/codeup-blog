@extends('layouts.master-blog')



@section('content')
	<!-- Iterates through posts returned from table in DB -->
	@foreach ($posts as $post)
	<div class="well well-lg">
		<div class="blog-post">
		    <h2 class="blog-post-title">{{{$post->title}}}</h2>
            <p class="blog-post-meta">{{{$post->created_at}}} by Ken Priest</p>
            <p>{{{$post->body}}}</p>              
		</div>
	</div>
     @endforeach
@stop




