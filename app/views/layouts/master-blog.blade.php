<!doctype html>
<html lang="en">

<head>
    <!-- add 2 link tags for icon on title tab -->
    <link rel="shortcut icon" type="image/icon" href="monitor2.ico">
    <link rel="icon" type="image/icon" href="public/monitor2.ico">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Ken Priest's Blog</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/slate-bootstrap.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

</head>

<div class="container">
<body>
    <div>
        <div class="navbar navbar-default">
            <ul class="nav navbar-nav">
              <li><a href="#">About Me</a></li>
              <li><a href="#">Resume</a></li>          
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Contact Me</a></li>
              @if (Auth::check())
              <li><a href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->email }}}) </a></li>
              @else
              <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
              @endif
            </ul>
                <div class="navbar-form navbar-left nav navbar-nav col-lg-8">
                {{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET')) }}
                    {{ Form::text('search') }}
                    {{ Form::submit('Search') }}
                {{Form::close() }}
            </div>
        </div>
    </div>

	<div class="jumbotron">
        <h1>Ken Priest </h1>
        <p>Welcome,</p>  
        <p>This page was created using the finest HTML, CSS  and Javascript craftsmanship.</p>
        <p>Rest assured no shortcuts were taken and no animals were harmed during the development process.</p>
	    <p><a href="http://www.linkedin.com/in/kenpriest/" class="btn btn-primary btn-lg" target="_blank">Learn more about me!</a></p>
    </div>

    @yield('title')

    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif

    @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    @yield('content')

</body>
    <p class="blog-post-title-meta">{{ $posts->links() }}</h>
</div>






@yield('footer')
</html>