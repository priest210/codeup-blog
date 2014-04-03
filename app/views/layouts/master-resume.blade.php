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

    <link href="css/superhero-bootstrap.css" rel="stylesheet">
    <link href="/css/resume.css" rel="stylesheet">

</head>

<body>

  <div class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>

      <div class="navbar-collapse collapse navbar-inverse-collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li><a href="#profile">Profile</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#education">Education</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="http://blog.dev/posts/">My Blog</a></li>
          <li><a href="#contact">Contact me</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>

<div class="container">
	<div class="jumbotron">
        <h1>Ken Priest </h1>
        <p>Welcome to my online resum&eacute;.
        </p>  
        <p>This page was created using the finest HTML, CSS  and Javascript craftsmanship.  
        </p>
        <p>Rest assured no shortcuts were taken and no animals were harmed during the development process.</p>
        <p><a href="http://www.linkedin.com/in/kenpriest/" class="btn btn-primary btn-lg" target="_blank">Learn more about me!</a></p>
	</div>

 @yield('content')
</div>

</body>

@yield('footer')
</html>