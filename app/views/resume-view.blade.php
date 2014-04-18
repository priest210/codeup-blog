@extends('layouts.master-resume')

@section('title')
    <title>Ken Priest's Resume</title>
@stop

@section('content')

	<div>
		<div class="panel panel-danger">
		  <div class="panel-heading">
		    <h3 class="panel-title" id="profile">Profile</h3>
		  </div>
		  <div class="panel-body">
		    <div class="well well-lg">
		    	<p id="profile-body"> I am currently working on independent projects while I am looking for a permanent position.  My focus is to find a position with an organization that will allow me to refine my current skills while learning new technologies.  I really love being challenged and contributing in a team environment.  
		    	<p id="profile-body"> I have links to my Linkedin page where you will find a traditional copy of my resume.  
		    		I have taken the opportunity as the creator of this page to expand on some of the experience I have in order to paint a more accurate picture of my abilities and experience.  At times positions can be subjective based on a few lines.  
		    		I want to add narratives where I think are needed in order to paint a better picture of who I am
		    	</p>
		    </div>
		  </div>
		</div>

		<div class="panel panel-primary">
		  	<div class="panel-heading">
		    <h3 class="panel-title" id="skills">Skills</h3>
			</div>

	    <div class="panel-body">
	    <table class="table" id="skills-table">
	          <tr>
	              <td>Linux</td>
	              <td>Apache</td> 
	              <td>MySQL</td>
	              <td>PHP</td>
	              <td>JavaScript</td>
	          </tr>
	          <tr>
	              <td>Vagrant</td>
	              <td>HTML</td>
	              <td>Sequel Pro</td>
	              <td>Laravel</td> 
	              <td>JQuery</td>
	          </tr>
	          <tr>
	              <td>Git</td>
	              <td>CSS</td>
	              <td>Twitter Bootstrap</td>
	              <td>MVC</td>
	              <td>Stripe</td>
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
	    <i class="fa fa-laptop "></i> Codeup, Computer Programming Bootcamp,  Feb 2014 - April 2014
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
	<div>
	<div class="panel panel-warning" id="experience">
	  <div id="experience-header" class="panel-heading" id="experience-header">
	    <h3 class="panel-title">Experience</h3>
	  </div>
	  <div class="panel-body">

	  	<ul class="list-group">
	      <h3>Freelance Projects</h3>
	      <h4>Full-stack Web Developer</h4>    
	        <li class="list-group-item">- Local Care Package Web Application</li>
	        <li class="list-group-item">- Whack-A-Squatch</li>
	        <li class="list-group-item">- Online Resume</li>
	        <li class="list-group-item">- Laravel Blog</li>
	    </ul>
	 
	    <ul class="list-group">
	      <h3>E&amp;P Wireline(Schlumberger)</h3>
	      <h4>Lead/Arming Operator</h4>
	      	<p>Supports all wireline operations at well site.  Worked on cased hole wireline crew performing well perforating in support of hydraulic fracturing for Marathon Oil.  Builds perforating guns to include installing switches, detonators and setting tools (Baker Hughes & Weatherford). 
	      	</p>
	          
	        <li class="list-group-item">- Responsible for entire scope of wireleine operations at wellsite</li>
	        <li class="list-group-item">- Building Perforating Guns at well-site</li>
	        <li class="list-group-item">- Installing Explosive Switches and Detonators</li>
	        <li class="list-group-item">- Explosive Material Inventory Control and Handling</li>
	        <li class="list-group-item">- Rig Up and Rig Down of well-site Operations</li>
	    </ul>

	    <ul class="list-group">
	      <h3>Graduate Student (Full-time)</h3>
	      <h4>Master of Health Administration</h4>
	      <p>Analyzed practices’ current operations to provide Institute for Women’s Health and Northeast OB/GYN Associates recommendations for fully utilizing the new practice management information system Next Gen, which has been chosen by both practices to effectively manage their operations.
	      </p>
	        <li class="list-group-item">- GPA 3.93</li>
	        <li class="list-group-item">- Upsilon Phi Delta, National Honor Society for Healthcare Management</li>
	    </ul>

	    <ul class="list-group">
	      <h3>Watermark Asset Management LLC., San Antonio, Texas - 6/2008-1/2013 </h3>
	      <h4>Owner/Project Manager</h4>
	      <p>I started this company to pursue a lifelong goal influenced by my parents success at real estate investment by purchasing properties in various conditions and investing sweat equity in them.  I held properties for rental purposes and also sold them while holding the notes on them.  In 2013, I sold the last property and closed up the business.  During this experience I gained a vast amount of knowledge about business operations, negotiations, project management, contractor relations and property management.
	      </P>  
	        <li class="list-group-item">- Represented the company in the purchase, refurbishment, and reselling of investment residential real estate properties. Manage administrative functions, including financing, contractor oversight, payroll, materials, and costs.  Family owned and operated Limited Liability Company created to hold real estate holdings</li>
	        <li class="list-group-item">- Completed focused analysis of local real estate market which led to identification of key high margin market enabling company to experience first year growth of 197% and maintains asset holdings valued at over $400,000</li>
	        <li class="list-group-item">- Negotiated contracts for company held mortgages that generated additional revenue stream which increased corporate revenue by 89%</li>
	    </ul>

	    <ul class="list-group">
	      <h3>Paradise Farms LLC., San Antonio / Rio Medina, Texas - 6/2006-6/2008</h3>
	      <h4>Operations &amp; Project Manager</h4> 
	      <p>I wore several hats while moving around various entities within this holding company.  I enjoyed a vast amount of autonomy as the "Go To Problem Solver"</p>
	        <li class="list-group-item">- Analysis of major inventory cost problem resulted in initiation of just-in-time inventory system which led to an inventory cost reduction of 66%</li>
	        <li class="list-group-item">- Oversaw all technology procurement to include acquisition process and installation of new corporate network server and database system which led to increased operational cost savings and asset recovery of over $200,000</li>
	        <li class="list-group-item">- Led initiative to overhaul corporate health benefits plan, which led to a cost savings of over 34% while maintaining a high level of coverage for employees</li>
	        <li class="list-group-item">- Assigned to corporate owned bio-diesel plant to assist in operational management changeover.  Helped facilitate plant management restructuring and daily operations with zero loss in production time </li>
	    </ul>

	    <ul class="list-group">
	      <h3>United States Air Force, Honorable Discharge - 7/1988-6/2006</h3>
	      <h4>Law Office Manager/Court Administrator/Paralegal</h4> 
	        <li class="list-group-item">- Managed full spectrum of administrative activities to include budget, attorney case administration, and paralegal duties for the Lackland Air Force Base defense counsel office which carried the heaviest case load in the U.S. Air Force.  Performance resulted in being selected as the Defense Paralegal of the Year for the Central Judiciary Circuit</li>
	        <li class="list-group-item">- Devised, systemized and executed plan of action for requisition and deployment of entire Central Judiciary Circuit staff laptop inventory to upgraded equipment with zero interruptions or delays in the mobility of traveling counsel and judges.  Resulted in commendation from Chief Circuit Judge and Chief Circuit Defense Counsel</li>
	        <li class="list-group-item">- Designed user interface template for web based administrative discharge program which was adopted and implemented Air Force wide as a “Best Practice”</li>
	        <li class="list-group-item">- Personally selected by the U.S. Air Force - Pacific Air Forces Senior Enlisted Advisor for position advancement to Assistant Superintendent, U. S. Air Force Central Judiciary Circuit. Recognized by Chief Judge of the Air Force as outstanding performer</li>
	        <li class="list-group-item">- Implemented process improvement campaign in Lackland Air Force Base claims department resulting in increased efficiency of adjudication and the recovery of over $273,000 in reimbursement to the U.S Air Force</li>
	        <li class="list-group-item">- Identified shortfalls and streamlined personnel discharge procedures for the 20,000 military- member Lackland Air Force Base resulting in a 80% decrease in processing times with zero errors</li>
	        <li class="list-group-item">- Adjudicated over 900 property claims at Andersen Air Force Base, Guam in the aftermath of Super Typhoon Paka, while attaining a 1.7 day processing time, exceeding the 10 day processing requirement</li>
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

