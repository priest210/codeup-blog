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
            </ul>
        </div>
    </div>

	<div class="jumbotron">
	    <p><a href="http://www.linkedin.com/in/kenpriest/" class="btn btn-primary btn-lg" target="_blank">Learn more about me!</a></p>
    </div>

    @yield('title')
    @yield('content')


</body>
</div>

@yield('footer')
</html>