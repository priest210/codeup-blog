@extends('layouts.master')


@section('content')
	<div class="blog-post">
	<form class="form-horizontal" role="form" {{{ action('PostsController@store') }}}>
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title" placeholder="title" >
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	      <div type="body" class="form-control" placeholder="body">
	      <textarea class="form-control" id="body"  name="body" rows="5">{{{ Input::old('body') }}}</textarea>
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Post</button>
	    </div>
	  </div>
	</form>
@stop