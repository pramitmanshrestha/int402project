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

  <title>Letter of Recommendation</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <!--<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/lor.css" />
-->
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <!--<script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/list.js"></script>
-->
  <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/justified-nav.css" rel="stylesheet"
<!-- Documentation extras -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="apple-touch-icon-precomposed" size="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
                               <link rel="shortcut icon" href="assets/ico/favicon.ico">

<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-146052-10']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>

<body>


    <header>
    	<!--<img src="img/logo1.jpg"  width="110" height="110" class="logo" alt=""/>-->
		<h1 align="center">National Institute of Technology Nagaland</h1>
		<h2 align="center">Chumukedima, Dimapur</h2>
		<h2 align="center">Training and Placement cell</h2><br />
    </header>
	<nav class="navbar navbar-default">
	<ul class="nav nav-tabs nav-justified">
  		<li><a href="menu.html">CV's</a></li>
  		<li class="active"><a>Letter of Recomendation</a></li>
  		<li><a href="training.php">Forwarding Letter</a></li>
  		<li><a href="#">Student Database</a></li>
  		<li><a href="#">Notice</a></li>
	</ul>
	</nav>
	<div class="container">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-5">
						<h2 class="form-lor-heading">Letter of Recomendation</h2>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-4 col-lg-5">
						<input type="text" class="form-control input-lg" placeholder="Registration Number" maxlength="10" minlength="10" required autofocus/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-4 col-lg-5">
						<input type="text" class="form-control input-lg" placeholder="Name" required autofocus/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-4 col-lg-2">
						<select class="form-control input-lg" name="yr" required autofocus>
							<option value="0">Year</option>
			    			<option value="1">First</option>
			    			<option value="2">Second</option>
			    			<option value="3">Third</option>
			    			<option value="4">Fourth</option>
						</select>
					</div>
					<div class="col-lg-3">
						<select class="form-control input-lg" name="br" required autofocus>
							<option value="0">Branch</option>
			    			<option value="1">Computer Science and Engineering</option>
			    			<option value="2">Electronics and Communication Engineering</option>
			    			<option value="3">Electrical and Electronics Engineering</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-4 col-lg-5">
						<input type="text" class="form-control input-lg" name="cname" placeholder="Company Name" required autofocus/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-4 col-lg-5">
						<input type="text" class="form-control input-lg" name="dur" placeholder="Duration" required autofocus/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-offset-4 col-lg-5">
						<textarea class="form-control input-lg" name="misc" placeholder="Misc" ></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class=" col-lg-offset-4 col-lg-2">
						<button class="btn btn-lg btn-primary btn-block" type="reset">Reset</button>
					</div>
					<div class="col-lg-offset-1 col-lg-2">
						<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
						
					</div>
				</div>
			</div>
		</form>
		
	</div>
	
	
  
    <!--
    <article>
    	<h3 align="center">Letter of Recommendation</h3>
    	
    	<form action="" method="get">
    			<div class="input-group input-group-lg"><input type="text" class="form-control" name="rgn" id="rgn" placeholder="Registration no" minlength="10" maxlength="10" /></div><br />
    			<div class="input-group input-group-lg"><input type="text" class="form-control" id="name" name="name" placeholder="Name" /></div><br />
    			<select name="yr">
    				<option value="0">Year</option>
    				<option value="1">First</option>
    				<option value="2">Second</option>
    				<option value="3">Third</option>
    				<option value="4">Fourth</option>
    			</select>
    			<select name="br">
    				<option value="0">Branch</option>
    				<option value="1">Computer Science and Engineering</option>
    				<option value="2">Electronics and Communication Engineering</option>
    				<option value="3">Electrical and Electronics Engineering</option>
    			</select>
    			<div class="input-group input-group-lg"><input type="text" class="form-control" id="cname" name="cnam" placeholder="Company Name" /></div><br />
    			<div class="input-group input-group-lg"><input type="text" class="form-control" id="dr" name="durn" placeholder="Duration" /></div><br />
    			<div class="input-group input-group-lg"><textarea name="misc" class="form-control" id="misc" placeholder="Misc" rows="5" cols="50" spellcheck:"true" ></textarea></div>
    			<div class="input-group input-group-lg">
    			<button type="submit">Submit</button>
    			<button type="reset" >Reset</button></div>	
   		 	
   		 </form>
    </article>
    -->
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
  
</body>
</html>
