     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="hcconstructionllc website">
     <meta name="keywords" content="construction,interior,design,bathrooms,kitchens,basements,flooring,comercial">
     <meta name="author" content="Ljv Solutions">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="image/png" href="images/favicon.png" />
     <link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/gallery.css">
     	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- Bootstrap  -->
    
    
    
    
    
    
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="fancy/jquery.fancybox.min.css">

     <!-- MAIN CSS -->
    
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="css/style.css">
     

     

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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120002394-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120002394-1');
</script>


</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<section style="background: #0C5AA9; height: 30px; ">
	<div class="col-md-3" style="float: right;">
		<ul class="social-icon2">
	        <li><a href="https://www.facebook.com/hcconstructionllc" class="fa fa-facebook-square" attr="facebook icon" target="_blank"></a></li>
	        <!--<li><a href="#" class="fa fa-twitter"></a></li>
	        <li><a href="#" class="fa fa-instagram"></a></li>-->
        </ul>
	</div>
</section>

	  <header class="menu large">
    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-menu"></span><img src="images/logohc.png"></a>
    </div>