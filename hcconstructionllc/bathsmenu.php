<!DOCTYPE HTML>

<html>

<head>

  <!--<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">-->
     <title>HC Construction - Baths</title>
<?php
  include('head-gallery.php');
?>
    <nav>
        <img class="logo" src="images/logohc.png"/>
        <ul class="menu1 clearfix navi">
          <li><a target="" class="transformar" href="index.php">Home</a></li>
          <li><a target="" class="transformar" href="about.php">About</a></li>
          <li class="dropdown"><a target="" class="active transformar dropdown-toggle" data-toggle="dropdown" href="#" >Portfolio</a>
          	<ul class="dropdown-menu">
                <li class="dpdw"><a href="baths.php" class="transformar">Baths</a></li>
                <li class="dpdw"><a href="kitchens.php" class="transformar">Kitchens</a></li>
                <li class="dpdw"><a href="basements.php" class="transformar">Basements</a></li>
                <li class="dpdw"><a href="whole.php" class="transformar">Whole House</a></li>
               
              </ul>
          
          </li>
          
          <li><a target="" class="transformar" href="contact.php>">Contact</a></li>
        </ul>
    </nav>
  </header>
    
<style type="text/css">
  
  .wrapper {
        display: grid;
        grid-gap: 15px;
        grid-template-columns: 400px 400px 400px;
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
        grid-row: 2 ;
    }
    .f {
        grid-column: 1 ;
        grid-row:3 ;
    }
    .g {
        grid-column: 1 ;
        grid-row:4;
    }
    .h {
        grid-column: 2 ;
        grid-row: 3 / span 2;
    }
    .i {
        grid-column: 3 ;
        grid-row:3 / span 2;
    }
    .j {
        grid-column: 1 ;
        grid-row:5 / span 2;
    }
    .k {
        grid-column: 2;
        grid-row:5;
    }
    .l {
        grid-column: 2 ;
        grid-row:6;
    }
    .m {
        grid-column: 3 ;
        grid-row:5 / span 2;
    }
    .n {
        grid-column: 1 ;
        grid-row:7 / span 2;
    }
    


</style>


<section class="bg1 baths">
                <div class="bg2-baths">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div>
                                    <h1 style="color:#fff; font-size: 34px;">BATHS</h1>
                                    <h4 style="color:#fff;">See all baths</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  <section style="margin-top: 80px;">
    <div class="container">
      <div class="row justify-content-md-center">
          <div class="col col-md-12" style="margin-bottom:15px">
            <div class="wrapper">
              <div class="box a mostrar"><img style="width: 100%" src="images/gallery/andre_residence/1-1.jpg"> <!--<p class="ptexto">hola mundo </p>--></div>
              <div class="box b"><img style="width: 100%" src="images/gallery/andre_residence/2-1.jpg"></div>
              <div class="box c"><img style="width: 100%" src="images/gallery/bathroom_remodeling_barbara/9-1.jpg"></div>
              <div class="box d"><img style="width: 100%" src="images/gallery/atlanta_job/10-1.jpg"></div>  
              <div class="box e"><img style="width: 100%" src="images/gallery/jamil_master_bathroom/9-1.jpg"></div>  
              <div class="box f"><img style="width: 100%" src="images/gallery/masther_bath/5.jpg"></div>
              <div class="box g"><img style="width: 100%" src="images/gallery/masther_bath/6-1.jpg"></div>
              <div class="box h"><img style="width: 100%" src="images/gallery/bathrooms/3-1.jpg"></div>  
              <div class="box i"><img style="width: 100%" src="images/gallery/jamil_master_bathroom/10-1.jpg"></div>
              <div class="box j"><img style="width: 100%" src="images/gallery/sarah_bathroom_mclean_va/7-1.jpg"></div>  
              <div class="box k"><img style="width: 100%" src="images/gallery/rehman_bathroom/5-1.jpg"></div>  
              <div class="box l"><img style="width: 100%" src="images/gallery/rehman_bathroom/6-1.jpg"></div>
              <div class="box m"><img style="width: 100%" src="images/gallery/sarah_bathroom_mclean_va/11.jpg"></div>  
              <div class="box n"><img style="width: 100%" src="images/gallery/basement_remodeling/10.jpg"></div>  
            </div>
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