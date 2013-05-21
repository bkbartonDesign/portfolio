<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>CenterPointe Wealth - BKBARTON Design portfolio</title>
	<meta name="description" content="Web Development and Design for CenterPointe Wealth Management">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/layout.css"><!--[if IE]> <style type="text/css"> .text-shadow { FILTER: DropShadow(Color=#000, OffX=1px, OffY=1px, Positive=1); } </style> <![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../favicon.ico">
	
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
		<div class="navWrapperSub">
			<div class="container">
 				<nav role="navigation" class="navigation sixteen columns">
 					<?php include ("../inc/inc.navSub.php"); ?> 
 				</nav>
 			</div>
 		</div>
	</header>
	
	<div role="main" class="main">
		<div class="hero">
				<img src="../img/projects/centerpointe/cpHero.jpg" class="scale-with-grid" alt="project hero image"/>
				<div class="heroContainer deskTab"><h1 class="white heroHeader text-shadow">CENTERPOINTE WEALTH MANAGEMENT</h1></div>
		</div>
		<div class="projDesc litePinkBg">
			<div class="container">
				<div class="twelve columns offset-by-two">
					<h1 class="black phone">CENTERPOINTE WEALTH</h1>					
					<p>
						CenterPointe Wealth Management is a team of Wealth Advisors, who offer
						financial advising, estate planning and retirement services.
						CenterPointe wanted a site refresh that showcased a  clean
						professionalism and solid craftsmanship.
					</p>
					<p>
						My solution took their strong branding and restructured their message
						delivery by concentrating their message into easily digestible pages. I
						also commisioned a talented photographer, Ryan Hendrix to take portraits of
						the CenterPointe team. 
<!-- 
						By introducing sound SEO techniques, the search
						engine visibility and organic traffic increased dramatically.
 -->
					</p>
				</div>
			</div>
		</div>
		<div class="projExamples">
			<div class="imgCluster liteGreyBg">	
				<div class="container">
					<img src="../img/projects/centerpointe/cpColor.png" class="scale-with-grid" alt="Color Palette" />
					<img src="../img/projects/centerpointe/cpType.png" class="scale-with-grid" alt="Font Examples" />
				</div>
			</div>
			<div class="imgCluster litePinkBg">	
				<div class="container">
					<img src="../img/projects/centerpointe/cpwmCluster.jpg" class="scale-with-grid" alt="CenterPointe Wealth web examples" />
			
				</div>
			
			</div>		
		</div>
		<hr class="remove-bottom" />
		<div class="summary container" >
			
			<div class="one-third column">
				<small>YEAR</small>
				<p>2013</p>
			</div>	
			<div class="one-third column">
				<small>ROLE</small>
				<p>Design & Front End</p>	
			</div>	
			<div class="one-third column add-top">
				<a class="btn" href="http://www.centerpointewealth.com" target="_blank">VISIT SITE</a>
			</div>	
		</div>

		<div class="workGrid blackBgTwo" id="workGrid">
			<?php include ('../inc/sub.workGrid.php');?>
		</div>
		
	</div>
	<footer class="footer">
		<?php include ("../inc/inc.footer.sub.php")?>
	</footer>
	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/script.js"></script>


	<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40745935-1', 'bkbarton.com');
  ga('send', 'pageview');

	</script>	
	<script>	
		/*		
				subFirstScroll();
				subNavInteractions();
		*/

	</script>
</body>
</html>