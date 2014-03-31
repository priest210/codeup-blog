@extends('layouts.master-blog')

@section('content')

@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif

@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

	<!-- Iterates through posts returned from table in DB -->
	@foreach ($posts as $post)
	<div class="well well-lg">
		<div class="blog-post">
		    <h2 class="blog-post-title">{{{$post->title}}}</h2>
            <p class="blog-post-meta">{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}} by Ken Priest</p>
            <p>{{{$post->body}}}</p>              
		</div>
	</div>
     @endforeach
@stop




