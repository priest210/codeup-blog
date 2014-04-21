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

<body id="top">

  <div class="navbar-inverse" role="navigation">
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
          <li><a href="{{{ action('HomeController@showBlog') }}}">My Blog</a></li>
          <li><a href="#contact">Contact me</a></li>
          <li><a href="http://www.linkedin.com/in/kenpriest/"<i class="fa fa-twitter-square"></i>Linkedin</a></li>
          <li><a href="http://twitter.com/KenzLife"<i class="fa fa-twitter-square"></i>Twitter</a></li>
          <li><a href="http://github.com/priest210"<i class="fa fa-twitter-square"></i>GitHub</a></li>
        </ul>
      </div>
    </div>
  </div>

<div class="container">
	<div class="jumbotron">
        <h1>Ken Priest</h1>
        <h2>Welcome to my online resum&eacute;.
        </h2>  
        <p> I created this resum&eacute using Laravel, HTML, CSS, and Twitter Bootstrap.  I was aiming for a bolder look with eye catching colors, that was easy to navigate and read.  This project is going to be an ongoing work in progress where I will practice new ideas, techniques and formats.  While the content will stay up to date, the format is basically subject to change at any time.</p>
	</div>

 @yield('content')
</div>
<h3><a href="#top" class="back-to-top">Back to Top</a></h3>
</body>

@yield('footer')
</html>