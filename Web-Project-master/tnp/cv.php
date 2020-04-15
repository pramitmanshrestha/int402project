<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>CV</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/list.css" />

  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/list.js"></script>

</head>

<body>


    <header>
    	<img src="img/logo1.jpg"  width="110" height="110" class="logo" alt=""/>
		<h1 align="center">National Institute of Technology Nagaland</h1>
		<h2>Chumukedima, Dimapur</h2>
		<h2 align="center">Training and Placement cell</h2><br />
    </header>
    <nav>
		<a href=""><button id="cv">CV's</button></a>
		<a href="lor.php"><button id="lor" >Letter of Recomendation</button></a>
		<a href="training.php"><button id="fl">Forwarding Letter</button></a>
		<a href=""><button id="sd">Student Database</button></a>
		<a href="notice.php"><button id="notice">Notice</button></a>
		<a href="index.html"><button id="lo">Logout</button></a>
		
    </nav>
    
    <article>
    	<div class="cv4">
    		<h3 align="center">4th Year</h3>
    		<a href="cse4.html" class="list">Computer Science and Engineering</a>
    		<ul class="ls" id="cse4">
    			<table>
    			<?php
    			include 'dbcon.php';
    			$q = "SELECT * FROM stud WHERE branch='CSE' AND year=4;";
				$result = mysqli_query($conn,$q);
    			while($row = mysqli_fetch_row($result)) {
    				echo "<tr>";
					echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
    				<input type='hidden' name='MAX_FILE_SIZE' value='3000000' />";
					echo "<th><li>$row[0]</th>" . "<th>$row[1]</th>" . "<th><input type='hidden' name='reg' value=$row[0]></th>
					<th><input type='submit' value='Upload'></form></th><th><form action='download.php' method='post'><input type='hidden' name='reg1' value='$row[0]'><input type='submit' value='Download'></th></li>";
					echo "</form>";
					echo "</tr>";
				}
    			?>
    			
    			</table>
    		</ul>
    		
    		<br /><br />
    		<a href="ece4.html" class="list">Electronics and Communication Engineering</a>
    		
    		<ul class="ls" id="ece4">
    			<table>
    			<?php
    			//include 'dbcon.php';
    			$q = "SELECT * FROM stud WHERE branch='ECE' AND year=4;";
				$result = mysqli_query($conn,$q);
    			while($row = mysqli_fetch_row($result)) {
    				echo "<tr>";
					echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
    				<input type='hidden' name='MAX_FILE_SIZE' value='3000000' />";
					echo "<th><li>$row[0]</th>" . "<th>$row[1]</th>" . "<th><input type='hidden' name='reg' value=$row[0]></th>
					<th><input type='submit' value='Upload'></form></th><th><form action='download.php' method='post'><input type='hidden' name='reg1' value='$row[0]'><input type='submit' value='Download'></th></li>";
					echo "</form>";
					echo "</tr>";
				}
    			?>
    			</table>
    		</ul>
    		
    		<br /><br />
    		<a href="eee4.html" class="list">Electrical and Electronics Engineering</a>
    		
    		<ul class="ls" id="eee4">
    			<table>
    			<?php
    			//include 'dbcon.php';
    			$q = "SELECT * FROM stud WHERE branch='EEE' AND year=4;";
				$result = mysqli_query($conn,$q);
    			while($row = mysqli_fetch_row($result)) {
    				echo "<tr>";
					echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
    				<input type='hidden' name='MAX_FILE_SIZE' value='3000000' />";
					echo "<th><li>$row[0]</th>" . "<th>$row[1]</th>" . "<th><input type='hidden' name='reg' value=$row[0]></th>
					<th><input type='submit' value='Upload'></form></th><th><form action='download.php' method='post'><input type='hidden' name='reg1' value='$row[0]'><input type='submit' value='Download'></th></li>";
					echo "</form>";
					echo "</tr>";
				}
    			?>
    			</table>
    		</ul>
    		
    	</div>
    	<div class="cv3">
    		<h3 align="center">3rd Year</h3>
    		<a href="cse3.html" class="list">Computer Science and Engineering</a>
    		<ul class="ls" id="cse3">
    			<table>
    			<?php
    			//include 'dbcon.php';
    			$q = "SELECT * FROM stud WHERE branch='CSE' AND year=3;";
				$result = mysqli_query($conn,$q);
    			while($row = mysqli_fetch_row($result)) {
    				echo "<tr>";
					echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
    				<input type='hidden' name='MAX_FILE_SIZE' value='3000000' />";
					echo "<th><li>$row[0]</th>" . "<th>$row[1]</th>" . "<th><input type='hidden' name='reg' value=$row[0]></th>
					<th><input type='submit' value='Upload'></form></th><th><form action='download.php' method='post'><input type='hidden' name='reg1' value='$row[0]'><input type='submit' value='Download'></th></li>";
					echo "</form>";
					echo "</tr>";
				}
    			?>
    			</table>
    		</ul>
    		<br /><br />
    		<a href="ece3.html" class="list">Electronics and Communication Engineering</a>
    		<ul class="ls" id="ece3">
    			<table>
    			<?php
    			//include 'dbcon.php';
    			$q = "SELECT * FROM stud WHERE branch='ECE' AND year=3;";
				$result = mysqli_query($conn,$q);
    			while($row = mysqli_fetch_row($result)) {
    				echo "<tr>";
					echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
    				<input type='hidden' name='MAX_FILE_SIZE' value='3000000' />";
					echo "<th><li>$row[0]</th>" . "<th>$row[1]</th>" . "<th><input type='hidden' name='reg' value=$row[0]></th>
					<th><input type='submit' value='Upload'></form></th><th><form action='download.php' method='post'><input type='hidden' name='reg1' value='$row[0]'><input type='submit' value='Download'></th></li>";
					echo "</form>";
					echo "</tr>";
				}
    			?>
    			</table>
    		</ul>
    		<br /><br  />
    		<a href="eee3.html" class="list">Electrical and Electronics Engineering</a>
    		<ul class="ls" id="eee3">
    			<table>
    			<?php
    			//include 'dbcon.php';
    			$q = "SELECT * FROM stud WHERE branch='EEE' AND year=3;";
				$result = mysqli_query($conn,$q);
    			while($row = mysqli_fetch_row($result)) {
    				echo "<tr>";
					echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
    				<input type='hidden' name='MAX_FILE_SIZE' value='3000000' />";
					echo "<th><li>$row[0]</th>" . "<th>$row[1]</th>" . "<th><input type='hidden' name='reg' value=$row[0]></th>
					<th><input type='submit' value='Upload'></form></th><th><form action='download.php' method='post'><input type='hidden' name='reg1' value='$row[0]'><input type='submit' value='Download'></th></li>";
					echo "</form>";
					echo "</tr>";
				}
    			?>
    			</table>
    		
    		</ul>
    	</div>
    </article>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>');</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  <?php
  	include 'dbclo.php';
  ?>
</body>
</html>
