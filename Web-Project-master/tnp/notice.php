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
		<a href="cv.php"><button id="cv">CV's</button></a>
		<a href="lor.php"><button id="lor" >Letter of Recomendation</button></a>
		<a href="training.php"><button id="fl">Forwarding Letter</button></a>
		<a href=""><button id="sd">Student Database</button></a>
		<a href="notice.php"><button id="notice">Notice</button></a>
		<a href="index.html"><button id="lo">Logout</button></a>
		
    </nav>
    
		<h1>Upload Notice</h1>
		 <form enctype="multipart/form-data" action="upno.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
		Subject :<input type="text" name="sub" />   
		<input type="hidden" name="s" value="1" />
       <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Name of input element determines name in $_FILES array -->
     File: <input name="upload" type="file" />
    <input type="submit" value="Send File" />
    <br /><br /><br />
    
    <?php
   		include 'dbcon.php';
   		$q = "SELECT * FROM `not` ORDER BY id DESC;";
		$result = mysqli_query($conn,$q);
    	while($row = mysqli_fetch_row($result)) {
    		echo $row[1]  . "<br/>";
		}
     ?>
    
    
	</body>
</html>
