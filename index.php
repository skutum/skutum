<!DOCTYPE html>
<html>
	<head>
		<meta name="google-site-verification" content="D3hwIu2mQR6_BEIuMSyHEvJ6DYhch8bSAabqYi5YRNc" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>SKUTUM NEW -Media Starts Here</title>
		<link rel="stylesheet" rev="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css" type="text/css" media="all">
  		<link rel="stylesheet" href="css/style.css" />
  		<link rel="stylesheet" href="js/jquery.ferro.ferroMenu.css" />
  		<link rel="stylesheet" href="css/main.css" />
  		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" />
  		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.ferro.ferroMenu-1.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.transit.min.js" type="text/javascript"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		      
			ga('create', 'UA-46643405-1', 'skutum.com');
			ga('send', 'pageview');
		      
	      </script>
		<script type="text/javascript">
			var currentIndex = 0;
			var currentId = "aboutUs";
			var dragStarted = false;
			$(document).ready(function() {
				$(document).on("menuready",function(event){
					$("html,body").css("background","#FFC415");
					console.log(event);
				});
				
				$(document).on("menudrag",function(event){
					if(!dragStarted){
						dragStarted = true;
						$("#overlay").show();
						$("#overlay").transition({
							opacity : 1
						},300);
					}
				});
				
				$(document).on("menudragend",function(event){
					
					var curr = eval("colors."+currentId);
					$("#overlay").transition({
						opacity : 0
					},300,function(){
						$("#overlay").hide();
						dragStarted = false;
					});
					setTimeout(function(){
						$("#ferromenu-controller,#nav li a").css("color",curr.background);
            		},250);
				});
				
				$("#nav").ferroMenu({
					position 	: "right-top",
					delay 		: 50,
					rotation 	: 720,
					margin		: 7,
					opened		: true
				});
				
				
			});
			
			var colors = {
					"aboutUs" : {
						"background" : "#FAC70A",
						"index" : 0
					},
					"videography" : {
						"background" : "#53D93A",
						"index" : 1
					},
					"freeStockVideoFootage" : {
						"background" : "#FF892B",
						"index" : 2
					},
					"soundEngineering" : {
						"background" : "#E2273C",
						"index" : 3
					},
					"websiteDevelopment" : {
						"background" : "#3498db",
						"index" : 4
					},
					"contactUs" : {
						"background" : "#34495e",
						"index" : 5
					}
					
			};
			
			function goTo(id){
				var obj = eval("colors."+id);
				
				$("body").css("background",obj.background);
				$("#ferromenu-controller,#nav li a").css("color",obj.background);
				if(obj.index > currentIndex){
					$(".active").addClass("off");
					$(".active").transition({
						scale : 0.1,
						opacity : 0,
						zIndex : 0
					},600);
					
					$("#"+currentId).removeClass("active");
					
					$("#"+id).addClass("active");
					$("section").addClass("hideScroll");
					$("#"+id).transition({
						scale 	: 3,
						y		: 0
					},0,function(){
						$("#"+id).removeClass("off");
						$("#"+id).transition({
							scale : 1,
							opacity : 1,
							zIndex : 2
						},600,function(){
							$("section").removeClass("hideScroll");
						});
					});
				}else if(obj.index < currentIndex){
					var oldElement = $(".active");
					$(".active").addClass("off");
					$(".active").transition({
						scale : 3,
						opacity : 0,
						zIndex : 0
					},600);
					$("#"+currentId).removeClass("active");
					
					
					$("#"+id).addClass("active");
					$("section").addClass("hideScroll");
					
					$("#"+id).transition({
						scale : 0.1,
						y : 0
					},0,function(){
						$("#"+id).removeClass("off");
						$("#"+id).transition({
							scale : 1,
							opacity : 1,
							zIndex : 2
						},600,function(){
							$(oldElement).transition({
								y : -2000
							},100,function(){
								$("section").removeClass("hideScroll");	
							});
							
						});
					});
				}
				currentIndex = obj.index;
				currentId = id;
				
			}
		</script>
	</head>
	<body>
		<ul id="nav">
			<li><a href="javascript:goTo('aboutUs');"><i class="fa fa-home"></i></a></li>
			<li><a href="javascript:goTo('videography');"><i class="fa fa-video-camera"></i></a></li>
			<li><a href="javascript:goTo('freeStockVideoFootage');"><i class="fa fa-film"></i></a></li>
			<li><a href="javascript:goTo('soundEngineering');"><i class="fa fa-microphone"></i></a></li>
			<li><a href="javascript:goTo('websiteDevelopment');"><i class="fa fa-code"></i></a></li>
			<li><a href="javascript:goTo('contactUs');"><i class="fa fa-comments"></i></a></li>
		</ul>
		<section id="content">
			<div id="overlay"></div>
			<div class="header">
				<a href="http://skutum.com"><h1>SKUTUM</h1>Media Starts Here</a>
			</div>
			<article id="aboutUs" class="active">
				<i class="fa fa-home"></i>
				<h1>About Skutum</h1>
				<div class="cnt">
					Skutum (sc-ooo-tum) is owned and operated by Tyler Robinson who is a "Jack of All Trades" master of a few and an attempter of many others.
					<br><br>
					Services we offer:
					<br><br>
					<ul class="servicesList">
						<a href="javascript:goTo('videography');"><li><i class="fa fa-video-camera"></i>- Videography</li></a>
						<a href="javascript:goTo('freeStockVideoFootage');"><li><i class="fa fa-film"></i>- Free Stock Video Footage</li></a>
						<a href="javascript:goTo('soundEngineering');"><li><i class="fa fa-microphone"></i>- Sound Engineering</li></a>
						<a href="javascript:goTo('websiteDevelopment');"><li><i class="fa fa-code"></i>- Website Development</li></a>
					</ul>
					<br>
					Here at Skutum we are experts at helping you create, acquire, and publish all kinds of media; if we don't have the expertise for your
					project we will draw upon our well established relationships with media professionals to help you get the job done right!
				</div>
			</article>
			<article id="videography" class="off">
				<i class="fa fa-video-camera"></i>
				<h1>Videography</h1>
				<div class="cnt">
					Videography services available here at Skutum are Editing and Filming Extreme Sports and Activities; however we do just about anything.
					We can handle video transfers, film documentaries, short films, commercials, editing, post production audio services, color correction, etc.
					<br><br>
					If you are in need of help with a video project let us know and we will do our best to help you in whatever aspect is needed, if we don't
					have the expertise we probably know someone who does and can put you in contact with them. <br><br>
					Software & Hardware that we Use:
					<br><br>
					<ul class="servicesList">
						<li>- Avid Media Composer</li>
						<li>- Borris Continium Complete</li>
						<li>- Adobe Creative Cloud</li>
						<li>- DaVinci Resolve</li>
						<li>- Black-Magic Design Cinema Camera</li>
						<li>- GoPro Hero 3 Cameras</li>
					</ul>
					<br>
					Video Below Shot With GoPro Hero 3, Edited with Avid Media Composer.
					<div class="video-container">
						<iframe width='500' height='281' src='http://www.pinkbike.com/v/embed/341604/?colors=c80000' allowfullscreen frameborder='0'></iframe>
					</div>
					<br>
					Video Below Shot With GoPro Hero 2 and Hero 3, Edited with Avid Media Composer.
					<div class="video-container">
						<iframe width='500' height='281' src='http://www.pinkbike.com/v/embed/338843/?colors=c80000' allowfullscreen frameborder='0'></iframe>
					</div>
					<br>
					Video Below Shot With GoPro Hero 2, Edited with Avid Media Composer.
					<div class="video-container">
						<iframe width='500' height='281' src='http://www.pinkbike.com/v/embed/330449/?colors=c80000' allowfullscreen frameborder='0'></iframe>
					</div>
					<br>
					We enjoy working on all sorts of projects so go ahead and let us know about your needs and we will get you a competitive quote for our
					services. We enjoy some projects so much that we might even do them for free!
					<br><br>
				</div>
			</article>
			<article id="freeStockVideoFootage" class="off">
				<i class="fa fa-film"></i>
				<h1>Free Stock Video Footage</h1>
				<div class="cnt">
					The video footage here is available for free, for use in any type of project, we enjoy shooting stock footage so if you have any requests
					just let us know and we will see what we can do about filming them.
					<br><br>
					Footage can be delivered to you in the following formats: DNxHD, ProRes and H.264 if you need a different format let us know and we will do
					our best to facilitate you.
					<br><br>
					If you use our footage and find it useful and have any sort of a budget please feel free to donate to our cause. This will help us
					get gas, Clif Bars, servers, cameras, lens and other necessities to continue providing high quality free stock footage.
					<br><br>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="business" value="robinsont@skutum.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Free Stock Video Footage">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"  style="margin-right: 10px;">
						<a href="https://venmo.com?txn=Pay&recipients=robinsont%40skutum.com&note=Free%20Stock%20Footage%20Donation" target="_blank"><img src="img/venmo.png"></a>	
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<br>
					Attribution is encouraged but not required in your credits. Please spread the word and let others know about our free premium stock video footage.
					<br><br>
					I am curently coding the Free Stock Footage Page in my limited free time, for now if you want footage just send me an email thru the form on the
					contact page; be sure to specify the format and footage that you would like. I will send the footage thru a digital delivery service.
					<br><br>
					Curently you can view the footage that I have on YouTube at: <a href="http://www.youtube.com/user/skutumstockfootage" target="_blank"><u>skutumstockfootage</u></a>
					
				</div>
			</article>
			<article id="soundEngineering" class="off">
				<i class="fa fa-microphone"></i>
				<h1>Sound Engineering</h1>
				<div class="cnt">
					Skutum offers several audio related services, such as ADR for videos, Post Production Audio for Video, Live Sound Engineers for mixing bands, corporate events,
					theatrical events, studio recordings and so much more.
					<br><br>
					Let us know of your audio needs and we will help you out, once again if we don't feel like we are qualified to deliver the quality or service that
					your project deserves we will help you get in contact with the audio professionals that you need to get your work accomplished. 
				</div>
			</article>
			<article id="websiteDevelopment" class="off">
				<i class="fa fa-code"></i>
				<h1>Website Development</h1>
				<div class="cnt">
					Skutum is capable of creating a powerful dynamic website for you using the latest web standards and practices. We use PHP, HTML5, CSS3, jQuery, Java Script,
					mySQL, postgreSQL, and many other web development tools to create stunning efficient user manageable websites.
					<br><br>
					Some Websites that we have created are:
					<br><br>
					<ul class="servicesList">
						<a href="http://pollsound.com" target="_blank"><li>www.pollsound.com</li></a>
						<a href="http://resultsync.com" target="_blank"><li>www.resultsync.com</li></a>
					</ul>
					<br>
					We can create simple static websites or complex dynamic websites that let users change and update content. We specialize in creating very
					custom tailor fit websites for our clients. We employ the KISS method (keep it simple stupid) during the entire website development process
					to ensure that your site is extremely easy for you to manage and customize.
					<br><br>
					Let us know of your website needs and we will be happy to provide you with a quote to get your site underway!
				</div>
			</article>
			<article id="contactUs" class="off">
				<i class="fa fa-comments"></i>
				<h1>Contact Us</h1>
				<div class="cnt">
					<form id="contactUs" action="targets/contact.php" method="post">
						<br>
						Your Name:<br>
						<input type="text" id="yourName" class="contactUs" name="name" maxlength="50"></input><br><br>
						Your Email:<br>
						<input type="text" id="yourEmail" class="contactUs" name="email" maxlength="50"></input><br><br>
						<input type="text" id="phone" style="display: none" class="contactUs" name="phone" maxlength="50"></input>
						Description of your needs:<br><span>Examples: Free Stock Video Footage Request, Videography work, Audio Editing, Website Development.</span><br>
						<textarea id="yourInquire" name="inquire" class="contactUsDescription"></textarea><br><br>
						<input type="submit" class="contactUsSubmit" value="Click to Send"></input>
					</form>
				</div>
			</article>
		</section>
	</body>
</html>
