<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="demos/assets/timeline.min.css">
	<link rel="stylesheet" href="demos/assets/jquery.steps.css">
 
	<!--Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors4e91.css?color=7E9680" type="text/css" /> <!--   Color -->
	<link rel="stylesheet" href="demos/assets/pay_jal.css" type="text/css" /> <!--   Custom CSS -->
	<!-- / -->

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title============================================= -->
	<title>Pey Jal Survekshan</title>

</head>

<body class="stretched sticky-footer">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="dark">
			<div class="container">

				<div class="d-flex align-items-center justify-content-center flex-column flex-lg-row py-3 py-lg-0">
					
				</div>

			</div>
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="border-full-header header-size-custom" data-sticky-shrink="false" data-sticky-offset="52">
			<div id="header-wrap">
				<div class="container-fluid">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="order-lg-1 col-auto px-0 mr-lg-0">
							<a href="index.php" class="standard-logo" data-dark-logo="demos/assets/images/logo.png"><img src="demos/assets/images/logo.png" alt="Logo"></a>
							<a href="index.php" class="retina-logo" data-dark-logo="demos/assets/images/logo-dark@2x.png"><img src="demos/assets/images/logo.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc order-lg-3 col-auto col-lg-2 px-0 justify-content-end">
							<a data-toggle="modal" data-target="#myModal" class="button-link" data-modal="modal-skew-from-left"><div>ULB Login</div></a>
							<a href="https://www.facebook.com/" target="_blank" class="social-icon si-facebook si-small si-light mb-0"><i class="icon-facebook"></i><i class="icon-facebook"></i></a>
							<a href="https://www.instagram.com/" target="_blank" class="social-icon si-instagram si-small si-light mb-0"><i class="icon-instagram"></i><i class="icon-instagram"></i></a>
							<a href="https://twitter.com/" target="_blank" class="social-icon si-paypal si-small si-light mb-0"><i class="icon-twitter"></i><i class="icon-twitter"></i></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu order-lg-2 col-lg-8 px-0 fill">

							<!-- Menu Left -->
							<ul class="menu-container">
								<li class="current menu-item"><a class="menu-link" href="index.php"><div >Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="about.php"><div class="hjuhju">About Us</div></a></li>
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div class="pjs">Pay Jal Savekshan</div></a></li> -->
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div>Pricing</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div>Dropdown 1</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Dropdown 2</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Dropdown 3</div></a></li>
									</ul>
								</li> -->
								<li class="menu-item"><a class="menu-link" href="citizen-form.php"><div>Citizen Participation</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Contact us</div></a></li>
								<li class="menu-item"><a class="menu-link" href="faqs.php"><div>FAQs</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->




<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style=" width: 70%; left: 16%; ">
      
        <!-- Modal Header -->
        <div class="modal-header login-header">
          <h4 class="modal-title Login-titile">ULB Login</h4>
          <button type="button" class="close close-button" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body login-body">
		    <form>				 
				 <div class="form-group">
					 <label for="exampleInputEmail1" class="login-label">Email address</label>
					 <input type="email" class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: ulb@gmail.com" require>
				 </div>
				 <div class="form-group">
					 <label for="exampleInputPassword1" class="login-label" placeholder="Enter Paasword">Password</label>
					 <!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
					 <input type="password" class="form-control login-input" id="exampleInputPassword1" autocomplete="off" require>
				 </div>
				 <a href="ulb-form.php" type="submit" class="btn btn-primary btn-block login-button">Sign in</a>
				 
				 <!-- <div class="sign-up">
					 Don't have an account? <a href="#">Create One</a>
				 </div> -->
			</form>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
 

