<!DOCTYPE HTML>

<html>

<head>
 <title>H&C Construction</title>
 <link rel="stylesheet" type="text/css" href="slick/slick.css">
 <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

 <!-- Estilos para la seccion de ANGIES LIST -->
 <style>
 @charset 'UTF-8';
 /* perra */
 .slick-loading .slick-list
 {
  background: #fff url('slick/ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
  font-family: 'slick';
  font-weight: normal;
  font-style: normal;

  src: url('slick/fonts/slick.eot');
  src: url('slick/fonts/slick.eot?#iefix') format('embedded-opentype'), url('slick/fonts/slick.woff') format('woff'), url('slick/fonts/slick.ttf') format('truetype'), url('slick/fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
  font-size: 0;
  line-height: 0;

  position: absolute;
  top: 50%;

  display: block;

  width: 20px;
  height: 20px;
  padding: 0;
  -webkit-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);

  cursor: pointer;

  color: transparent;
  border: none;
  outline: none;
  background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
  color: transparent;
  outline: none;
  background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
  opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
  opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
  font-family: 'slick';
  font-size: 20px;
  line-height: 1;

  opacity: .75;
  color: white;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
  left: -25px;
}
[dir='rtl'] .slick-prev
{
  right: -25px;
  left: auto;
}
.slick-prev:before
{
  content: '←';
}
[dir='rtl'] .slick-prev:before
{
  content: '→';
}

.slick-next
{
  right: -25px;
}
[dir='rtl'] .slick-next
{
  right: auto;
  left: -25px;
}
.slick-next:before
{
  content: '→';
}
[dir='rtl'] .slick-next:before
{
  content: '←';
}

/* Dots */
.slick-dotted.slick-perra
{
  margin-bottom: 30px;
}

.slick-dots
{
  position: absolute;
  bottom: -25px;

  display: block;

  width: 100%;
  padding: 0;
  margin: 0;

  list-style: none;

  text-align: center;
}
.slick-dots li
{
  position: relative;

  display: inline-block;

  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;

  cursor: pointer;
}
.slick-dots li button
{
  font-size: 0;
  line-height: 0;

  display: block;

  width: 20px;
  height: 20px;
  padding: 5px;

  cursor: pointer;

  color: transparent;
  border: 0;
  outline: none;
  background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
  outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
  opacity: 1;
}
.slick-dots li button:before
{
  font-family: 'slick';
  font-size: 6px;
  line-height: 20px;

  position: absolute;
  top: 0;
  left: 0;

  width: 20px;
  height: 20px;

  content: '•';
  text-align: center;

  opacity: .25;
  color: black;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
  opacity: .75;
  color: black;
}









.perra {
  width: 80%;
  margin: 40px auto;
}

.slick-slide {
  margin: 0px 20px;
}

.slick-slide img {
  width: 100%;
}

.slick-prev:before,
.slick-next:before {
  color: black;
}


.slick-slide {
  transition: all ease-in-out .3s;
  opacity: .2;
}

.slick-active {
  opacity: 1;
}

.slick-current {
  opacity: 1;
}


#social-platformas {
  position:relative;
  top:100px;
  top:15vh;
  font-size:1rem;
  text-align:center;
  height:100px;
  overflow:hidden;
}

/*Pen code from this point on*/
.btnes {
  clear:both;
  white-space:nowrap;
  font-size:1.4em;
  display:inline-block;
  border-radius:5px;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.35);
  margin:2px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  overflow:hidden
}

.btnes:hover {
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.45);
}

.btnes:focus {
  box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.4);
}

.btnes > span,.btnes-icon > i {
  float:left;
  padding:13px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  line-height:1em
}

.btnes > span {
  padding:14px 18px 16px;
  white-space:nowrap;
  color:#000;
  background:#b8b8b8
}

.btnes:focus > span {
  background:#fff
}

.btnes-icon > span {
  border-radius:0 5px 5px 0
}

/*Facebook*/
.btnes-facebook:hover > i,.btnes-facebook:focus > i {
  color:#3b5998
}

.btnes-facebook > span {
  background:#fff
}


</style>

<!-- FIN de estilos para seccion de ANGIES LIST -->

<?php
include('head-gallery.php')
?>


<nav>
  <div style="max-width:960px; margin:0 auto;">
   <div class="clearfix col-md-6 col-xs-6" style="margin-bottom:5px; margin-top:5px;">
     <a href="https://hcconstructionllc.com/">
       <img class="logo" src="images/logohc.png"/></a>
       
     </div>
     
     
     <div class="clearfix col-md-4 col-xs-4 menuuu ph" style="float:right">
       
       <p style="margin-bottom:0;"> Request a consultation </p>
       <h3 style="margin-top:0;">(+1) 301 818 0008</h3>
       
     </div>
   </div>
   
   <div style="height:5px; width:100%; background:#0C5AA9;" class="col-md-12">
    <div style="max-width:960px; margin:0 auto;">
        <!--<a class='flotante' href='#' ><img src='images/angies-list.png' style="width:100%" border="0"/></a>-->
      <ul class="menu1 clearfix navi col-md-12 col-xs-12" style="max-width:960px; margin:0 auto;">
        <li><a target="" class="transformar active" href="/">Home</a></li>
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
            <li class="dpdw"><a class="transformar sub" href="varios.php">Various</a></li>
            
          </ul>
          
        </li>
        <li> <a target="" class="transformar" href="testimonials.php">Testimonials</a> </li>

        <li><a target="" class="transformar" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
  
</header>

<section id="home" class="slider" data-stellar-background-ratio="0.5">
    
  <div class="container">
   <div class="row" style="margin-top:100px;">
     <div class="owl-carousel owl-theme">
      <div class="item item-first">
       <div class="caption">
        <div class="col-md-offset-1 col-md-10 marcslide wow fadeInLeft" data-wow-delay="0.8s">
         <h1>Kitchens</h1>
         <a href="kitchens.php" class="section-btn btn btn-default smoothScroll">See More</a>
       </div>
     </div>
   </div>

   <div class="item item-second">
     <div class="caption">
      <div class="col-md-offset-1 col-md-10 marcslide wow fadeInUp" data-wow-delay="1s">
       <h1>Bathrooms</h1>
       <a href="baths.php" class="section-btn btn btn-default btn-blue smoothScroll">See More</a>
     </div>
   </div>
 </div>

 <div class="item item-third">
   <div class="caption">
    <div class="col-md-offset-1 col-md-10 marcslide wow fadeInRight" data-wow-delay="0.6s">
     <h1>Interior Design</h1>
     <a href="basements.php" class="section-btn btn btn-default btn-blue smoothScroll">See More</a>
   </div>
 </div>
</div>
<div class="item item-fourth">
 <div class="caption">
  <div class="col-md-offset-1 col-md-10 marcslide wow fadeInUp" data-wow-delay="0.8s">
   <h1>Basements</h1>
   <a href="whole_house.php" class="section-btn btn btn-default btn-blue smoothScroll">See More</a>
 </div>
</div>
</div>
<div class="item item-fifth">
 <div class="caption">
  <div class="col-md-offset-1 col-md-10 marcslide wow fadeInUp" data-wow-delay="3s">
   <h1>Commercial</h1>
   <a href="comercial.php" class="section-btn btn btn-default btn-blue smoothScroll">See More</a>
 </div>
</div>
</div>
<div class="item item-sixth">
 <div class="caption">
  <div class="col-md-offset-1 col-md-10 marcslide wow fadeInUp" data-wow-delay="3s">
   <h1>Flooring</h1>
   <a href="flooring.php" class="section-btn btn btn-default btn-blue smoothScroll">See More</a>
 </div>
</div>
</div>
</div>
</div>
</div>
</section>
     <!--<section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.</p>
                                   <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Neil Jackson</h3>
                                        <p>General Principal</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
        </section>-->










        <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
           <div class="row">

            <div class="col-md-12 col-sm-12">
             <!-- SECTION TITLE -->
             <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
              <h2>Our Work</h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
           <!-- NEWS THUMB -->
           <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
            <a href="kitchens.php">
             <img src="images/featured-kitchen.jpg" class="img-responsive" alt="kitchens">
           </a>
           <div class="news-info">
             <h3><a href="kitchens.php">Kitchens</a>
              <a style="float: right;" href="kitchens.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
            </h3>
            
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
       <!-- NEWS THUMB -->
       <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
        <a href="baths.php">
         <img src="images/gallery/atlanta_dominic/featured.jpg" class="img-responsive" alt="bathrooms">
       </a>
       <div class="news-info">
         <h3><a href="baths.php">Bathrooms</a>
          <a style="float: right;" href="baths.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
        </h3>
        
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
   <!-- NEWS THUMB -->
   <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
    <a href="interiorDesign.php">
     <img src="images/featured-interiordesign.jpg" alt="interior design" class="img-responsive">
   </a>
   <div class="news-info">
     <h3><a href="interiorDesign.php">Interior Design</a>
      <a style="float: right;" href="interiorDesign.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
    </h3>
    
  </div>
</div>
</div>


<div class="col-md-4 col-sm-4">
 <!-- NEWS THUMB -->
 <div class="news-thumb wow fadeInUp" data-wow-delay="1s">
  <a href="comercial.php">
   <img src="images/featured-comercial.jpg" alt="comercial" class="img-responsive">
 </a>
 <div class="news-info">
   <h3><a href="comercial.php">Commercial</a>
    <a style="float: right;" href="comercial.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
  </h3>
  
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
 <!-- NEWS THUMB -->
 <div class="news-thumb wow fadeInUp" data-wow-delay="1.2s">
  <a href="basement.php">
   <img src="images/featured-basement.jpg" alt="basements" class="img-responsive">
 </a>
 <div class="news-info">
   <h3><a class="" href="basement.php">Basements</a>
    <a style="float: right;" href="basement.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
  </h3>
  
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
 <!-- NEWS THUMB -->
 <div class="news-thumb wow fadeInUp" data-wow-delay="1.4s">
  <a href="flooring.php">
   <img src="images/featured-flooring.jpg" alt="flooring" class="img-responsive">
 </a>
 <div class="news-info">
   <h3><a class="" href="flooring.php">Flooring</a>
    <a style="float: right;" href="flooring.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
  </h3>
  
</div>
</div>
</div>
<div class="col-md-4 col-sm-4"></div>
<div class="col-md-4 col-sm-4">
 <!-- NEWS THUMB -->
 <div class="news-thumb wow fadeInUp" data-wow-delay="1.4s">
  <a href="varios.php">
   <img src="images/featured-varios.jpg" alt="various" class="img-responsive">
 </a>
 <div class="news-info">
   <h3><a class="" href="varios.php">Various</a>
    <a style="float: right;" href="varios.php" class="section-btn-index btn btn-default smoothScroll">See All</a>
  </h3>
  
</div>
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



<!-- test -->



<!-- END TEST -->








        <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
           <div class="row">

            <div class="col-md-6 col-sm-6">
             <img src="images/logo2.png" class="img-responsive" alt="h&c construction">
           </div>

           <div class="col-md-6 col-sm-6">
             <!-- CONTACT FORM HERE -->
             <form id="appointment-form" role="form" method="post" action="#">

              <!-- SECTION TITLE -->
              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
               <h2>Get in Touch</h2>
             </div>

             <div class="wow fadeInUp" data-wow-delay="0.8s">
               <div class="col-md-6 col-sm-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
              </div>

              <div class="col-md-6 col-sm-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
              </div>

              <div class="col-md-6 col-sm-6">
                <label for="address">Address</label>
                <input type="text" name="address" value="" id="address" class="form-control"placeholder="Your Address">
              </div>
              <div class="col-md-6 col-sm-6">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="" class="form-control"placeholder="Phone">
              </div>
              

              <div class="col-md-12 col-sm-12">
                <label for="telephone">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                <label for="Message">Message</label>
                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
              </div>
            </div>
          </form>
          
        </div>
        
        
        

      </div>
    </div>
  </section>


<section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
          -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1549.2750701030684!2d-77.07345507050807!3d39.04837524978344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7cef15173dcfb%3A0xe4cc35200969d09f!2s11717+Highview+Ave%2C+Silver+Spring%2C+MD+20902%2C+USA!5e0!3m2!1sen!2spe!4v1526950894962" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>

  <!-- ANGIES LIST SECTION -->
<section id="" data-stellar-background-ratio="2.5" class="ph">
  <div class="container">
   <div class="row">

    <div class="col-md-12 col-sm-12">
     <!-- SECTION TITLE -->
     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
      <h3>Latest Reviews on Angie's List</h3>
    </div>
  </div>
</div>
</div>
</section>

<section class="regular perra ph">

  <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
   <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>
   	<div class="team-info">
    	<h3 style="1.3em">07/30/2018 – Cathleen Salapare</h3>
    	<p>handyman work, pressure wash, hang ceiling fan</p>
   		 <div class="team-contact-info">
      			<p style="font-size:12px;">Everything was great. Luis and his team are easy to work with and they know what they are doing. I 
definately would hire them again. Thank you for a job well done. </p>
   		</div>
 	</div>
  </div>

  <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
   <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>
   	<div class="team-info">
    	<h3 style="1.3em">07/20/2018 – Homira Rod</h3>
    	<p>handyman work, pressure wash, hang ceiling fan</p>
   		 <div class="team-contact-info">
      			<p style="font-size:12px;">I've used them for years. It's always been wonderful and preforms in a timely fashion. He knows exactly what I like so he'll be quick to say "hmm, I don't really like it," and gives his honest his opinion, let me see as well, and decide. </p>
   		</div>
 	</div>
  </div>


  <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
   <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>
   	<div class="team-info">
    	<h3 style="1.3em">07/20/2018 – Christiane Hyland</h3>
    	<p>handyman work, pressure wash, hang ceiling fan</p>
   		 <div class="team-contact-info">
      			<p style="font-size:12px;">It went exceptionally well, their level of professionalism and expertise were unparalleled.</p>
   		</div>
 	</div>
  </div>
  

  <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
   <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>
   	<div class="team-info">
    	<h3 style="1.3em">07/19/2018 – Charlene Rowe</h3>
    	<p>handyman work, pressure wash, hang ceiling fan</p>
   		 <div class="team-contact-info">
      			<p style="font-size:12px;">Luis and his crew were very prompt and paid attention to details. They also left the area clean and 
removed any debris.</p>
   		</div>
   
 	</div>

  </div>

  <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
   <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>
   	<div class="team-info">
    	<h3 style="1.3em">07/08/2018 – Arun Sudama</h3>
    	<p>handyman work, pressure wash, hang ceiling fan</p>
   		 <div class="team-contact-info">
      			<p style="font-size:12px;">Luis is the project manager/estimator and he was very prompt, always returned calls and kept us informed every step of the way. He also made helpful suggestions. Alex did the work (8 hours) and we were very pleased with his workmanship - definitely would hire this company again.
     			</p>
   		</div>
   
 	</div>

  </div>
  

<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/2.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">06/27/2018 – Jamil Mo uraza</h3>
      <p style="font-size:12px;">They did a big job for me and everything went well.</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"They are great! They are honest and on time and did a good job."</p>
     </div>
     
   </div>

 </div>
</div>
<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
    <center><img src="images/angies/3.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">06/27/2018 – Oshila Shields</h3>
      <p style="font-size:12px;">They've done floors for us, three bathrooms, outside work, etc.</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">They've pretty much done any construction job we've ever needed. They're actually in the process now of redoing our basement. They do great work, I would highly recommend them"</p>
     </div>
     
   </div>

 </div>
</div>
<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
    <center><img src="images/angies/4.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">06/23/2018 – Ravi Subramaniam</h3>
      <p style="font-size:12px;">Ceiling fans, Faucets, Window trim, Locks, other minor tasks</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"They came exactly on time and did a careful job. Very professional people. Small outfit. Price quite reasonable. I paid $675 for a clearly 8 hour work (with an Angies List coupon). This included a run to Home Depot."</p>
     </div>
     
   </div>

 </div>
</div>
<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/2.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">06/19/2018 – Michelle Gray</h3>
      <p style="font-size:12px;">Recessed lighting put in to dining room and living room</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"We are very pleased with our experience! They were prompt to arrive for our consultation and then for each day on the project. Luis kept us updated each day as to the status and progress and what to expect the next day."</p>
     </div>
     
   </div>

 </div>
</div>
<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/3.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">05/29/2018 – Sidra Michon</h3>
      <p style="font-size:12px;">I needed a basement apartment repainted. The apartment has a small kitchen, bathroom and TONS of closets and shelves.</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"I live out of town so after meeting with Luis once or twice I handed over the keys and didn't see the final product until after it was done and paid for. They did a great job and I am currently working with them to scope out future projects. I wish I had before pics 'cause the space was horrible, now it's beautiful."</p>
     </div>
     
   </div>

 </div>
</div>
<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/2.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">05/28/2018 – Jhon Walker</h3>
      <p style="font-size:12px;">Handyman,electrical</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"Alex and Walter did a good job. high quality and they finish on time. Luis, the estimator! He was very courteous and friendly with us, we would definitely hire H & C Construction again"</p>
     </div>
     
   </div>

 </div>
</div>
<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">05/27/2018 – Oscar Parra</h3>
      <p style="font-size:12px;">New Construction, Framing, Dental Office</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"H & C Construction Services LLC is a highly professional, and more importantly, trustworthy company. Me and my wife had interviewed other renovation companies and know the many horror stories from friends and neighbors about selecting the wrong ones. Luis was always professional, patient and courteous. "</p>
     </div>
     
   </div>

 </div>
</div>

<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">05/12/2018 – Pejman Ghorbani</h3>
      <p style="font-size:12px;">New Construction</p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"We could not have had a better experience! H&C Construction did a great job from the beginning of our project until the very end. Their work is impeccable and the team is so easy to work with. A new construction for a dental practice can be stressful but the team always had a great attitude and made it a great experience. "</p>
     </div>
     
   </div>

 </div>
</div>

<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">04/23/2018 – Bill Varner</h3>
      <p style="font-size:12px;"></p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"Luis and his team were outstanding. Very professional, responsive, timely, and also a great value. They helped work thru many of those unexpected issues that always occur when remodeling. I would hire him again for any work I was considering. The best construction service I have ever worked with. "</p>
     </div>
     
   </div>

 </div>
</div>


<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">03/23/2018 – Carlotta Jackson</h3>
      <p style="font-size:12px;"></p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"H & C Construction have done several projects for me over the years. Ranging from painting to installing a shower. Most recently, the company repaired my front steps. Luis, the owner and his team are always very professional and the work is top notch. Response times are quick and prices are affordable. I highly recommend this company."</p>
     </div>
     
   </div>

 </div>
</div>


<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">02/28/2018 – Sami Sarfaraz</h3>
      <p style="font-size:12px;"></p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"All work done very professionally, working staff very honest and reliable. I always contact him for 
any house related work. HIGHLY RECOMMENDED."</p>
     </div>
     
   </div>

 </div>
</div>

<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">02/26/2018 – Tehseen Raza</h3>
      <p style="font-size:12px;"></p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"Luis and his team finished the project(s) on time, never skipped a day, very punctual, always showed up with a full team, always informed us about cost of material of various kinds, and no surprises"</p>
     </div>
     
   </div>

 </div>
</div>


<div>
  <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
    <center><img src="images/angies/1.png" class="img-responsive" alt="review angies list"></center>

    <div class="team-info">
      <h3 style="1.3em">02/26/2018 – Barbara Giarratara</h3>
      <p style="font-size:12px;"></p>
      <div class="team-contact-info">
       <p style="font-size:12px;">"G-R-E-A-T!! We have contracted work from HC Construction for many projects; some small and some quite large. In each case we have been highly satisfied with the quality, price, timeline & finishing on time along with the team of professionals that represent this company."</p>
     </div>
     
   </div>

 </div>
</div>

</section>

<!-- END ANGIES LIST SECTION -->
  <?php
  include('reviews.php')
  ?>


  <script type/text="javascript">
    $('ul.navi li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
  </script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4, 
        slidesToScroll: 2
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
  </script>
  
  <?php
  include('footer.php')
  ?>