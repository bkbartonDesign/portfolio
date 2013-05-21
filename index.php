<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Web Portfolio for BKBARTON Design - Brian K. Barton</title>
	<meta name="description" content="The web portfolio for Brian K. Barton, a Chicago based Web Developer and Graphic Designer.">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css"><!--[if IE]> <style type="text/css"> .text-shadow { FILTER: DropShadow(Color=#000, OffX=1px, OffY=1px, Positive=1); } </style> <![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- JavaScript
	================================================== -->
	<!-- TypeKit -->
	<script type="text/javascript" src="//use.typekit.net/hlt7ndg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	
	<script>		
		$(document).ready(function(){
			$("<div class='overlay'></div>").insertBefore(".headerWrapper").fadeOut(1000);

		})
	</script>
	
</head>
<body>

	<header class="headerWrapper">
		<div class="navWrapper">
			<div class="container">
 				<nav role="navigation" class="navigation sixteen columns">
 					<?php include ("./inc/inc.navIndex.php"); ?> 
 				</nav>
 			</div>
 		</div>
	</header>
	
	<div role="main" class="main blackBgTwo">
		<div class="introduction litePinkBg">
 			<div class="container">
				<div class="introText ten column">
					<h1>
						<span class="italic">
							BKBarton Design Portfolio.
						</span><br/>
							I am a web developer & graphic designer, working 
							in Humboldt Park - Chicago, IL.<br/>
							Look below for my recent projects.
					</h1>
				</div>	
			</div>	
		</div>
		<?php include ("./inc/workGrid.php") ?>
	</div>
	<footer  class="footer">
		<?php include ("./inc/inc.footer.php")?>
	</footer>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<script>
		$(document).ready(function() {
			firstScrollMain();
		});
	</script>	
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-40745935-1', 'bkbarton.com');
		  ga('send', 'pageview');

	</script>	
</body>
</html>