<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Engage - Multi-Purose Bootstrap HTML5 Template
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="<?= base_url(); ?>assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="<?= base_url(); ?>assets/fonts/simple-line-icons.css">    
     
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/extras/settings.css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/colors/green.css" media="screen" />       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  </head>
  <body>

  <!-- Header area wrapper starts -->
    <header id="header-wrap">

      <!-- Roof area starts -->
      
      <!-- Roof area Ends -->

      <!-- Header area starts -->
      <section id="header">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-light" data-spy="affix" data-offset-top="50">
          <div class="container">
            <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
              ☰
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
              <img src="<?= base_url(); ?>assets/img/logo.png" alt="">
            </a>
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="index.html" role="button" aria-haspopup="true" aria-expanded="false">Home</a>                  
                </li>                                     
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Pages
                  </a>
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="about-us.html">About Us</a>
                    <a class="dropdown-item" href="about-us2.html">About Us 2</a>
                    <a class="dropdown-item" href="team-page.html">Team Members</a>
                    <a class="dropdown-item" href="services.html">Services</a>
                    <a class="dropdown-item" href="service2.html">Services 2</a>
                    <a class="dropdown-item" href="contact1.html">Contact Us</a>
                    <a class="dropdown-item" href="contact1.html">Contact Us 2</a>
                    <a class="dropdown-item" href="pricing.html">Pricing</a>
                    <a class="dropdown-item" href="404.html">404</a>
                  </div>
                </li>             
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Shortcodes 
                  </a>
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="accordions.html">Accordions</a>
                    <a class="dropdown-item" href="tabs.html">Tabs</a>
                    <a class="dropdown-item" href="buttons.html">Buttons</a>
                    <a class="dropdown-item" href="skills.html">Progress Bars</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    <a class="dropdown-item" href="clients.html">Clients</a>
                    <a class="dropdown-item" href="icon.html">Icon Boxes</a>
                    <a class="dropdown-item" href="team.html">Team</a>
                    <a class="dropdown-item" href="carousel.html">Carousel</a>
                    <a class="dropdown-item" href="maps.html">Google Maps</a>
                    <a class="dropdown-item" href="pricing.html">Pricing tables</a>
                    <a class="dropdown-item" href="notification.html">Notification</a>
                  </div> 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Portfolio
                  </a>                    
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="portfolio-col-2.html">Portfolio 2 Columns</a>
                    <a class="dropdown-item" href="portfolio-col-3.html">Portfolio 3 Columns</a>
                    <a class="dropdown-item" href="portfolio-col-4.html">Portfolio 4 Columns</a>
                    <a class="dropdown-item" href="portfolio-item.html">Portfolio Single</a>
                  </div>  
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Blog
                  </a>                    
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="sidebar-right.html">Sidebar Right</a>
                    <a class="dropdown-item" href="sidebar-left.html">Sidebar Left</a>
                    <a class="dropdown-item" href="sidebar-full.html">Full Width</a>
                    <a class="dropdown-item" href="blog-single.html">Single Post</a>
                    <a class="dropdown-item" href="blog-grids.html">Blog Grids</a>
                  </div>                   
                </li> 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Contact Us
                  </a>
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="contact1.html">Contact us 1</a>
                    <a class="dropdown-item" href="contact2.html">Contact us 2</a>
                  </div> 
                </li>          
                <!-- Search in right of nav -->
                <li class="nav-item" class="search">
                  <form class="top_search clearfix">
                    <div class="top_search_con">
                      <input class="s" placeholder="Search Here ..." type="text">
                      <span class="top_search_icon"><i class="icon-magnifier"></i></span>
                      <input class="top_search_submit" type="submit">
                    </div>
                  </form>
                </li>
                <!-- Search Ends -->                  
              </ul>  
            </div>              
              <!-- Form for navbar search area -->
              <form class="full-search">
                <div class="container">
                  <input type="text" placeholder="Type to Search">
                  <a href="#" class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                  </a>
                </div>
              </form>
              <!-- Search form ends -->
          </div>
        </nav>
        <!-- Navbar Ends -->

      </section> 
    <!-- Start Content -->
<div id="free-promo" style="
    text-align: center;
    margin-top: 60px;
">
      <div class="container">
          <div class="row text-center">
              <div class="error-page">
                <h2><a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/">You are Using Free Version!<br> Purchase Full Version to Get All Pages and Features</a></h2>
                <a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/" class="btn btn-common btn-lg">Purchase Now</a>
            </div>
          </div>
      </div>         
    </div>
    <!-- End Content --> 
    </header>
    <!-- Header-wrap Section End -->
   
    <!-- Service Block-1 Section -->
    <section id="service-block-main" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">        
          <h1 class="section-title wow fadeIn animated" data-wow-delay=".2s">
           WHY CHOOSE US?
          </h1>
          <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item wow fadeInUpQuick animated" data-wow-delay=".5s">
              <div class="icon-wrapper">
                <i class="icon-layers pulse-shrink">
                </i>
              </div>
              <h2>
                40+ Pages
              </h2>
              <p>
                Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item wow fadeInUpQuick animated" data-wow-delay=".8s">
              <div class="icon-wrapper">
                <i class="icon-settings pulse-shrink">
                </i>
              </div>
              <h2>
                Bootstrap4 and HTML5
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat Quidem!
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item wow fadeInUpQuick animated" data-wow-delay="1.1s">
              <div class="icon-wrapper">
                <i class="icon-energy pulse-shrink">
                </i>
              </div>
              <h2>
                Refreshing Design
              </h2>
              <p>
                Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item  wow fadeInUpQuick animated" data-wow-delay="1.4s">
              <div class="icon-wrapper">
                <i class="icon-cup pulse-shrink">
                </i>
              </div>
              <h2>
                Crafted Carefully
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat Quidem!
              </p>
            </div>
          </div><!-- Service-Block-1 Item Ends -->
        </div>
      </div><!-- Container Ends -->
    </section><!-- Service Main Section Ends -->

    <!-- About Us Section Start -->
    <section class="split section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="images">
              <img src="<?= base_url(); ?>assets/img/about/plain-why-choose-us-2.png" alt="">
            </div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="content-inner">
              <h2 class="title">BUILT-WITH BOOTSTRAP4, A NEW EXPRIENCE</h2>
              <p class="lead">We Crafted an awesome design library that is robust and intuitive to use. No matter you're building a business presentation websit or a complex web application our design blocks can easily be adapted for your needs.</p>
              <div class="details-list">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <h3>Minimal Coding</h3>
                    <p>The design blocks come with ready to use HTML colde which makes the design kit suitable for developers and designers of all skill levels.</p>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <h3>Responsive</h3>
                    <p>Your website will look good on any device. Each design block has been individually tested on desktop. tablets and smartphones.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- About Us Section Ends -->   

    <!-- Other Services Section -->
    <section id="other-services" class="section">
      <div class="container">
      <!-- Container Starts -->
        <div class="row">
          <h1 class="section-title wow fadeInUpQuick">
            OUR SERVICES
          </h1>
          <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
          <!-- Other Service Item Wrapper Starts -->
          <div class="col-sm-6 col-md-6">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home"><i class="icon-screen-desktop"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"><i class="icon-settings"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"><i class="icon-heart"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"><i class="icon-layers"></i></a>
            </li>
          </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">
                <div class="service-content wow fadeInUpQuick">
                  <h3>Responsive Design</h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>            
              <div class="tab-pane" id="profile" role="tabpanel">
                <div class="service-content wow fadeInUpQuick">
                  <h3>Very useful custom widget </h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>
              <div class="tab-pane" id="messages" role="tabpanel">
                <div class="service-content fadeInUpQuick">
                  <h3>Graphic Design</h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>
              <div class="tab-pane" id="settings" role="tabpanel">
                <div class="service-content fadeInUpQuick">
                  <h3>Parallax Background</h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Other Service Item Wrapper Ends -->

          <!-- Porgress Strts -->
          <div class="col-sm-6 com-md-6">            
            <div class="skill-shortcode">
              <div class="skill">
                <p>
                  Web Design 91%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="91">
                    <span class="sr-only">
                    91% Complete
                    </span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>
                  HTML/CSS 86%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="86">
                    <span class="sr-only">
                    86% Complete
                    </span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>
                  Graphic Design 78%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="78">
                    <span class="sr-only">
                    60% Complete
                    </span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>
                  WordPress 65%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="65">
                    <span class="sr-only">
                    60% Complete
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Other Service Image Ends-->
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Other Services Section End -->      
   
<div id="free-promo" style="
    text-align: center;
    margin-top: 60px;
">
      <div class="container">
          <div class="row text-center">
              <div class="error-page">
                <h2><a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/">You are Using Free Version!<br> Purchase Full Version to Get All Pages and Features</a></h2>
                <a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/" class="btn btn-common btn-lg">Purchase Now</a>
            </div>
          </div>
      </div>         
    </div>    

    <!-- Featured Section Starts -->
    <section id="featured" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
          <h1 class="section-title wow fadeInUpQuick">
            CORE FEATURES
          </h1>
          <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
          <!-- Start Service Icon 1 -->
          <div class="col-md-4 col-sm-6" data-animation="fadeIn" data-animation-delay="01">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="icon-present">
                </i>
              </div>
              <div class="featured-content">
                <h4>
                  Tons of shortcodes
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <!-- End featured Icon 1 -->
          <!-- Start featured Icon 1 -->
          <div class="col-md-4 col-sm-6" data-animation="fadeIn" data-animation-delay="01">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="icon-rocket">
                </i>
              </div>
              <div class="featured-content">
                <h4>
                  Endless posibilites
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <!-- End featured Icon 1 -->
          <!-- Start featured Icon 1 -->
          <div class="col-md-4 col-sm-6" data-animation="fadeIn" data-animation-delay="01">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="icon-pencil">
                </i>
              </div>
              <div class="featured-content">
                <h4>
                  24/7 Support
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <!-- End featured Icon 1 -->
          <!-- Start featured Icon 1 -->
          <div class="col-md-4 col-sm-6" data-animation="fadeIn" data-animation-delay="01">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="icon-diamond icon-large icon-effect">
                </i>
              </div>
              <div class="featured-content">
                <h4>
                  Great Ideas
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <!-- End featured Icon 1 -->
          <!-- Start featured Icon 1 -->
          <div class="col-md-4 col-sm-6" data-animation="fadeIn" data-animation-delay="01">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="icon-settings">
                </i>
              </div>
              <div class="featured-content">
                <h4>
                  Perfect Coding
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <!-- End featured Icon 1 -->
          <!-- Start featured Icon 1 -->
          <div class="col-md-4 col-sm-6" data-animation="fadeIn" data-animation-delay="01">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="icon-star">
                </i>
              </div>
              <div class="featured-content">
                <h4>
                  Unique Design
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <!-- End featured Icon 1 -->
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Featured Section Ends -->
      
<div id="free-promo" style="
    text-align: center;
    margin-top: 60px;
">
      <div class="container">
          <div class="row text-center">
              <div class="error-page">
                <h2><a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/">You are Using Free Version!<br> Purchase Full Version to Get All Pages and Features</a></h2>
                <a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/" class="btn btn-common btn-lg">Purchase Now</a>
            </div>
          </div>
      </div>         
    </div>

    <!-- Team Section -->
    <section id="team" class="section">
      <!-- Container Starts -->
      <div class="container">        
        <!-- Row Starts -->
        <div class="row">
					<h1 class="section-title wow fadeInDown" data-wow-delay=".5s">
	          MEET OUR TEAM
	        </h1>
	        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
          <div class="col-sm-6 col-md-3">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick" data-wow-delay="1s">
	            <figure class="team-profile">
	              <img src="<?= base_url(); ?>assets/img/team/team-01.jpg" alt="">
	              <figcaption class="our-team">
	                <div class="details">
	                	<p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		               <div class="orange-line"></div>
		               <div class="social"> 
			               <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a> 
			               <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
			               <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
		               </div>
	                </div>
		            </figcaption>
	            </figure>
	            <div class="info">
	              <h2>
	                Sara smith
	              </h2>
	              <div class="orange-line"></div>
	              <p>
	                Founder And ceo
	              </p>
	            </div>
	          </div>
	          <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
          	<!-- Team Item Starts -->
            <div class="team-item wow fadeInUpQuick" data-wow-delay="1.4s">
             <figure class="team-profile">
	               <img src="<?= base_url(); ?>assets/img/team/team-02.jpg" alt="">
	              <figcaption class="our-team">
	                <div class="details">
	                	<p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		               <div class="orange-line"></div>
		               <div class="social"> 
			               <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a> 
			               <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
			               <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
		               </div>
	                </div>
		            </figcaption>
	            </figure>
	            <div class="info">
	              <h2>
	                Sommer Christian
	              </h2>
	              <div class="orange-line"></div>
	              <p>
	                creative studio head
	              </p>
	            </div>
            </div><!-- Team Item Starts -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUpQuick" data-wow-delay="1.8s">
              <figure class="team-profile">
	                <img src="<?= base_url(); ?>assets/img/team/team-03.jpg" alt="">
	              <figcaption class="our-team">
	                <div class="details">
	                	<p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		               <div class="orange-line"></div>
		               <div class="social"> 
			               <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a> 
			               <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
			               <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
		               </div>
	                </div>
		            </figcaption>
	            </figure>
	            <div class="info">
	              <h2>
	                Jane lupkin
	              </h2>
	              <div class="orange-line"></div>
	              <p>
	                magento developer
	              </p>
	            </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          
          <div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUpQuick" data-wow-delay="2.2s">
              <figure class="team-profile">
	              <img src="<?= base_url(); ?>assets/img/team/team-04.jpg" alt="">
	              <figcaption class="our-team">
	                <div class="details">
	                	<p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		               <div class="orange-line"></div>
		               <div class="social"> 
			               <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a> 
			               <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
			               <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
		               </div>
	                </div>
		            </figcaption>
	            </figure>
	            <div class="info">
	              <h2>
	                Sebastian roll
	              </h2>
	              <div class="orange-line"></div>
	              <p>
	                Logo / branding designer
	              </p>
	            </div>
            </div><!-- Team Item Ends -->
          </div>          
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
    </section>
    <!-- Team Section End -->
    
<div id="free-promo" style="
    text-align: center;
    margin-top: 60px;
">
      <div class="container">
          <div class="row text-center">
              <div class="error-page">
                <h2><a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/">You are Using Free Version!<br> Purchase Full Version to Get All Pages and Features</a></h2>
                <a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/" class="btn btn-common btn-lg">Purchase Now</a>
            </div>
          </div>
      </div>         
    </div>
    
    <!-- Testimonial Section -->
    <section id="testimonial" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="testimonial-item" class="owl-carousel">
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="<?= base_url(); ?>assets/img/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Steve Austin <a href="#">envato.com </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="<?= base_url(); ?>assets/img/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Chelsey Siltanen<a href="#">Microsoft</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="<?= base_url(); ?>assets/img/testimonial/img3.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Pamela Fox<a href="#">Khan Academy</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="<?= base_url(); ?>assets/img/testimonial/img4.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    janna Hagan<a href="#">Google</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="<?= base_url(); ?>assets/img/testimonial/img5.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Paul Tweedy<a href="#">BBC</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Testimonial Section End -->                

<div id="free-promo" style="
    text-align: center;
    margin-top: 60px;
">
      <div class="container">
          <div class="row text-center">
              <div class="error-page">
                <h2><a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/">You are Using Free Version!<br> Purchase Full Version to Get All Pages and Features</a></h2>
                <a rel="nofollow" href="https://rebrand.ly/gg-engage-purchase/" class="btn btn-common btn-lg">Purchase Now</a>
            </div>
          </div>
      </div>         
    </div>

    <!-- Clients Section -->
    <section id="clients" class="section">
      <!-- Container Ends -->
      <div class="container">
        <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
          CLIENTS
        </h1>
        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
        <div class="wow fadeInUpQuick" data-wow-delay=".9s">
          <!-- Row and Scroller Wrapper Starts -->
          <div class="row" id="clients-scroller">
            <div class="client-item-wrapper">
              <img src="<?= base_url(); ?>assets/img/clients/img1.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="<?= base_url(); ?>assets/img/clients/img2.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="<?= base_url(); ?>assets/img/clients/img3.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="<?= base_url(); ?>assets/img/clients/img4.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="<?= base_url(); ?>assets/img/clients/img5.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="<?= base_url(); ?>assets/img/clients/img6.png" alt="">
            </div>
          </div><!-- Row and Scroller Wrapper Starts -->
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Client Section End -->        
    
    <!-- Footer Section -->
    <footer>
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              ABOUT US
            </h3>
            <p>
              Etiam ornare condimentum massa et scelerisque. Mauris nibh ipsum, laoreet at venenatis ac, rutrum sed risus, 
            </p> 
            <p>Aliquam magna nibh, mattis a urna nec. Semper venenatis magna.</p>
            <div class="social-footer">
              <a href="#"><i class="fa fa-facebook icon-round"></i></a>
              <a href="#"><i class="fa fa-twitter icon-round"></i></a>
              <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
              <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
            </div>           
          </div><!-- Footer Widget Ends -->
          
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".2s">
            <h3 class="small-title">
              TWITTER
            </h3>
            <ul class="recent-tweets">
              <li class="tweet">
                My <a href="#">@Quora</a>                
                <span class="tweet-text">
                  answer to What's the best FAQ plugin for WordPress?
                </span>
                <a href="#">qr.ae/RFTbIGa</a> 
                <span class="tweet-date">
                  August 21, 2015 10:29pm
                </span>
              </li>
              
              
              <li class="tweet">
                WPB Advanced FAQ | Probably The Best WordPress FAQ Plugin <a href="#">wpbean.com/wpb-advanced-faq-pr…</a>               
                <span class="tweet-text">
                  via
                </span>
                <a href="#">@wpbean</a> 
                <span class="tweet-date">
                  August 19, 2015 8:49 am
                </span>
              </li>
              
              
            </ul>
          </div><!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              GALLERY
            </h3>
            <div class="plain-flicker-gallery">
              <a href="#" title="Pan Masala"><img src="<?= base_url(); ?>assets/img/flicker/img1.jpg" alt=""></a>
              <a href="#" title="Sports Template for Joomla"><img src="<?= base_url(); ?>assets/img/flicker/img2.jpg" alt=""></a>
              <a href="" title="Apple Keyboard"><img src="<?= base_url(); ?>assets/img/flicker/img3.jpg" alt=""></a>
              <a href="" title="Hard Working"><img src="<?= base_url(); ?>assets/img/flicker/img4.jpg" alt=""></a>
              <a href="" title="Smile"><img src="<?= base_url(); ?>assets/img/flicker/img5.jpg" alt=""></a>
              <a href="" title="Puzzle"><img src="<?= base_url(); ?>assets/img/flicker/img6.jpg" alt=""></a>
            </div>
          </div><!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              SUBSCRIBE US
            </h3>
            <div class="contact-us">
              <p>Tellus aliquam at. Pellentesque gravida vel eros et pretium</p>
              <form>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
              </div>
              <button type="submit" class="btn btn-common">Submit</button>
            </form>
            </div>
          </div><!-- Footer Widget Ends -->
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
      
      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="copyright-text">
                ©  2016 Engage. All right reserved. Designed with by <a href="#">GrayGrids</a>
              </p>
            </div>
            <div class="col-md-6  col-sm-6">
              <ul class="nav nav-inline pull-xs-right">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sitemap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms of services</a>
                </li>
              </ul>        
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->
      
    </footer>
    <!-- Footer Section End-->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up">
      </i>
    </a>

    <div class="bottom"> <a href="#" class="settings"></a> </div>

    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="<?= base_url(); ?>assets/js/jquery-min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!--Text Rotator-->
    <script src="<?= base_url(); ?>assets/js/jquery.mixitup.js"></script>
    <!--WOW Scroll Spy-->
    <script src="<?= base_url(); ?>assets/js/wow.js"></script>
    <!-- OWL Carousel -->
    <script src="<?= base_url(); ?>assets/js/owl.carousel.js"></script>
 
    <!-- WayPoint -->
    <script src="<?= base_url(); ?>assets/js/waypoints.min.js"></script>
    <!-- CounterUp -->
    <script src="<?= base_url(); ?>assets/js/jquery.counterup.min.js"></script>
    <!-- ScrollTop -->
    <script src="<?= base_url(); ?>assets/js/scroll-top.js"></script>
    <!-- Appear -->
    <script src="<?= base_url(); ?>assets/js/jquery.appear.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.vide.js"></script>
     <!-- All JS plugin Triggers -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="<?= base_url(); ?>assets/js/color-switcher.js"></script>
    
  </body>
</html>