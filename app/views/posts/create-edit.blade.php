@extends('layouts.master-blog')


@section('content')

	<div>
@if (empty($post->id))
			<h1 class="page-header">Create New Post</h1>
			{{Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal'))}}
@else
		  <fieldset>
		    <legend>Update a blog entry</legend>
		    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
@endif
		    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
		      {{ Form::label('title', 'Title', array('class' => 'col-lg-2 control-label')) }}
		      <div class="col-lg-10">
		        {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title')) }}
		        {{ $errors->first('title', '<p><span class="help-block">:message</span></p>') }}
		      </div>
		    </div>
		    
		    <div class="form-group">
		      <label for="body" class="col-lg-2 control-label">Body</label>
		      <div class="col-lg-10">
		        {{ Form::textarea('body', null, array('class' => 'form-control', 'rows' => '5')) }}
		        {{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
		      </div>
		    </div>
		    
		    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
		    	{{ Form::label('body', 'Body', array('class' => 'col-lg-10 col-lg-offset-2'))}}
		      <div class="col-lg-10 col-lg-offset-2">
		    @if (empty($post->id))
		        <button type="submit" class="btn btn-primary">Create Post</button>
		    @else 
		        <button type="submit" class="btn btn-primary">Update Post</button>
		    @endif
		      </div>
		    </div>
		  </fieldset>
		  {{ Form::close() }}
	</div>
@stop

@section('footer')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
@stop
