<?php

require_once ('vendor/phpmailer/phpmailer/PHPMailerAutoload.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>TokensApp</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> -->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all">

        <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>

        <!-- jquery-ui -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="all">

    </head>
    <body style='overflow-x:hidden;'data-spy="scroll" data-target=".navbar">
    	<section id="about" class="main-block-public">
    		<div class="container header">

    			<div class="row top-block-pad">

    				<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    					<div class="container">
    						<div class="navbar-d">
    							<div class="col-lg-12 top-header">
    								<div class="menu">
    									<nav class="navbar-d navbar-inverse">
    										<div class="container-fluid">

    											<div class="navbar-header pull-right">
    												<button type="button" class="navbar-toggle little-screen" data-toggle="collapse" data-target="#myNavbar">
    													<span class="icon-bar"></span>
    													<span class="icon-bar"></span>
    													<span class="icon-bar"></span>
    												</button>
    											</div>
    											<div class="logo-fl pull-left">
    												<img class="logo" src="img/logo.png">   
    											</div>


    											<div class="collapse navbar-collapse navbar-responsive-collapse menu-collap" id="myNavbar"> 

    												<ul class="nav navbar-nav navbar-right main-menu">
    													<li><a href="index.php#about">Home</a></li>
    													<li><a href="index.php#features">Features</a></li>
    													<li><a href="index.php#screens">Screens</a></li>
    													<li class="li-support"><a class="support-small" href="index.php#support">Support</a></li>
    												</ul>
    											</div>                              

    										</div>
    									</nav>
    								</div>
    							</div>
    						</div>
    					</div>
    				</nav>
    				<div class="col-lg-12 top-head privacy_content public">
    					<div class="nav-content nav_content_privacy_content public_content">
    						<h3 class="first_titles_public">
    							Express easily, Share freely. Gather your followers in one place.
    						</h3>
    						<h1 class="title-head">
    							Create your own virtual Empire with TokensApp Public groups
    						</h1>

    						<h1 class="downl_public">Rule, Rock and Share!</h1>
    						<div class="button-downl button_downl_public">
    							<a class="btn_1_public" target="_blank" href="http://play.tokensapp.com/c/aff?m=homepage"><img src="img/btn-1.png"></a>
    							<a class="btn_1_public" target="_blank" href="http://play.tokensapp.com/c/ios?m=homepage"><img src="img/btn-2.png"></a>
    						</div>
    						<h3 class="follow_public">Become a King of the Castle!</h3>                            
    						<div class="king_public">
    							<img src="img/hierarchy_king.png">
    						</div>
    						<div class="main_ul_featires main_ul_featires_public">
    							<ul class="pull-left left_ul_public" >
    								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
    								<li><a href="#">Share all media in a beautiful way</a></li>
    								<li><a href="#">Keep your audience updated 24/7</a></li>
    								<li><a href="#">Conquer more (heart icon)s for sharing</a></li>
    								<li><a href="#">Take all advantages of an extra stage</a></li>
    								<li><a href="#">Express yourself with no limits</a></li>
    								<li><a href="#">Join up with your numerous followers</a></li>
    							</ul>
    							<img class="center_phone_public" src="img/iphone_public.png">
    							<ul class="pull-right right_ul_public">
    								<li><a href="#">TokensApp Public means immediate release</a></li>
    								<li><a href="#">Let your mobile fans rock with you</a></li>
    								<li><a href="#">Share out your creative and bold ideas</a></li>
    								<li><a href="#">Record your speech and enjoy your RECognition</a></li>
    								<li><a href="#">Explore the best way to stay in touch</a></li>
    								<li><a href="#">Gather all your followers freely and comfy</a></li>
    								<li><a href="#">Be open. Be free. Message your ideas</a></li>
    							</ul>
    						</div>
    						<h1 class="downl_public_bot">Download it now!</h1>
    						<div class="button-downl button_downl_public">
    							<a class="btn_1_public" target="_blank" href="http://play.tokensapp.com/c/aff?m=homepage"><img src="img/btn_public_android.png"></a>
    							<a class="btn_1_public" target="_blank" href="http://play.tokensapp.com/c/ios?m=homepage"><img src="img/btn_public_ios.png"></a>
    						</div>


    					</div>
    				</div>
    			</div>

    			<div id="support" class="row ios-titles public_ios_titles">
    				<div class="col-xs-12 get-app-titles">
    					<h1>Want to know more about TokensApp Public Group?</h1>
    					<h3>Ask us about extra App features here</h3>
    				</div>
    			</div>

    			<div class="row support">
    				<div class="col-xs-12">
    					<form action="" method="post" id="form" class="sent-form public_form">
    						<input class="pull-left" type="text" id="name" name="name" placeholder="Your Name" >   
    						<span class="error-field title-error">Name Error</span>
    						<input class="pull-right" type="text" id="email" name="email" placeholder="Email" onfocus="this.value = ''">
    						<span class="error-field email-error">Email Error</span>
    						<textarea class="" name="mess" id="mess" placeholder="Your Message Here..." ></textarea>
    						<span class="error-field mess-error">Mess Error</span>
    						<input type="submit" name="submit" value="Send"><span class="done error-field">text</span>
    						<div id="dialog" class="dialog"><p>Thanks!<br>Your message was send!</p></div>
    					</form>
    				</div>
    			</div>

    			<?php 

    			$to = 'lebedeva.kait@gmail.com';
    			$name = $_POST['name'];
    			$mail = $_POST['email'];
    			$mess = $_POST['mess'];

    			$email = new PHPMailer();
    			$email->CharSet = 'UTF-8';
    			$email->IsSMTP();
    			$email->SMTPDebug = 0;
    			$email->SMTPAuth = true;
    			$email->SMTPSecure = "tls";
    			$email->Host = "smtp.gmail.com";
    			$email->Port = 587;
    			$email->IsHTML(true);
    			$email->Username = "server@adorika.com";
    			$email->Password = "ador2929";
    			$email->SetFrom("info@unigent.com");

// Title of mail
    			$subject  = "New message TokesApp Public";
    			$headers  = "From: "  strip_tags($mail)  "\r\n";
    			$headers = "Reply-To: ". strip_tags($mail)  "\r\n";
    			$headers = "MIME-Version: 1.0\r\n";
    			$headers = "Content-Type: text/html;charset=utf-8 \r\n";

// Content of mail
    			$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    			$msg = "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Message from TokesApp</h2>\r\n";
    			$msg = "<p><strong>From:</strong> ".$name."</p>\r\n";
    			$msg = "<p><strong>Email:</strong> ".$mail."</p>\r\n";
    			$msg = "<p><strong>Message:</strong> ".$mess."</p>\r\n";

    			mail($to, $subject, $msg, $headers)

    			?>


    		</div>
    	</section>




    	<section id="get-app" class="get-app-section get-app-section-privacy">
    		<div class="container">                
    			<div class="row footer">
    				<div class="col-lg-12">
    					<img class="footer-logo pull-left footer_logo_privacy" src="img/logo.png">
    					<ul class="list-footer-icon pull-left list_footer_icon_policy">
    						<li>
    							<a class="fl-tw" href="#"></a>
    						</li>
    						<li>
    							<a class="fl-fb" href="#"></a>
    						</li>
    						<li>
    							<a class="fl-gl" href="#"></a>
    						</li>
    					</ul>
    					<div class="bottom_menu_privacy">
    						<ul class="page_bot_list">
    							<li><a href="index.php">Home</a></li>
    							<li><a href="terms.html">Terms of service</a></li>
    							<!-- <li><a href="#">For Publishers</a></li> -->
    						</ul>
    					</div>
    					<div class="privacy_btn pull-right">
    						<a class="little_btn_privacy"  target="_blank" href="https://play.google.com/store/apps/details?id=com.tokensapp&hl=ru"><img class="-image-googlePlay" src="img/privacy-btn.png"></a>
    						<a class="small-btn" target="_blank" href="https://itunes.apple.com/us/app/tokensapp-free-chat-messenger/id953068051?mt=8"><img src="img/privacy-btn-2.png"></a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>

    	<!-- jQuery -->
    	<script src="js/jquery.js"></script>
    	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    	<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
    	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    	<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>

    	<!-- Slider JS -->
    	<!-- <script type="text/javascript" src="js/slider-gallery.js"></script> -->

    	<!-- Bootstrap Core JavaScript -->
    	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    	<!-- Custom Theme JavaScript -->
    	<script src="js/basicelement.js"></script>
    	<script type="text/javascript" src="js/jquery.gallery.js"></script>

    	<script type="text/javascript">
    		function initGallery() {

    			$('.dg-container').gallery({
                                        // autoplay: true,
                                    });
    		}
    		$(function() {
    			initGallery();
    		});
    		setTimeout(function() {
    			$('.ios-menu').on('click', function() {
    				initGallery();

    				console.log("jdsfhsjdk");
    			});
    		}, 1000);

    		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    		ga('create', 'UA-64487486-3', 'auto');
    		ga('send', 'pageview');
    	</script>

    	<!-- Plugin JavaScript -->
    	<!--<script type="text/javascript" src="js/jquery.malihu.PageScroll2id.js"></script>-->
    	<script src="js/jquery.easing.min.js"></script>
    	<script src="js/SmoothScroll.js"></script>

    	<!-- Form -->
    	<script type="text/javascript" src="js/form.js"></script>


    	<!-- jquery UI -->
    	<script type="text/javascript" src="js/jquery-ui.min.js"></script>


    </body>
    </html>