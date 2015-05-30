<!DOCTYPE html>
<html>
<head>
	<title>Bogdan's Website</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/images/favicon.ico">
	<link rel="stylesheet" href="/../css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
</head>
figcaption{
text-align:center;
}
.jumbotron{
	margin: 0;
	padding: 5px 15px;
	font-family: Arial, Helvetica, sans-serif;
	font-size:14px;
	outline: none;
	text-align: center;
	text-decoration: none;
	color: #ffffff;
	border: solid 1px #0076a3; border-right:0px;
	background: #0095cd;
	background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
	background: -moz-linear-gradient(top,  #00adee,  #0078a5);
	display:block;
}
.navbar-default{
	margin: 0;
	padding: 5px 15px;
	font-family: Arial, Helvetica, sans-serif;
	font-size:14px;
	outline: none;
	text-align: center;
	text-decoration: none;
	color: #ffffff;
	border: solid 1px #0076a3; border-right:0px;
	background: #0095cd;
	background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
	background: -moz-linear-gradient(top,  #00adee,  #0078a5);	
    clear: both;
    padding-top:25px;
	position: relative;
	height:70px;
	top:100px;
}
#tfheader{
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
<body>
<header>
		<!-- SEARCH BAR -->
		<div id="tfheader">
			<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
			</form>
		<div class="tfclear"></div>
		</div>
		
	</header>	
		<!-- NAV BAR -->
        <!-- Fixed navbar -->
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WEB TUTORIALS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/index.html">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">HTML<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/pages/html/html-tables.html">HTML Tables</a>
            <li><a href="/pages/html/html-images.html">HTML Images</a></li>
			<li><a href="/pages/html/html-lists.html">HTML Lists</a></li>
		    <li><a href="/pages/html/html-paragraphs.html">HTML Paragraphs</a></li>
			<li><a href="/pages/html/html-input-types.html">HTML Input Types</a></li>
		  </ul>
        </li>
        
		 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CSS<span class="caret"></span></a>
          <ul class="dropdown-menu">
			 <li><a href="/pages/css/css-selectors.html">CSS Selectors</a>
			<li><a href="/pages/css/css-tables.html">CSS Tables</a>
			<li><a href="/pages/css/css-box-model.html">CSS Box Model</a>
			<li><a href="/pages/css/css-padding.html">CSS Padding</a>
			<li><a href="/pages/css/css-lists.html">CSS Lists</a>
		 </ul>
        </li>
		 
		 
		 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PHP<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="php-arrays.php">PHP Arrays</a>
			<li><a href="php-variables.php">PHP Variables</a>
			<li><a href="php-strings.php">PHP Strings</a>
			<li><a href="php-if-else-elseif.php">PHP If / Else / Elseif</a>
			<li><a href="php-while-loop.php">PHP While Loop</a>
		 </ul>
        </li>
		
		 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">JAVASCRIPT<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/pages/javascript/javascript-operators.html">JAVASCRIPT Operators</a>
			<li><a href="/pages/javascript/javascript-variables.html">JAVASCRIPT Variables</a>
			<li><a href="/pages/javascript/javascript-objects.html">JAVASCRIPT Objects</a> 
			<li><a href="/pages/javascript/javascript-switch-statement.html">JAVASCRIPT Switch</a> 
			<li><a href="/pages/javascript/javascript-dates.html">JAVASCRIPT Dates</a> 
		</ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<h1><span class="label label-info">Definition</span></h1>
	<h3>PHP variables are used in order to store data values. All variables in php are denoted with a <code>$ sign</code> followed by the name and they are assigned with the "<strong>=</strong>" operator. The name of the variable must start with a letter or underscore character and not with a number. There is a big differences between $car and $CAR, they are different. There are 8 data types which we can use to create our variables: integers, doubles, booleans, NULL, strings, arrays, objects and resources.</h3>
</div>

<div class="container">
	<h1><span class="label label-info">Syntax</span></h1>
	<h3><code>$name</code> - creates a variable name for which we have to give a value</h3>
</div>

<div class="container">
	<h1><span class="label label-info">Example</span></h1>
</div>

<div class="container">
<h3><strong>Creating PHP Variables</strong></h3>
<h3><strong>Code:</strong></h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$txt</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"This is a simple example:"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$x</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#008c00; background:#ffffe8; '>83</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$y</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#008000; background:#ffffe8; '>93.5</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$txt</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$x</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$y</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#5f5035; background:#ffffe8; '>?></span>
</pre>
</div>

<div class="container">
<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">See Example >></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Creating PHP Variables</h3>
        </div>
        <div class="modal-body">
			<?php
			$txt = "This is a simple example:";
			$x = 83;
			$y = 93.5;

			echo $txt;
			echo "<br>";
			echo $x;
			echo "<br>";
			echo $y;
			?>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="container">
<h3><strong>Output Variables</strong></h3>
<h3>We use the PHP echo statement to output text and a variable to the screen.</h3>
<h3><strong>Code:</strong></h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$txt</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Smoking"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$txt2</span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Jogging"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"</span><span style='color:#797997; background:#ffffe8; '>$txt</span><span style='color:#0000e6; background:#ffffe8; '> is not good!"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"</span><span style='color:#797997; background:#ffffe8; '>$txt2</span><span style='color:#0000e6; background:#ffffe8; '> is good!"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#5f5035; background:#ffffe8; '>?></span>
</pre>
</div>

<div class="container">
<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal2">See Example >></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Output Variables</h3>
        </div>
        <div class="modal-body">
			<?php
			$txt = "Smoking";
			$txt2= "Jogging";
			echo "$txt is not good!";
			echo "<br>";
			echo "$txt2 is good!";
			?>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="container">
	<h3><strong>PHP The Static Keyword</strong></h3>
	<h3><strong>Code:</strong></h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>function</span><span style='color:#000000; background:#ffffe8; '> myTest</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800080; background:#ffffe8; '>{</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>static</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$x</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#008c00; background:#ffffe8; '>5</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$x</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$x</span><span style='color:#808030; background:#ffffe8; '>-</span><span style='color:#808030; background:#ffffe8; '>-</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800080; background:#ffffe8; '>}</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Countdown:"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>myTest</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>myTest</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>myTest</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>myTest</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>myTest</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#5f5035; background:#ffffe8; '>?></span>
</pre>
</div>

<div class="container">
<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal3">See Example >></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">PHP The Static Keyword</h3>
        </div>
        <div class="modal-body">
			<?php
			function myTest() {
			static $x = 5;
			echo $x;
			$x--;
			}
			echo "Countdown:";
			echo"<br>";
			myTest();
			echo "<br>";
			myTest();
			echo "<br>";
			myTest();
			echo "<br>";
			myTest();
			echo "<br>";
			myTest();
			?>  
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


	<footer>
		<div class ="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
			<p>Copyright @ 2015 Predescu Bogdan</p>
		</div>
	</footer>	

</body>
</html>