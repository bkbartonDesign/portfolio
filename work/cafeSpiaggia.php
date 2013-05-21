<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Cafe Spiaggia - BKBARTON Design portfolio</title>
	<meta name="description" content="Web app Development and Design for Cafe Spiaggia">
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
				<img src="../img/projects/cafeSpiaggia/csHero.jpg"" class="scale-with-grid" alt="project hero image"/>
				<div class="heroContainer deskTab"><h1 class="white heroHeader text-shadow">CAFE SPIAGGIA</h1></div>
		</div>
		<div class="projDesc litePinkBg">
			<div class="container">
				<div class="twelve columns offset-by-two">
					<h1 class="black phone">CAFE SPIAGGIA</h1>				
					<p>
						In 2013, Cafe Spiaggia participated in Chicago’s Restaurant Week and
						asked me for advice on how they could continue to engage with diners,
						post meal. My solution was to build a smartphone friendly webapp to
						collect diner’s contact information and allow the diner to follow the
						restaurant’s associated twitter handles. The webapp was made accessible
						through a QR code conveniently printed on the menu.
					</p>
					<p>
						The response was amazing and the campaign collected over 240 emails.
						Immediately following Restaurant Week, the restaurant sent out a
						generous special promotion and reported a high return rate for these
						customers. 
					</p>
				</div>
			</div>
		</div>
		<div class="projExamples">
			<div class="imgCluster blackBg">	
				<div class="container">
					<img src="../img/projects/cafeSpiaggia/csColor_Type_Logo2.png" class="scale-with-grid" alt="Font and Color Palette" />
				</div>
			</div>
		</div>

		<div class="testimonial whiteBg">
			<div class="container">
				<div class="twelve columns offset-by-two">
					<p>	
						<span class="italic">
						“Because of Brian, we were able to gather emails from 240 guests!
						Brian’s ability to understand what motivates our guests to return is a
						way he exemplified the qualities of a restaurateur. His creativity and
						innovation led to our guests feeling connected to Cafe Spiaggia in a
						special way.”</span> - Kristina Mandac,  Manager Cafe Spiaggia
					</p>
				</div>				
			</div>
		</div>
		
		<div class="summary container">
			<div class="one-third column">
				<small>YEAR</small>
				<p>2013</p>
			</div>	
			<div class="one-third column">
				<small>ROLE</small>
				<p>Front End & Design</p>	
			</div>	
			<div class="one-third column add-top">
				<span class="btnUnavail">SITE UNAVAILABLE</span>
			</div>	
		</div>
		<hr/>
		<div class="workGrid blackBgTwo" id="workGrid">
			<?php include ('../inc/sub.workGrid.php');?>
		</div>
		<div class="clearer"></div>
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