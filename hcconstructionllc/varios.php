<!DOCTYPE html>
<html>
<head>
	<title>HC Construction LLC</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="fancy/lib/jquery-1.10.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancy/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancy/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

	
	</style>
</head>
<body>
    <?php
	include('head-gallery-varios.php')
?>

    <nav>
    <div style="max-width:960px; margin:0 auto;">
         <div class="clearfix col-md-6 col-xs-6" style="margin-bottom:5px">
         <a href="http://hcconstructionllc.com/">
         <img class="logo" src="images/logohc.png"/></a>
         </div>
   
         <div class="clearfix col-md-4 col-xs-4 menuuu ph" style="float:right">
         
         <p style="margin-bottom:0;"> Request a consultation </p>
         <h3 style="margin-top:0;">(+1) 301 818 0008</h3>
         </div>
      </div>
     <div style="height:5px; width:100%; background:#0C5AA9;" class="col-md-12">
      <div style="max-width:960px; margin:0 auto;">
        <ul class="menu1 clearfix navi col-md-12 col-xs-12" style="max-width:960px; margin:0 auto;">
          <li><a target="" class="transformar" href="/">Home</a></li>
          <li><a target="" class="transformar" href="about.php">About</a></li>
          <li><a target="" class="transformar" href="cabinets.php">Cabinets</a></li>
          <li class="dropdown"><a target="" class="transformar dropdown-toggle" data-toggle="dropdown" href="#" >Portfolio <i class="fa fa-angle-down"></i></a>
          	<ul class="dropdown-menu">
                <li class="dpdw"><a class="transformar sub"href="baths.php">Baths</a></li>
                <li class="dpdw"><a class="transformar sub" href="kitchens.php">Kitchens</a></li>
                <li class="dpdw"><a class="transformar sub" href="basement.php">Basements</a></li>
                <li class="dpdw"><a class="transformar sub" href="interiorDesign.php">Interior Design</a></li>
                <li class="dpdw"><a class="transformar sub" href="flooring.php">Flooring</a></li>
                <li class="dpdw"><a class="transformar sub" href="comercial.php">Commercial</a></li>
                <li class="dpdw"><a class="transformar active sub" href="varios.php">Various</a></li>
              </ul>
          
          </li>
          <li> <a target="" class="transformar" href="testimonials.php">Testimonials</a> </li>
          
          <li><a target="" class="transformar" href="contact.php">Contact</a></li>
        </ul>
        </div>
    </nav>
  </header>
	
	<section class="bg1 kitchens">
                <div class="bg2-kitchens">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div>
                                    <h1 style="color:#fff; font-size: 34px;">VARIOUS</h1>
                                    <h4 style="color:#fff;">See all Various</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section style="margin-top: 80px;">
		<div class="container">
			<div class="row">
		<ul class="caption-style-4-varios">
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/1.jpg"><img style="width:99%" src="images/gallery/varios/nueva/1.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/2.jpg"><img style="width:99%" src="images/gallery/varios/nueva/2.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/3.jpg"><img style="width:100%" src="images/gallery/varios/nueva/3.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/4.jpg"><img style="width:99%" src="images/gallery/varios/nueva/4.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/5.jpg"><img style="width:100%" src="images/gallery/varios/nueva/5.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/6.jpg"><img style="width:100%" src="images/gallery/varios/nueva/6.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/7.jpg"><img style="width:100%" src="images/gallery/varios/nueva/7.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/8.jpg"><img style="width:100%" src="images/gallery/varios/nueva/8.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/9.jpg"><img style="width:100%" src="images/gallery/varios/nueva/9.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/10.jpg"><img style="width:100%" src="images/gallery/varios/nueva/10.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/11.jpg"><img style="width:100%" src="images/gallery/varios/nueva/11.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/12.jpg"><img style="width:100%" src="images/gallery/varios/nueva/12.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/13.jpg"><img style="width:100%" src="images/gallery/varios/nueva/13.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/14.jpg"><img style="width:100%" src="images/gallery/varios/nueva/14.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/15.jpg"><img style="width:100%" src="images/gallery/varios/nueva/15.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/16.jpg"><img style="width:100%" src="images/gallery/varios/nueva/16.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/17.jpg"><img style="width:100%" src="images/gallery/varios/nueva/17.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/18.jpg"><img style="width:100%" src="images/gallery/varios/nueva/18.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/19.jpg"><img style="width:100%" src="images/gallery/varios/nueva/19.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/20.jpg"><img style="width:100%" src="images/gallery/varios/nueva/20.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/21.jpg"><img style="width:100%" src="images/gallery/varios/nueva/21.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/22.jpg"><img style="width:100%" src="images/gallery/varios/nueva/22.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/23.jpg"><img style="width:100%" src="images/gallery/varios/nueva/23.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/24.jpg"><img style="width:100%" src="images/gallery/varios/nueva/24.jpg" alt="" /></a>
			</li>
			
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/26.jpg"><img style="width:100%" src="images/gallery/varios/nueva/26.jpg" alt="" /></a>
			</li>
			
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/28.jpg"><img style="width:100%" src="images/gallery/varios/nueva/28.jpg" alt="" /></a>
			</li>
			
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/30.jpg"><img style="width:100%" src="images/gallery/varios/nueva/30.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/31.jpg"><img style="width:100%" src="images/gallery/varios/nueva/31.jpg" alt="" /></a>
			</li>
			
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/34.jpg"><img style="width:100%" src="images/gallery/varios/nueva/34.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/35.jpg"><img style="width:100%" src="images/gallery/varios/nueva/35.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/36.jpg"><img style="width:100%" src="images/gallery/varios/nueva/36.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/37.jpg"><img style="width:100%" src="images/gallery/varios/nueva/37.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/38.jpg"><img style="width:100%" src="images/gallery/varios/nueva/38.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/39.jpg"><img style="width:100%" src="images/gallery/varios/nueva/39.jpg" alt="" /></a>
			</li>
			<li class="hola">
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/40.jpg"><img style="width:100%" src="images/gallery/varios/nueva/40.jpg" alt="" /></a>
			</li>
			<li class="hola" >
				<a class="fancybox-buttons" data-fancybox-group="button" href="images/gallery/varios/nueva/41.jpg"><img style="width:100%" src="images/gallery/varios/nueva/41.jpg" alt="" /></a>
			</li>
			
		</ul> 
	</div>
	</div>
</section>
	
	<script type/text="javascript">
	$('ul.navi li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
</body>
</html>