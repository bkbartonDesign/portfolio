<?php
ob_start();
session_start();
$_SESSION['error'];
$_SESSION['num'];
//var_dump($_SESSION['error']);
//var_dump($_SESSION['num']);
function success(){header("location: http://www.google.com");}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact BKBARTON Design</title>
	<meta name="description" content="Contact and About page for BKBARTON Design.">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<!--[if IE]> <style type="text/css"> .text-shadow { FILTER: DropShadow(Color=#000, OffX=1px, OffY=1px, Positive=1); } </style> <![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="./favicon.ico">
	
	<!-- JavaScript
	================================================== -->
	
	<!-- TypeKit -->
	<script type="text/javascript" src="//use.typekit.net/hlt7ndg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk0mv0YlARGEeR9I6-jMXiBDIiJ1JFXzs&sensor=false">
    </script>
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	
	<script>		
		$(document).ready(function(){
			$("<div class='overlay'></div>").insertBefore(".headerWrapper").fadeOut(1000);

		})
	</script>
    
	
	<script type="text/javascript">
	var map;
	var humboldt = new google.maps.LatLng(41.9045, -87.7017);
	var bkbDe = new google.maps.LatLng(41.8988,-87.7019);
	
	var MY_MAPTYPE_ID = 'custom_style';
	
      function initialize() {
      		var featureOpts =[
      		{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":{"color":"#ffffff"}},{"featureType":"poi.place_of_worship","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.neighborhood","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"off"},{"color":"#efc6b4"},{"weight":"0.1"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#193148"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"on"},{"color":"#efc6b4"},]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#e6e7e8"},]},{"featureType":"road.local","stylers":[{"color":"#fcf3ef"}]},{"featureType":"water","stylers":[{"color":"#e6e7e8" } ] } 
      		];      		
			var mapOptions = {
			  center: humboldt,
			  disableDefaultUI: true,
			  scrollwheel:false,
			  zoom: 15,
			  draggable:false,
			  mapTypeControlOptions: {
			      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    			},
			   mapTypeId: MY_MAPTYPE_ID
			  };

			map = new google.maps.Map(document.getElementById("map-canvas"),
				mapOptions);
				
			var styledMapOptions = {
					name: 'Custom Style'
				  };

				  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

				  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
				


 		    var home = new google.maps.Marker({
				  position: bkbDe,
				  map: map,
				  //icon: image
				  title:"BKBARTON DESIGNS"
  			});
      	}
      google.maps.event.addDomListener(window, 'load', initialize);
      
    </script>
	<style>
		
	</style>

</head>
<body onload="initialize();">

	<header role="header" class="headerWrapper" class="contact">
		<div class="navWrapperContact">
			<div class="container">
 				<nav role="navigation" class="navigation sixteen columns">
 					<?php include ("./inc/inc.navContact.php"); ?> 
 				</nav>
 			</div>
 		</div>
	</header>
	
	<div role="main" class="main">
		<div id="map-canvas">
						
		</div>
		<div class="mapText deskTab text-shadow">
			<h1 class="white">HUMBOLDT PARK</h1>
			<h1 class="white ">CHICAGO, IL</h1>
			</div>
		<div class="contact top container">
		
			<div class="self one-third column">
				<img src="./img/assets/contactBkbImage.png" alt="bkbarton image" class="scale-with-grid"/>
			</div>

			<div class="personalStatement nine columns">
					
					<h2 class="italic" style="line-height:1.2em; padding-bottom:0.25em;">
						My name is Brian Barton.<br/>You may call me BK, if you like.
					</h2>
					<p>					
						I am a web developer with formal training in graphic design.
						My desire is to collaborate with intelligent individuals, 
						to produce useful products and to craft meaningful user experiences. 
					</p>
					<p>	
						<strong class="darkGrey">Skills:</strong> HTML5, CSS3, JavaScript & jQuery, PHP, mySQL, RESTful APIs, 
						Creating User Interfaces, Photoshop, Illustrator, InDesign, Quark
					</p>
					<p>
						<strong class="darkGrey">Diving head first into:</strong> GitHub, backbone.js, underscore.js, phoneGap
					</p>
					<p> 
						If you would like to speak to me about a project or just want to say "hello", 
						please leave me a message below. I look forward to hearing from you.
					</p>
					<p class="green italic">I am actively seeking employment.</p>
				
				<div class="contactInfo mobile">
					<div class="three columns">
						<small>EMAIL</small>
						<p>bkbarton@bkbarton.com</p>
					</div>	
					<div class="three columns">
						<small>PHONE</small>
						<p>1(312)952-4499</p>	
					</div>	
				</div>
				
			</div>
		</div>
		<div class="businessInfo container">
			<div class="contactInfo one-third column">
				<small class="blue standard">EMAIL</small>
				<p class="black standard">bkbarton@bkbarton.com</p>

				<small class="blue standard">PHONE</small>
				<p class="black standard">1(312)952-4499</p>

				<ul class="standard">
					<small class="blue standard">NETWORK</small>
					<a href="https://twitter.com/bkbarton" target="_blank">
						<li>Twitter</li>
					</a>
					<a href="http://www.linkedin.com/pub/brian-barton/61/786/67" target="_blank">
						<li>LinkedIn</li>
					</a>
			<!-- 
					<a href="">
						<li>Behance</li>
					</a>
			 -->

				</ul>
				<ul class="standard">
					<small>Affiliates</small>
					<a href="http://chicago.aiga.org/" target="_blank">
						<li>
							AIGA Chicago<br/>
						</li>
					</a>
					<a href="http://www.meetup.com/js-chi/" target="_blank">
						<li>
							js.chi();<br/>
						</li>
					</a>		
					<a href="http://www.meetup.com/chicago-html5/" target="_blank">
						<li>
							CHIHTML5<br/>
						</li>
					</a>

				</ul>	
			</div>		
			<div class="contactForm two-thirds column standard mobile">
				<h4 id="specialMessage" class="pink">
					<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
				</h4>
				<form id="contactForm" name="contactForm" method="post" action="">
					
					<div class="name">
						<label for="name">Name <span class="error">Please enter name.</span></label>
						<input type="text" name="name" id="name" required placeholder=""
							value="<?php if (isset($_POST['name'])) echo $_POST['name']; else echo ""; ?>"></input>
						
					</div>
					
					<div class="email">
						<label for="email">Email <span class="error ">Please enter email.</span></label>
						<input type="email" name="email" id="email" required placeholder=""
							value="<?php if (isset($_POST['email'])) echo $_POST['email']; else echo ""; ?>"></input>
						
					</div>
					
					<div class="message">										
						<label for="message">Message <span class="error">Leave a message.</span></label>
						<textarea name="message" id="message" repuired placeholder=""><?php if (isset($_POST['message'])) echo trim($_POST['message']); else echo ""; ?></textarea>
						
					</div>
					
					<input type="submit" class="btn" name="submit" id="sumbit" value="SEND MESSAGE" ></input>
				</form>
			</div>
		</div>
		<div class="workGrid blackBgTwo">	
			<?php include ("./inc/workGrid.php") ?>
		</div>
	<footer  class="footer">
		<?php include("./inc/inc.footer.php")?>
	</footer>

	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<script src="./js/libs/scrollto.js"></script>
	<script>
		$(document).ready(function(){
						
			
		});
	</script>
	<?php
		if (!$_POST){$_SESSION['error'] = ""; $_SESSION['num']=-1;}
		else if (!isset($_POST['submit'])){$_SESSION['error'] = ""; $_SESSION['num']=0;}
		else if (isset($_POST['submit']) && $_POST['submit']="send" && $_POST['name']!="" && $_POST['email']!="" && $_POST['message']!="")
			{	
				if (empty($_SESSION['num']) || $_SESSION['num'] = 0) $_SESSION['num']=1; else $_SESSION['num']++;
				
				$_SESSION['error'] = "submitted";
				include('contactScript.php');				
				echo "sumbitted"; 
			}	
		else if (isset($_POST['submit']) && $_POST['submit']="send" && empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
			{ 
				if (empty($_SESSION['num'])) $_SESSION['num']=1; else $_SESSION['num']++;
				$_SESSION['error'] = "Please provide information for all fields below"; 
				
			}
	?>
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