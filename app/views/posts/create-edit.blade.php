@extends('layouts.master-blog')


@section('content')

	<div>
@if (empty($post->id))
			<h1 class="page-header">Create New Post</h1>
			{{Form::open(array('action' => 'PostsController@store', 'files' => true, 'class' => 'form-horizontal'))}}
@else
		  <fieldset>
		    <legend>Update a blog entry</legend>
		    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal')) }}
@endif
		    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
		      {{ Form::label('title', 'Title', array('class' => 'col-lg-2 control-label')) }}
		      <div class="col-lg-6">
		        {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title')) }}
		        {{ $errors->first('title', '<p><span class="help-block">:message</span></p>') }}
		      </div>
		    </div>
		    
		    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
		      <label for="body" class="col-lg-2 control-label">Body</label>
		      <div class="col-lg-6">
		        {{ Form::textarea('body', null, array('class' => 'form-control', 'rows' => '5')) }}
		        {{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
		      </div>
		    </div>
		    <div class="row">
			   	<div class="col-lg-4" >
		    		{{ Form::file('image') }}
		    	</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-lg-4">	
			    @if (empty($post->id))
			        <button type="submit" class="btn btn-primary">Create Post</button>
			    
			    @else 
			    <div>
			        <button type="submit" class="btn btn-primary">Update Post</button>
			    {{ Form::close() }}
				</div>
				<div>
			    {{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'type' => 'button', 'method' => 'delete')) }}
			    	<button class="btn btn-danger">Delete Post</button>
			   	{{ Form::close() }}
			    </div>
			    @endif
				</div>
			</div>
		  </fieldset>

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
