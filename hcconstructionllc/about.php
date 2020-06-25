<!DOCTYPE HTML>

<html>

<head>
     <title>HC Construction - About</title>
<?php
     include('head-gallery.php')
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
          <li><a target="" class="transformar active" href="about.php">About</a></li>
          <li><a target="" class="transformar" href="cabinets.php">Cabinets</a></li>
          <li class="dropdown"><a target="" class="transformar dropdown-toggle" data-toggle="dropdown" href="#" >Portfolio <i class="fa fa-angle-down"></i></a>
          	<ul class="dropdown-menu">
                <li class="dpdw"><a class="transformar sub"href="baths.php">Baths</a></li>
                <li class="dpdw"><a class="transformar sub" href="kitchens.php">Kitchens</a></li>
                <li class="dpdw"><a class="transformar sub" href="basement.php">Basements</a></li>
                <li class="dpdw"><a class="transformar sub" href="interiorDesign.php">Interior Design</a></li>
                <li class="dpdw"><a class="transformar sub" href="flooring.php">Flooring</a></li>
                <li class="dpdw"><a class="transformar sub" href="comercial.php">Commercial</a></li>
                <li class="dpdw"><a class="transformar sub" href="varios.php">Various</a></li>
               
              </ul>
          
          </li>
          <li> <a target="" class="transformar" href="testimonials.php">Testimonials</a> </li>
          
          <li><a target="" class="transformar" href="contact.php">Contact</a></li>
        </ul>
        </div>
    </nav>
  </header>

	<section class="bg1 baths">
                <div class="bg2-baths">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div>
                                    <h1 style="color:#fff; font-size: 34px;">About Us</h1>
                                    <h4 style="color:#fff;"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-xs-12">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Who Are We?</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>
                                        H & C Construction Services, LLC. is a Silver Spring, Maryland based remodeling company. 

                                        We do kitchen remodels, bathroom remodeling, home renovations and commercial office renovations.  Our employees will keep secure, safe and clean job sites. During your renovation, we keep you in mind and work with your schedule helping to keep your project on time and on budget. 

                                        We invite you to take a moment to browse our website for more information about the services that we offer.</p>
                              </div>
                              
                         </div>
                    </div>
                    <div class="col-md-6 col-xs-12 wow fadeInRight"  >
                         <div class="about-">
                              <img src="images/logohc.png" style="width:80%; margin-top: 20px" alt="h&c construction">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>          


     <section class="calltoaction wow fadeInRight" style="background-image: url(images/bg-cta.jpg); background-size: 100%">
          <div class="container" >
               <div class="row" style="margin-top: 7%">
                    <div class="col-md-offset-1 col-md-9" >                    
                         <h2 style="color:#fcfcfc">See all Projects</h2>
                    </div>          
                    <div class="col-md-2">
                         <a href="projects.php" class="section-btn btn btn-default smoothScroll">Visit Our Gallery</a>
                    </div>
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
     <?php
          include('footer.php')
     ?>