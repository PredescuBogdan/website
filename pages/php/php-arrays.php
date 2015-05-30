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
	<h3>Arrays are used in order to store data efficiently. You can think at arrays like an ordered list of elements and they can be accessed by referring to their index positions within the array. The function <code>array()</code> is used to create an array. Arrays are divided into 3 types: <strong>indexed arrays</strong>, <strong>associative arrays</strong> and <strong>multidimensional arrays</strong>.</h3>
</div>

<div class="container">
	<h1><span class="label label-info">Syntax</span></h1>
	<h3><code>array();</code> - function used to create an array</h3>
</div>

<div class="container">
	<h1><span class="label label-info">Example</span></h1>
</div>

<div class="container">
	<h3><strong>Indexed Arrays</strong></h3>
	<h3>The following array will have 3 elements and their index positions will be 0, 1 and 2.</h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$drinks</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"Cofee"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Pepsi"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Tea"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '> </span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"I like to drink "</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$drinks</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>", "</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$drinks</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>" and "</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$drinks</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"."</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
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
          <h3 class="modal-title">Indexed Array</h3>
        </div>
        <div class="modal-body">
			<?php
			$drinks = array("Cofee", "Pepsi", "Tea"); 
			echo "I like to drink " . $drinks[0] . ", " . $drinks[1] . " and " . $drinks[2] . ".";
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
	<h3><strong>Associative Arrays</strong></h3>
	<h3><strong>Code:</strong></h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$occupation</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"Bogdan"</span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#0000e6; background:#ffffe8; '>"book seller"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Ben"</span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#0000e6; background:#ffffe8; '>"credit analyst"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"John"</span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#0000e6; background:#ffffe8; '>"freelancer"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Bogdan works as a "</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$occupation</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#0000e6; background:#ffffe8; '>'Bogdan'</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
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
          <h3 class="modal-title">Associative Array</h3>
        </div>
        <div class="modal-body">
			<?php
			$occupation = array("Bogdan"=>"book seller", "Ben"=>"credit analyst", "John"=>"freelancer");
			echo "Bogdan works as a " . $occupation['Bogdan'];
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
<h3><strong>Multidimensional Arrays</strong></h3>
<h3><strong>Code:</strong></h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"Book1"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>29</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>3</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"Book2"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>39</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>24</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"Book3"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>13</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"Book4"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>99</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#008c00; background:#ffffe8; '>54</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;</span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>": In stock: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>", sold: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>".&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>": In stock: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>", sold: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>".&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>": In stock: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>", sold: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>".&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>3</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>0</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>": In stock: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>3</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>", sold: "</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#797997; background:#ffffe8; '>$book</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>3</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>[</span><span style='color:#008c00; background:#ffffe8; '>2</span><span style='color:#808030; background:#ffffe8; '>]</span><span style='color:#808030; background:#ffffe8; '>.</span><span style='color:#0000e6; background:#ffffe8; '>".&lt;br>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
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
          <h3 class="modal-title">Multidimensional Arrays</h3>
        </div>
        <div class="modal-body">
			<?php
			$book = array
				(
				array("Book1",29,3),
				array("Book2",39,24),
				array("Book3",13,2),
				array("Book4",99,54)
				);
   
			echo $book[0][0].": In stock: ".$book[0][1].", sold: ".$book[0][2].".<br>";
			echo $book[1][0].": In stock: ".$book[1][1].", sold: ".$book[1][2].".<br>";
			echo $book[2][0].": In stock: ".$book[2][1].", sold: ".$book[2][2].".<br>";
			echo $book[3][0].": In stock: ".$book[3][1].", sold: ".$book[3][2].".<br>";
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