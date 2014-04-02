@extends('layouts.master-blog')


@section('content')

 <div class="container">
	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
        <div class="col-lg-4" >
        <h2 class="form-signin-heading">Please Log In</h2>
        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    	</div>
     {{ Form::close() }}
 </div>
@stop

@section('login')
<script type="text/javascript">
    $('.alert-success').fadeOut(3000);
    $('.alert-danger').fadeOut(3000);
</script>
@stop

