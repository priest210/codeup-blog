@extends('layouts.master-blog')


@section('content')
	<div>
		<form class="form-horizontal" method="post" action="{{{ action('PostsController@store') }}}">
		  <fieldset>
		    <legend>Post a new blog entry</legend>
		    <div class="form-group">
		      <label for="title" class="col-lg-2 control-label">Post Title</label>
		      <div class="col-lg-10">
		        <input type="text" name="title" class="form-control" id="title" placeholder="title">
		      </div>
		    </div>
		    
		    <div class="form-group">
		      <label for="body" class="col-lg-2 control-label">Body</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" name="body" rows="5" id="body">{{{ Input::old('body') }}}</textarea>
		      </div>
		    </div>
		    
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <button class="btn btn-default">Cancel</button>
		        <button type="submit" class="btn btn-primary">Create Post</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
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