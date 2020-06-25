<!DOCTYPE HTML>

<html>

<head>
     <title>HC Construction - Basements</title>
<?php
  include('head-gallery.php');
?>
  
    <nav>
         <a href="http://hcconstructionllc.com/"><img class="logo" src="images/logohc.png"/></a>
         
        <ul class="menu1 clearfix navi">
          <li><a target="" class="transformar" href="/">Home</a></li>
          <li><a target="" class="transformar" href="about.php">About</a></li>
          <li class="dropdown"><a target="" class="active transformar dropdown-toggle" data-toggle="dropdown" href="#" >Portfolio <i class="fa fa-angle-down"></i></a>
          	<ul class="dropdown-menu">
                <li class="dpdw"><a class="transformar"href="baths.php">Baths</a></li>
                <li class="dpdw"><a class="transformar" href="kitchens.php">Kitchens</a></li>
                <li class="dpdw"><a class="transformar" href="basements.php">Basements</a></li>
                <li class="dpdw"><a class="transformar" href="whole_house.php">Whole House</a></li>
                <li class="dpdw"><a class="transformar" href="projects.php">All Projects</a></li>
              </ul>
          
          </li>
          
          <li><a target="" class="transformar" href="contact.php">Contact</a></li>
        </ul>
    </nav>
  </header>
    
<style type="text/css">
  
  .wrapper {
        display: grid;
        grid-gap: 15px;
        /*grid-template-columns: 400px 400px 400px;*/
        background-color: #fff;
        color: #444;
    }

    .box {
        background-color: #444;
        color: #fff;
        border-radius: 5px;
        padding: 0px;
        font-size: 150%;

    }

    .a {
        grid-column: 1 ;
        grid-row: 1 / span 2 ;
    }
    .b {
        grid-column: 2 ;
        grid-row: 1 ;
    }
    .c {
        grid-column: 3 ;
        grid-row: 1 ;
    }
    .d {
        grid-column: 2 ;
        grid-row: 2 ;
    }
    .e {
        grid-column: 3 ;
        grid-row: 2 / span 2;
    }
    .f {
        grid-column: 1 ;
        grid-row:3 ;
    }
    .g {
        grid-column: 2 ;
        grid-row:3 ;
    }
    
</style>
<section class="bg1 basements">
                <div class="bg2-basements">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div>
                                    <h1 style="color:#fff; font-size: 34px;">BASEMENTS</h1>
                                    <h4 style="color:#fff;">See all basements</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  <section style="margin-top: 80px;">
    <div class="container">
      <div class="row justify-content-md-center">
          <div class="col col-md-12" style="margin-bottom: 15px">
            <div class="wrapper">
              <div class="box a mostrar"><img style="width: 100%" src="images/gallery/basement_remodeling/8-1.jpg"> <p class="ptexto"></p></div>
              <div class="box b"><img style="width: 100%" src="images/gallery/basement_remodeling/4-1.jpg"></div>
              <div class="box c"><img style="width: 100%" src="images/gallery/basement_remodeling/5-1.jpg"></div>
              <div class="box d"><img style="width: 100%" src="images/gallery/basement_remodeling/6-1.jpg"></div>  
              <div class="box e"><img style="width: 100%" src="images/gallery/basement_remodeling/9-1.jpg"></div>  
              <div class="box f"><img style="width: 100%" src="images/gallery/basement_remodeling/7-1.jpg"></div>
              <div class="box g"><img style="width: 100%" src="images/gallery/basement_remodeling/10-1.jpg"></div>
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