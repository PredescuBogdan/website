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
	.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
	background-color: #00adee;
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
	<h3>A string is a series of characters. Strings can be stored in a variable or used directly in a function. We can use a lot of functions with strings like <code>strlen()</code> (get the lenght of a string), <code>str_word_count()</code> (counts the number of words in a string), <code>strrev()</code>  (reverse a string), <code>str_replace()</code> (replace text within a string) and many more. All these functions will not modify the original string, they are <strong>nondestructive</strong>, they will just return a new string.</h3>
</div>

<div class="container">
<h1><span class="label label-info">Syntax</span></h1>
<h3><strong>Some common string functions are:</strong></h3>
<h3><code>strlen()</code> - returns the lenght of a string</h3>
<h3><code>str_word_count()</code> - count the number of words in a string</h3>
<h3><code>strrev()</code> - reverses a strings</h3>
<h3><code>str_replace()</code> - replaces some characters in a string (case-sensitive)</h3>
<h3>For a complete list of all string functions:</h3>
</div>

<div class="container">
<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">See The Complete List</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Complete List Of String Functions</h3>
        </div>
        <div class="modal-body">
			<table class="table table-bordered table-hover">
  <tr>
    <th style="width:30%">Function</th>
    <th style="width:70%">Description</th>
  </tr>
  <tr>
    <td>addcslashes()</a></td>
    <td>Returns a string with backslashes in front of the specified 
	characters</td>
  </tr>
  <tr>
    <td>addslashes()</a></td>
    <td>Returns a string with backslashes in front of predefined 
	characters</td>
  </tr>
  <tr>
    <td>bin2hex()</a></td>
    <td>Converts a string of ASCII characters to hexadecimal values</td>
  </tr>
  <tr>
    <td>chop()</a></td>
    <td>Removes whitespace or other characters from the right end of a string</td>
  </tr>
  <tr>
    <td>chr()</a></td>
    <td>Returns a character from a specified ASCII value</td>
  </tr>
  <tr>
    <td>chunk_split()</a></td>
    <td>Splits a string into a series of smaller parts</td>
  </tr>
  <tr>
    <td>convert_cyr_string()</a></td>
    <td>Converts a string from one Cyrillic character-set to another</td>
  </tr>
  <tr>
    <td>convert_uudecode()</a></td>
    <td>Decodes a uuencoded string</td>
  </tr>
  <tr>
    <td>convert_uuencode()</a></td>
    <td>Encodes a string using the uuencode algorithm</td>
  </tr>
  <tr>
    <td>count_chars()</a></td>
    <td>Returns information about characters used in a string</td>
  </tr>
  <tr>
    <td>crc32()</a></td>
    <td>Calculates a 32-bit CRC for a string</td>
  </tr>
  <tr>
    <td>crypt()</a></td>
    <td>One-way string encryption (hashing)</td>
  </tr>
  <tr>
    <td>echo()</a></td>
    <td>Outputs one or more strings</td>
  </tr>
  <tr>
    <td>explode()</a></td>
    <td>Breaks a string into an array</td>
  </tr>
  <tr>
    <td>fprintf()</a></td>
    <td>Writes a formatted string to a specified output stream</td>
  </tr>
  <tr>
    <td>get_html_translation_table()</a></td>
    <td>Returns the translation table used by htmlspecialchars() 
	and htmlentities()</td>
  </tr>
  <tr>
    <td style="height: 31px">hebrev()</a></td>
    <td style="height: 31px">Converts Hebrew text to visual text</td>
  </tr>
  <tr>
    <td>hebrevc()</a></td>
    <td>Converts Hebrew text to visual text and new lines (\n) into 
	&lt;br&gt;</td>
  </tr>
   <tr>
    <td>hex2bin()</a></td>
    <td>Converts a string of hexadecimal values to ASCII characters</td>
  </tr>
  <tr>
    <td>html_entity_decode()</a></td>
    <td>Converts HTML entities to characters</td>
  </tr>
  <tr>
    <td>htmlentities()</a></td>
    <td>Converts characters to HTML entities</td>
  </tr>
  <tr>
    <td>htmlspecialchars_decode()</a></td>
    <td>Converts some predefined HTML entities to characters</td>
  </tr>
  <tr>
    <td>htmlspecialchars()</a></td>
    <td>Converts some predefined characters to HTML entities</td>
  </tr>
  <tr>
    <td>implode()</a></td>
    <td>Returns a string from the elements of an array</td>
  </tr>
  <tr>
    <td>join()</a></td>
    <td>Alias of <a href="func_string_implode.asp">implode()</a></td>
  </tr>
  <tr>
    <td>lcfirst()</a></td>
    <td>Converts the first character of a string to lowercase</td>
  </tr>
  <tr>
    <td>levenshtein()</a></td>
    <td>Returns the Levenshtein distance between two strings</td>
  </tr>
  <tr>
    <td>localeconv()</a></td>
    <td>Returns locale numeric and monetary formatting information</td>
  </tr>
  <tr>
    <td>ltrim()</a></td>
    <td>Removes whitespace or other characters from the left side of a string</td>
  </tr>
  <tr>
    <td>md5()</a></td>
    <td>Calculates the MD5 hash of a string</td>
  </tr>
  <tr>
    <td>md5_file()</a></td>
    <td>Calculates the MD5 hash of a file</td>
  </tr>
  <tr>
    <td>metaphone()</a></td>
    <td>Calculates the metaphone key of a string</td>
  </tr>
  <tr>
    <td>money_format()</a></td>
    <td>Returns a string formatted as a currency string</td>
  </tr>
  <tr>
    <td>nl_langinfo()</a></td>
    <td>Returns specific local information</td>
  </tr>
  <tr>
    <td>nl2br()</a></td>
    <td>Inserts HTML line breaks in front 
of each newline in a string</td>
  </tr>
  <tr>
    <td>number_format()</a></td>
    <td>Formats a number with grouped thousands</td>
  </tr>
  <tr>
    <td>ord()</a></td>
    <td>Returns the ASCII value of the first character of a string</td>
  </tr>
  <tr>
    <td>parse_str()</a></td>
    <td>Parses a query string into variables</td>
  </tr>
  <tr>
    <td>print()</a></td>
    <td>Outputs one or more strings</td>
  </tr>
  <tr>
    <td>printf()</a></td>
    <td>Outputs a formatted string</td>
  </tr>
  <tr>
    <td>quoted_printable_decode()</a></td>
    <td>Converts a quoted-printable string to an 8-bit string</td>
  </tr>
  <tr>
    <td>quoted_printable_encode()</a></td>
    <td>Converts an 8-bit string to a quoted printable string</td>
  </tr>
  <tr>
    <td>quotemeta()</a></td>
    <td>Quotes meta characters</td>
  </tr>
  <tr>
    <td>rtrim()</a></td>
    <td>Removes whitespace or other characters from the right side of a string</td>
  </tr>
  <tr>
    <td>setlocale()</a></td>
    <td>Sets locale information</td>
  </tr>
  <tr>
    <td>sha1()</a></td>
    <td>Calculates the SHA-1 hash of a string</td>
  </tr>
  <tr>
    <td>sha1_file()</a></td>
    <td>Calculates the SHA-1 hash of a file</td>
  </tr>
  <tr>
    <td>similar_text()</a></td>
    <td>Calculates the similarity between two strings</td>
  </tr>
  <tr>
    <td>soundex()</a></td>
    <td>Calculates the soundex key of a string</td>
  </tr>
  <tr>
    <td>sprintf()</a></td>
    <td>Writes a formatted string to a variable</td>
  </tr>
  <tr>
    <td>sscanf()</a></td>
    <td>Parses input from a string according to a format</td>
  </tr>
   <tr>
    <td>str_getcsv()</a></td>
    <td>Parses a CSV string into an array</td>
  </tr>
  <tr>
    <td>str_ireplace()</a></td>
    <td>Replaces some characters in a 
	string (case-insensitive)</td>
  </tr>
  <tr>
    <td>str_pad()</a></td>
    <td>Pads a string to a new length</td>
  </tr>
  <tr>
    <td>str_repeat()</a></td>
    <td>Repeats a string a specified number of times</td>
  </tr>
  <tr>
    <td>str_replace()</a></td>
    <td>Replaces some characters in a 
	string (case-sensitive)</td>
  </tr>
  <tr>
    <td>str_rot13()</a></td>
    <td>Performs the ROT13 encoding on a string</td>
  </tr>
  <tr>
    <td>str_shuffle()</a></td>
    <td>Randomly shuffles all characters in a string</td>
  </tr>
  <tr>
    <td>str_split()</a></td>
    <td>Splits a string into an array</td>
  </tr>
  <tr>
    <td>str_word_count()</a></td>
    <td>Count the number of words in a string</td>
  </tr>
  <tr>
    <td>strcasecmp()</a></td>
    <td>Compares two strings (case-insensitive)</td>
  </tr>
  <tr>
    <td>strchr()</a></td>
    <td>Finds the first occurrence of a string inside another 
	string (alias of strstr())</td>
  </tr>
  <tr>
    <td>strcmp()</a></td>
    <td>Compares two strings (case-sensitive)</td>
  </tr>
  <tr>
    <td>strcoll()</a></td>
    <td>Compares two strings (locale based string comparison)</td>
  </tr>
  <tr>
    <td>strcspn()</a></td>
    <td>Returns the number of characters found in a string before 
	any part of some specified characters are found</td>
  </tr>
  <tr>
    <td>strip_tags()</a></td>
    <td>Strips HTML and PHP tags from a string</td>
  </tr>
  <tr>
    <td>stripcslashes()</a></td>
    <td>Unquotes a string quoted with addcslashes()</td>
  </tr>
  <tr>
    <td>stripslashes()</a></td>
    <td>Unquotes a string quoted with addslashes()</td>
  </tr>
  <tr>
    <td>stripos()</a></td>
    <td>Returns the position of the first occurrence of a string 
	inside another string (case-insensitive)</td>
  </tr>
  <tr>
    <td>stristr()</a></td>
    <td>Finds the first occurrence of a string inside another 
	string (case-insensitive)</td>
  </tr>
	<td>strlen()</a></td>
    <td>Returns the length of a string</td>
  </tr>
  <tr>
    <td>strnatcasecmp()</a></td>
    <td>Compares two strings using a &quot;natural order&quot; 
	algorithm (case-insensitive)</td>
  </tr>
  <tr>
    <td>strnatcmp()</a></td>
    <td>Compares two strings using a &quot;natural order&quot; 
	algorithm (case-sensitive)</td>
  </tr>
  <tr>
    <td>strncasecmp()</a></td>
    <td>String comparison of the first 
	n characters (case-insensitive)</td>
  </tr>
  <tr>
    <td>strncmp()</a></td>
    <td>String comparison of the first 
	n characters (case-sensitive)</td>
  </tr>
  <tr>
    <td>strpbrk()</a></td>
    <td>Searches a string for any of a set of characters</td>
  </tr>
  <tr>
    <td>strpos()</a></td>
    <td>Returns the position of the first occurrence of a string 
	inside another string (case-sensitive)</td>
  </tr>
  <tr>
    <td>strrchr()</a></td>
    <td>Finds the last occurrence of a string inside another 
	string</td>
  </tr>
  <tr>
    <td>strrev()</a></td>
    <td>Reverses a string</td>
  </tr>
  <tr>
    <td>strripos()</a></td>
    <td>Finds the position of the last occurrence of a 
	string inside another string (case-insensitive)</td>
  </tr>
  <tr>
    <td>strrpos()</a></td>
    <td>Finds the position of the last occurrence of a 
	string inside another string (case-sensitive)</td>
  </tr>
  <tr>
    <td>strspn()</a></td>
    <td>Returns the number of characters found in a string that 
	contains only characters from a specified charlist</td>
  </tr>
  <tr>
    <td>strstr()</a></td>
    <td>Finds the first occurrence of a string inside another 
	string (case-sensitive)</td>
  </tr>
  <tr>
    <td>strtok()</a></td>
    <td>Splits a string into smaller strings</td>
  </tr>
  <tr>
    <td>strtolower()</a></td>
    <td>Converts a string to lowercase letters</td>
  </tr>
  <tr>
    <td>strtoupper()</a></td>
    <td>Converts a string to uppercase letters</td>
  </tr>
  <tr>
    <td>strtr()</a></td>
    <td>Translates certain characters in a string</td>
  </tr>
  <tr>
    <td>substr()</a></td>
    <td>Returns a part of a string</td>
  </tr>
  <tr>
    <td>substr_compare()</a></td>
    <td>Compares two strings from a specified start position (binary safe 
	and optionally case-sensitive)</td>
  </tr>
  <tr>
    <td>substr_count()</a></td>
    <td>Counts the number of times a substring occurs in a string</td>
  </tr>
  <tr>
    <td>substr_replace()</a></td>
    <td>Replaces a part of a string with another string</td>
  </tr>
  <tr>
    <td>trim()</a></td>
    <td>Removes whitespace or other characters from both sides of a string</td>
  </tr>
  <tr>
    <td>ucfirst()</a></td>
    <td>Converts the first character of a string to uppercase</td>
  </tr>
  <tr>
    <td>ucwords()</a></td>
    <td>Converts the first character of each word in a string to uppercase</td>
  </tr>
  <tr>
    <td>vfprintf()</a></td>
    <td>Writes a formatted string to a specified output stream</td>
  </tr>
  <tr>
    <td>vprintf()</a></td>
    <td>Outputs a formatted string</td>
  </tr>
  <tr>
    <td>vsprintf()</a></td>
    <td>Writes a formatted string to a variable</td>
  </tr>
  <tr>
    <td>wordwrap()</a></td>
    <td>Wraps a string to a given number of characters</td>
  </tr>
</table>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="container">
	<h1><span class="label label-info">Example</span></h1>
	<h3><strong>Get The Lenght Of A String</strong></h3>
	<h3><strong>Code:</strong></h3>
</div>

<div class="container">
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#400000; background:#ffffe8; '>strlen</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"This is a string and i will return the lenght"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
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
          <h3 class="modal-title">Get The Lenght Of A String</h3>
	   </div>
        <div class="modal-body">
			<?php
			echo strlen("This is a string and i will return the lenght");
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
	<h3><strong>Count The Number Of Words In A String</strong></h3>
	<h3><strong>Code:</strong></h3>
</div>

<div class="container">
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#400000; background:#ffffe8; '>str_word_count</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"This is a string and i will display the words number"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
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
          <h3 class="modal-title">Count The Number Of Words In A String</h3>
        </div>
        <div class="modal-body">
			<?php
			echo str_word_count("This is a string and i will display the words number");
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
	<h3><strong>Reverse A String</strong></h3>
	<h3><strong>Code:</strong></h3>
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#400000; background:#ffffe8; '>strrev</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"This is a string and i will display the words inverted"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#5f5035; background:#ffffe8; '>?></span>
</pre>
</div>
	
<div class="container">
<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal4">See Example >></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Reverse A String</h3>
        </div>
        <div class="modal-body">
			<?php
			echo strrev("This is a string and i will display the words inverted");
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