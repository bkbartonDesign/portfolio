/* Author:
Brian Barton
*/

		
		$(".noaccess").click(function(e){e.preventDefault();})

// Removes bkbarton design, trades nav for menu, shortens headerWrapper (nav)
// FOR MAIN PAGES (	INDEX, CONTACT, ABOUT )	

			var scrolled = false;
			var cssPhone = $(".phone").css("display");
			console.log(cssPhone);
			
			function firstScrollMain(){
		
				if ( scrolled == false && cssPhone =="none" )	
					{	
						$(window).one(" scroll",function(){
					
							$(".slideTxt").slideUp(300);
							$(".navWrapper").animate({"padding-bottom":55});
							//navSlideOut();
							//menuSlideIn();
							//$("img.logoTop").attr("src","./img/newNav/logoPlus.png");
							scrolled = true;
							menuHidden = false;
							navHeight = $(".headerWrapper").height();
						})
					}
				else if ( cssPhone == "block" ){ $(".slideTxt").css("display","none");$(".navWrapper").animate({"padding-bottom":55}); }
				else { alert("error"); return false; }
			}


/*			
/*	SCROLL TO 
/*		
/*	If the work grid is on the current page, the WORK btn in nav will make viewport
/*  scroll to the work grid. If work grid is not on current page ( ABOUT,CONTACT )
/*	the link will take user back to home page.
/*
*/			
			$("a.work").on("click",function(e){
				findWork(e)
			})	
				
			function findWork(e){
				if ($("ul.werk").length>0) //Checks to see if the ul.werk exists
					{ 
						e.preventDefault(); // prevents a href
						$.scrollTo("ul.werk",
							{
								duration: 1000,
							 	easing: "easeInCubic" 
							 }); // calls $.scrollTo plugin
					}
				else {console.log("contact page");}
			}


/*
/* RESPONSIVE HELPER
*/


			$width = $(document).width();
			if ($width>1024)
				console.log("large screen. range:x<>1024. width = "+$width);
			else if ($width>960)
				console.log("standard screen. range:1024<>960. width = "+$width)
			else if ($width>768)
				console.log("tablet portrait to standard 960. range:960<>768.  width = "+$width)
			else if ($width>480)
				console.log("mobile landscape to tablet portrait. range:768<>480. width = "+$width)
			else if ($width<480)
				console.log("mobile portrait. range:480<>0. width = "+$width)	


/*
/* SVG SUPPORT 
*/

			function changeSvg(){
				var src =  $('.logoBlock img').attr('src');
				var newSrc = src.replace('.svg','.png');
				$('.logoBlock img').attr('src',newSrc);
			// 	console.log(newSrc);
			}
	
	
			// Test functionality //
			// changeSvg();

			if (!Modernizr.svg) {
			  changeSvg();
			}
			else console.log("svg support");



/*			
/*	MAIL SCRIPT
*/			
		$(".contactForm input[type=submit]").click(function(event) {
				
				event.preventDefault();					

				var formData = {
					name : $.trim($("#name").val()),
					email : $.trim($("#email").val()),
					message : $.trim($("#message").val()),
					is_JSON : true
				};
	
				var allThere = 0;
				var checkData = formData;

				// Checks to see if data has been entered into form fields.
				$.each(checkData, function(key,val){testForm(key,val);});
	
				// function takes kay and value of formData Obj...
				function testForm(key, val){
		
					// tests the value of each key to see if anything is present	
					if (val.length == 0 && allThere < 4)
							// if nothing is present, error message appears.
						{ $("."+key+" .error").css("visibility","visible"); }
					// if value is present or is_JSON is true, proceed.
					else if (val.length > 0 || val == true && allThere < 4 )
						{ 
							// if a input's error message was previously triggered and
							// and needs to be cleared...
							$("."+key+" .error").css("visibility","hidden");
							/*console.log("key: "+key+" | val: "+val); // test key and val // */
							// advance iterator.
							allThere++;
						}	
				}
	
				// If all fields have been fileed out...
				if (allThere == 4)
					{	
						ajaxMail(formData); // Fires $.ajax with formData object
					}
				else return;

		
				function ajaxMail(formData){
					console.log("**FIRED AJAXMAIL**")
					$.ajax({
							type:"POST",
							url:"contactScript.php",
							data:formData,
							success:function(){
								console.log(formData);
								$("#contactForm, #specialMessage").fadeOut(1000,
									function(){$("#specialMessage").html("Message Sent").fadeIn(100);})
							}

						})
					}
				
			});

	

/*

			var menuInit = false;
			var menuHidden = true;
			var subMenuHidden = false;

			var navHeight = 0;


			
			/* Function Calls */
			
			// firstScrollMain();
			// firstScrollSub();
			// mainNavInteractions();
			// subNavInteractions();
		
			/* EVENT LISTENERS */
			// NAVI
/*			function mainNavInteractions(){
				$(".logoTop, .menuForNav").on("click", function(){
						console.log("mainNavInteractions");
						
						if (menuHidden == true)
							{
								navSlideOut();
								$("img.logoTop").attr("src","./img/newNav/logoPlus.png");
								menuHidden = false;
							
							}	
						else if (menuHidden == false)
							{
								menuSlideOut();
								$("img.logoTop").attr("src","./img/newNav/logoMinus.png");
								menuHidden = true;
						
							}
					
					});
			}
			
			var nav = ".subNavLinks";
			var menu = ".subMenuForNav"
			
			function subNavInteractions(menu, nav){
				$(".logoTop, .subMenuForNav").on("click", function(){
						if (subMenuHidden == false)
							{
								subMenuSlideOut(menu, nav);
								$("img.logoTop").attr("src","../img/newNav/logoMinus.png");
								subMenuHidden = true;
							}	
						else if (subMenuHidden == true)
							{
						
								subNavSlideOut(menu, nav);
								$("img.logoTop").attr("src","../img/newNav/logoPlus.png");
								subMenuHidden = false;
							}
					
					console.log("subNavInteractions");
					console.log(subMenuHidden);
		
					
					});
			}
*/	
		/* FUNCTIONS */
		
		
		// FOR SUB PAGES ( all project pages )	
/*			function subFirstScroll(){
		
				if (scrolled == false)	
					{	
						$(window).one(" scroll",function(){
					
							//$(".slideTxt").slideUp(300);
							//$(".navWrapper").animate({"padding-bottom":60});
							subNavSlideOut();
							subMenuSlideIn();
							$("img.logoTop").attr("src","../img/newNav/logoPlus.png");
							scrolled = true;
							menuHidden = true;
							navHeight = $(".headerWrapper").height();
						})
					} 
				else { alert("error"); return false; }
			}
		
			function menuSlideOut()
				{

						$(".menuForNav").animate(
													{left:100, opacity:0 },
													{duration:100, complete:function()
																		{ 
																	
																			$(".menuForNav").css("display","none");
																			navSlideIn()
																		}
												 }
												)
						
						
			}


			function navSlideOut()
				{
				
					$(".navLinks").animate(
											{ left:100, opacity:0 },
											{ duration:100, complete:function()
																	{
																	
																		$(".navLinks").css("display","none");
																		  menuSlideIn() 
																	} 
											 }
										 ) 
				}
			
						
			function navSlideIn(){ $(".navLinks").css("display","inline").animate({left:170, opacity:1 },{duration:100}); }				
			
			function menuSlideIn(){$(".menuForNav").css("display","inline").animate({left:130, opacity:1 },{duration:100})}
			
			
/* SUB NAV */			
/*			
			function subMenuSlideOut(menu, nav)
				{
							
						$(menu).animate(
													{left:100, opacity:0 },
													{duration:100, complete:function()
																		{ 
																	
																			$(menu).css("display","none");
																			subNavSlideIn(nav);
																		}
												 }
												)
						
						
			}


			function subNavSlideOut(menu, nav)
				{
					
					$(nav).animate(
											{ left:100, opacity:0 },
											{ duration:100, complete:function()
																	{
																	
																		$(nav).css("display","none");
																		  subMenuSlideIn(menu); 
																	} 
											 }
										 ) 
				}
			
						
			function subNavSlideIn(nav){ $(nav).css("display","inline").animate({left:170, opacity:1 },{duration:100}); }				
			
			function subMenuSlideIn(menu){$(menu).css("display","inline").animate({left:130, opacity:1 },{duration:100})}
					
		
				
						
 				
*/				
/*			
/*	NAVIGATION V2.0
/*		
/*	NAV bar changes color based on the background of current div.
/*  For the future
/*	
/*
*/
/*
	$(".werk").waypoint(function(navHeight){changeColor()},{offset:70});

	var inWerkSection = false;
	function changeColor()
		{
			if (inWerkSection == false)
			{
				$(".headerWrapper").css("backgroundColor","#231F20");
				$(".navLinks, .menuForNav").css("color","#fff");
				inWerkSection = true;
				console.log(inWerkSection);
			}
			else if (inWerkSection == true)
			{
				$(".headerWrapper").css("backgroundColor","#fff");
				$(".navLinks, .menuForNav").css("color","#000");
				inWerkSection = false;
				console.log(inWerkSection);
			}
		}
*/