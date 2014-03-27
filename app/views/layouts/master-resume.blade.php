<!doctype html>
<html lang="en">

<head>
	    <!-- add 2 link tags for icon on title tab -->
    <link rel="shortcut icon" type="image/icon" href="monitor2.ico">
    <link rel="icon" type="image/icon" href="public/monitor2.ico">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

@yield('title')

@yield('cssScript')

</head>

<div class="container"> body>

	<div class="jumbotron">
@yield('jumbo')
    	<p><a href="http://www.linkedin.com/in/kenpriest/" class="btn btn-primary btn-lg" target="_blank">Learn more about me!</a></p>
	</div>

 @yield('content')
</div>

</body>

@yield('footer')
</html>