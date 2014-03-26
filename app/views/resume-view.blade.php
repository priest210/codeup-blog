@extends('layouts.master-resume')

@section('title')
    <title>Ken Priest's Resume</title>
@stop

@section('cssScript')
    <link href="css/superhero-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/superhero-bootstrap.css">
    <link href="css/resume.css" rel="stylesheet">
@stop

@section('jumbo')
	<h1>Ken Priest </h1>
	<p>Welcome to my online resum&eacute;.
	</p>  
    <p>This page was created using the finest HTML, CSS  and Javascript craftsmanship.  
    </p>
	<p>Rest assured no shortcuts were taken and no animals were harmed during the development process.</p>
@stop


  <div class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
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
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact me</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>

@section('content')

	<div>
		<div class="panel panel-danger">
		  <div class="panel-heading">
		    <h3 class="panel-title" id="profile">Profile</h3>
		  </div>
		  <div class="panel-body">
		    <div class="well well-lg">Here is where I will add an objective/summary statement.</div>
		  </div>
		</div>

		<div class="panel panel-primary">
		  	<div class="panel-heading">
		    <h3 class="panel-title" id="skills">Skills</h3>
			</div>
		</div>
	</div>
	
	<div class="panel panel-primary">
	    <div class="panel-body">
	    <table class="table" id="skills-table">
	          <tr>
	              <td>Linux</td>
	              <td>HTML</td> 
	              <td>Bootstrap</td>
	              <td>Project Management</td>
	              <td>Test edge</td>
	          </tr>
	          <tr>
	              <td>Apache</td>
	              <td>CSS</td>
	              <td>b</td>
	              <td>2</td> 
	              <td>v</td>
	          </tr>
	          <tr>
	              <td>MySQL</td>
	              <td>Laravel</td>
	              <td>c</td>
	              <td>3</td>
	              <td>x</td>
	          </tr>
	          <tr>
	              <td>PHP</td>
	              <td>GIT</td> 
	              <td>d</td>
	              <td>4</td>
	              <td>y</td>
	          </tr>
	          <tr>
	              <td>Javascript</td>
	              <td>GitHub</td>
	              <td>e</td>
	              <td>5</td> 
	              <td>z</td>
	          </tr>
	    </table>  
	    </div>
	</div>
	

	<div class="panel panel-warning">
	    <div class="panel-heading">
	    <h3 class="panel-title" id="education">Education</h3>
	  </div>
	  <div class="panel-title"> 
	    <a href="http://www.codeup.com" target="_blank"class="list-group-item">
	    <i class="fa fa-laptop "></i> Codeup, Computer Programming Bootcamp,  Feb 2014 - Present
	      </a>
	  </div>
	  <div class="panel-body"> 
	    San Antonio, Texas
	  </div>

	  <div class="panel-title">
	    <a href="http://www.uiw.edu/mha" target="_blank" class="list-group-item" >
	    <i class="fa fa-pencil "></i> Master of Health Administration, GPA 3.93
	      </a>
	  </div>
	  <div class="panel-body">
	  University of the Incarnate Word, San Antonio, TX,  2010 – 2012
	  </div>
	  <div class="panel-title">
	    <a href="http://www.wbu.edu" target="_blank" class="list-group-item">
	    <i class="fa fa-pencil "></i> Bachelor, Business Administration, GPA 3.4
	      </a>
	  </div>
	<div class="panel-body"> 
	    Wayland Baptist University, San Antonio, TX,  2005 – 2010
	</div>

	</div>
	<div class="panel panel-warning">
	  <div id="experience-header" class="panel-heading" id="experience-header">
	    <h3 class="panel-title"  id="experience">Experience</h3>
	  </div>
	  <div class="panel-body">
	 
	    <ul class="list-group">
	      <h3>E&amp;P Wireline(Schlumberger)</h3>
	      <h4>Lead/Arming Operator</h4>
	          
	        <li class="list-group-item">Responsible for entire scope of   wireleine operations at wellsite</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	    </ul>

	    <ul class="list-group">
	      <h3>Graduate Student (Full-time)</h3>
	      <h4>Master of Health Administration</h4>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	    </ul>

	    <ul class="list-group">
	      <h3>Watermark Asset Management LLC.</h3>
	      <h4>Owner/Project Manager</h4>  
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	    </ul>

	    <ul class="list-group">
	      <h3>Paradise Farms LLC.</h3>
	      <h4>Operations &amp; Project Manager</h4> 
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	    </ul>

	    <ul class="list-group">
	      <h3>United States Air Force</h3>
	      <h4>Law Office Manager/Court Administrator/Paralegal</h4> 
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	        <li class="list-group-item">Key responsbilbity</li>
	    </ul>   
	  </div>
	</div>
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

