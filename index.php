<?php
session_start();
$servername = "localhost";
$server_user = "webyhzhou";
$server_pass = "周逸皓";
$dbname = "webyhzhou";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CsCourse</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bistro-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="shortcut icon" href="images/favicon.png">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader"> 
   <div class="cssload-container">
     <div class="cssload-circle"></div>
     <div class="cssload-circle"></div>
   </div>
</div>

<!--Topbar-->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">CsCourse</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Contact us +86-666-666-666</p>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" class="img-responsive"></a> 
         </div>
        
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li>
                   <a href="index.php">Home</a>
                   
                </li>
                <li><a href="about.html">About us</a></li>
                <li><a href="faq.html">FAQ</a></li>      
                <li><a href="./account/register.php">Join Now</a></li>
                
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>



<!-- REVOLUTION SLIDER -->			
<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-129" data-transition="fade" data-slotamount="default" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"  data-title="Outstading &nbsp; Service" data-description="">
								<!-- MAIN IMAGE -->
								<img src="images/banner2.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!-- LAYER NR. 2 -->
								<h1 class="tp-caption tp-resizeme" 
                          data-x="left" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">We &nbsp; Provide</span> <br> The &nbsp; Best &nbsp; Course &nbsp;
                       </h1>
								<!-- LAYER NR. 2 -->

                        <div class="tp-caption fade tp-resizeme"
                           data-x="left" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="./account/register.php" class="btn-common btn-white page-scroll">Join Now</a>
                       </div>
                        
                       
							</li>
							
							<li class="text-center" data-index="rs-130" data-transition="slideleft" data-slotamount="default" data-rotate="0"  data-title="Professional &nbsp; team" data-description="">
								<img src="images/banner1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="center" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">Teachers &nbsp; and &nbsp; tutors</span> <br>from &nbsp; various &nbsp;fields
                        </h1>
                        
							
                            
                          <div class="tp-caption fade tp-resizeme"
                           data-x="center" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                          <a href="./account/register.php" class="btn-common btn-white page-scroll">Join &nbsp; Now</a>
                       </div>  
                            
                            
                            
                            </li>
						
							<li class="text-right" data-index="rs-131" data-transition="slideleft"   data-rotate="0" data-title="student &nbsp; care" data-description="">
								<img src="images/banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="right" data-hoffset="" 
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">We care</span> <br> what &nbsp; you &nbsp;care
                        </h1>
                        
							
                           <div class="tp-caption fade tp-resizeme"
                           data-x="right" data-hoffset=""
                           data-y="280"
                           data-width = "full" 
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="./account/register.php" class="btn-common btn-white page-scroll">Join Now</a>
                       </div>  
                            </li>
							<!-- SLIDE  -->
						</ul>
					</div>
				</div>
<!-- END REVOLUTION SLIDER -->
						

<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities">
  <div class="container">
    <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">Our &nbsp; Specialities</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="fa fa-cog"></i>
        <h3><a href="./account/register.php">CS Core Courses</a></h3>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="fa fa-github-alt"></i>
        <h3><a href="./account/register.php">Machine Learning</a></h3>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="fa fa-language"></i>
        <h3><a href="./account/register.php">Language</a></h3>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="fa fa-fort-awesome"></i>
        <h3><a href="./account/register.php">Er Ci Yuan</a></h3>
      </div>
    </div>
    
  </div>
</section>


<!--Services-->
<section id="services" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
         <h2 class="heading">Featured &nbsp; Course</h2>
         <hr class="heading_space">
         <div class="slider_wrap">
        <div id="service-slider" class="owl-carousel">
		<?php
		$result = mysqli_query($con, "SELECT * FROM items where not deleted;");
		while($row = mysqli_fetch_array($result))
		{
		echo'
			  <div class="item">
				<div class="item_inner">
				<div class="image">
				<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
				  <a  href="./account/register.php"></a>
				</div>
				  <h3>';
		echo'
				  <a href="./account/register.php">'.$row["name"].'</a>
				  </h3>';
		echo'
				  <p>'.$row["teachername"].'</p>
				</div>
			  </div>
			  ';
		}
		?>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class="heading">Price &nbsp; list</h2>
        <hr class="heading_space">
        <ul class="menu_widget">
		<?php
		$result = mysqli_query($con, "SELECT * FROM items where not deleted;");
		while($row = mysqli_fetch_array($result))
		{
          echo'<li>'.$row["name"].'<span>USD&nbsp;$'.$row["price"].'</span></li>';
		}
		?>
        </ul>
    </div>
  </div>
</section>

			

<!-- Course Gallery -->
<section id="gallery" class="padding">
  <div class="container">
      <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">gallery</h2>
        <hr class="heading_space">
        <div class="work-filter">
          <ul class="text-center">
             <li><a href="javascript:;" data-filter="all" class="active filter">All Courses</a></li>
             <li><a href="javascript:;" data-filter=".Core" class="filter">Core</a></li>
             <li><a href="javascript:;" data-filter=".MachineLearning" class="filter">Machine Learning</a></li>
             <li><a href="javascript:;" data-filter=".Language" class="filter">Language</a></li>
             <li><a href="javascript:;" data-filter=".ErCiYuan" class="filter">Er Ci Yuan</a></li>
          </ul>
        </div>
      </div>
    </div>
     <div class="row">
      <div class="zerogrid">
        <div class="wrap-container">
          <div class="wrap-content clearfix home-gallery">
		<?php
		$result = mysqli_query($con, "SELECT * FROM items where not deleted;");
		while($row = mysqli_fetch_array($result))
		{
		?>
            <div class="col-1-6 mix work-item <?php echo "$row[type]" ?>">
			<?php 
			echo '
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
                  </div> 
                </div>
              </div>
            </div>
			';
			?>
		<?php
		}
		?>
          </div>
        </div>
       </div>
      </div>
  </div>
</section>



<!-- facts counter  -->
<section id="facts">
  <div class="container">
    <div class="row number-counters"> 
      <!-- first count item -->
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="counters-item row">
        <i class="fa fa-graduation-cap"></i> 
        <h2><strong data-to="9999">0</strong></h2>
          <p>Student Registered </p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
        <div class="counters-item  row"> 
        <i class="fa fa-send"></i>
        <h2><strong data-to="120">0</strong></h2>
          <p>Courses opened</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
        <div class="counters-item  row"> 
        <i class="fa fa-clock-o"></i>
        <h2><strong data-to="114514">0</strong></h2>
          <p>Total study hours</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
        <div class="counters-item  row"> 
        <i class="fa fa-user-plus"></i>
        <h2><strong data-to="76">0</strong></h2>
          <p>Full Time Tutors</p>
        </div>
      </div>
    </div>  
  </div>
</section>



<!-- Our members -->
<section id="cheffs" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; Members</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="cheffs_wrap_slider">
          <div id="our-cheffs" class="owl-carousel">
		<?php
		$result = mysqli_query($con, "SELECT * FROM items where not deleted;");
		while($row = mysqli_fetch_array($result))
		{
		echo'
            <div class="item">
              <div class="cheffs_wrap">
               <img src="data:image/jpeg;base64,'.base64_encode($row['teacherimage']).'">
               <h3>'.$row["teachername"].'</h3>
               <small>Head Of School</small>
              </div>
            </div>
			';
		}
		?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- feedback -->
<section id="testinomial" class="padding">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Student &nbsp;feedback</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>Awesome Courses. Much better than studying in the classroom!</h3>
          <p>M.M</p>
        </div>
        <div class="item">
          <h3>Good teachers, nice staff and student care. A good platform overall.</h3>
          <p>A.A</p>
        </div>
        <div class="item">
          <h3>I have never found online course so fantastic!</h3>
          <p>S.S</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>


<!--Footer-->
<footer class="padding-top bg_black">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footer_column">
        <h4 class="heading">Who are we?</h4>
        <hr class="half_space">
        <p class="half_space"></p>
        <p>Launched in Shanghai, We have grown from a small project to one of the largest online course providers in the world. We not only connect people to knowledge in every aspects but work closely with colleges to enable a wonderful ecosystem.</p>
      </div>
      <div class="col-md-4 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About us</a></li>     
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="./account/register.php">Order Now</a></li>
          
        </ul>
      </div>
      
      <div class="col-md-4 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p></p>
        <p class="address"><i class="icon-location"></i>3663 N. Zhongshan Rd., Shanghai 200062</p>
        <p class="address"><i class="fa fa-phone"></i>+86-666-666-666</p>
        <p class="address"><i class="icon-dollar"></i>student@cs.ecnu.edu.cn</p>
      </div> 
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2021 CsCourse. All Right Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>  
<script src="js/jquery.fancybox.js"></script>
<script src="js/functions.js" type="text/javascript"></script>
 
</body>
</html>
