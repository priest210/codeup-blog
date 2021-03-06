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
              <li><a href="http://www.linkedin.com/in/kenpriest/" target="_blank">About Me</a></li>
              <li><a href="{{{ action('HomeController@showResume') }}}" target="_blank">Resume</a></li>          
              <li><a href="{{{ action('HomeController@showPortfolio') }}}" target="_blank">Portfolio</a></li>
              <li><a href="http://www.linkedin.com/in/kenpriest/" target="_blank">Contact Me</a></li>
              <li><a href="http://www.linkedin.com/in/kenpriest/"<i class="fa fa-twitter-square" target="_blank"></i>Linkedin</a></li>
              <li><a href="http://twitter.com/KenzLife"<i class="fa fa-twitter-square" target="_blank"></i>Twitter</a></li>
              <li><a href="http://github.com/priest210"<i class="fa fa-twitter-square" target="_blank"></i>GitHub</a></li>

              @if (Auth::check())
              <li><a href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->email }}}) </a></li>
              @else
              <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
              @endif
            </ul>
        </div>
    </div>

	<div class="jumbotron">
        <h1>Ken Priest </h1>
        <p>Welcome,</p>  
        <p>Sharing my experience as a student in <a href="http://www.codeup.com" target="_blank">Codeup's</a> Web Developer Bootcamp and beyond.</p>
        <p>As I gain knowledge and insight I will pass it on.  I would love to help others trying to learn to code from "scratch"
            and lend some lessons learned advice to hopefully help learn and avoid some pitfalls as they go along.  </p>
    </div>

    @yield('title')

    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif

    @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    @yield('content')

        <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'kenpriest'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
</div>






@yield('footer')

</body>
</html>