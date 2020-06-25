<!DOCTYPE HTML>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
     <title>HC Construction</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="image/png" href="images/favicon.png" />
     <link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
    
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="css/style.css">
     

     <script src="http://code.jquery.com/jquery-latest.js"></script>
     

	<script type="text/javascript">
		$(document).on("scroll",function(){
			if($(document).scrollTop()>30){ 
				$("header").removeClass("large").addClass("smalling");
				}
			else{
				$("header").removeClass("smalling").addClass("large");
				}
			});
	</script>
	<script type="text/javascript">
		$(document).ready(main);
 
			var contador = 1;
			 
			function main(){
				$('.menu_bar').click(function(){
					// $('nav').toggle(); 
			 
					if(contador == 1){
						$('nav').animate({
							right: '0'
						});
						contador = 0;
					} else {
						contador = 1;
						$('nav').animate({
							right: '-100%'
						});
					}
			 
				});
			 
			};
	</script>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<section style="background: #0C5AA9; height: 30px; ">
	<div class="col-md-3" style="float: right;">
		<ul class="social-icon2">
	        <li><a href="https://www.facebook.com/hcconstructionllc" class="fa fa-facebook-square" attr="facebook icon"></a></li>
	        <li><a href="#" class="fa fa-twitter"></a></li>
	        <li><a href="#" class="fa fa-instagram"></a></li>
        </ul>
	</div>
</section>
<header class="menu large">
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span><img src="images/logohc.png"></a>
		</div>
		<nav>
				<img class="logo" src="images/logohc.png"/>
				<ul class="menu1 clearfix">
					<li><a target="" class="active transformar" href="index.php">Home</a></li>
					<li><a target="" class="transformar" href="about.php">About</a></li>
					<li><a target="" class="transformar" href="gallery.php">Gallery</a></li>
					<li><a target="" class="transformar" href="contact.php>">Contact</a></li>
				</ul>
		</nav>
	</header>