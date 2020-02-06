<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Add Parking Service Service</title>
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/fancybox.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageMenuPushWrap -->
		<div class="pageMenuPushWrap pageMenuPushWrap1">
			<!-- bgBaseWrap -->
			<div class="bgBaseWrap">
				<!-- pageHeader -->
				<header id="pageHeader" class="bgWhite shadow">
					<!-- pageHeaderWrap -->
					<div class="pageHeaderWrap">
						<!-- headerTopBar -->
						<div class="container">
							<!-- headerHolder -->
							<div class="headerHolder">
                              <!-- logo -->
                              <div class="logo logoCentered"><a href="home.html"><img src="images/logo.png" alt="LemanHouse"></a></div>
							</div>
						</div>
					</div>
				</header>
				<!-- main -->
				<main>
                  <!-- content -->
                  <section id="content" class="container pEqual">
                    <div class="addProperty">
                      <h1 class="fontNeuron">Add New Service</h1> 
                      <ol class="navSteps">
                        <li >
                          <a href="add-internetProvider-info.html">
                            <span class="text">Internet Provider</span>
                          </a>
                        </li>
                        <li class="current">
                            <a href="add-parking-info.html">
                              <span class="text">Parking</span>
                            </a>
                          </li>

                          <li>
                            <a href="add-cableOperator-info.html">
                              <span class="text">Cable Operator</span>
                            </a>
                          </li>

                        <li>
                          <a href="add-schoolvan-info.html">
                            <span class="text">School Van</span>
                          </a>
                        </li>
                        <li>
                          <a href="add-sweeper-info.html">
                            <span class="text">Sweeper</span>
                          </a>
                        </li>
                        <li>
                          <a href="add-watchman-info.html">
                            <span class="text">Watchman</span>
                          </a>
                        </li>
                        <li>
                          <a href="add-housemaid-info.html">
                            <span class="text">Housemaid</span>
                          </a>
                        </li>
                      </ol>
                      <div class="formContent">
                        <form>
                          <header class="contentHead">
                            <h2 class="fontNeuron">Basic Info</h2>
                          
                          </header>
                          <div class="row">
							<div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                  <label for="itemN-29">City</label>
                                  <select data-placeholder="Select Option" class="chosen-select" id="itemN-29">
                                      <option value="1">Rawalpindi</option>
                                      <option value="2">Islamabad</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                  <label for="itemN-30">City</label>
                                  <select data-placeholder="Select Option" class="chosen-select" id="itemN-30">
                                      <option value="1">Chur Chok</option>
                                      <option value="2">Rehmanabad</option>
                                    </select>
                                </div>
                              </div>


                            <div class="col-xs-12">
                              <div class="form-group">
                                <label for="itemN-15">Service Title*</label>
                                <input type="text" class="form-control" placeholder="Kiyani Parking" id="itemN-15">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-16">Area in marla</label>
                                <input type="number" class="form-control" placeholder="5" min="0" max="9999" id="itemN-16">
                              </div>
							</div>
							<div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                  <label for="itemN-20">Phone Number</label>
                                  <input type="number" class="form-control" placeholder="030000000000" id="itemN-20">
                                </div>
                              </div>
                        
							  <div class="col-xs-12">
                                <div class="form-group">
                                  <label for="itemN-19">Address</label>
                                  <input type="text" class="form-control" placeholder="Saddar near metro station" id="itemN-19">
                                </div>
							  </div>

                            <div class="col-xs-12">
                              <div class="form-group">
                              <label for="itemN-21">Description</label>
                                <textarea class="form-control" id="itemN-21" placeholder="Description"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="btnArea">
                            <button type="submit" class="btn btnDark"><a href="service-provider-view-profile.html">Register</a><i></i></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </section>
                  <!-- signupFormAside -->
					<form action="#" class="bgWhite signupFormAside">
						<div class="container signupFormAsideHolder">
							<!-- <span class="icnAbsolute elemenBlock fi flaticon-message"></span> -->
							<div class="col-xs-12 col-md-offset-2 col-md-6">
								<h3 class="fontNeuron textSecondary">Download our app</h3>
								<p>Download our app from google play store</p>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<!-- <input type="email" id="email" class="form-control elemenBlock" placeholder="Your email"> -->
									<button type="button" class="buttonReset fi flaticon-navigation"></button>
								</div>
							</div>
						</div>
					</form>
				</main>
			</div>
			<!-- pageFooterBlock -->
			<div class="pageFooterBlock">
				<!-- pageAside -->
				<aside class="pageAside textWhite">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col">
								<h2 class="fontNeuron fwSemi text-uppercase">House Finder</h2>
								<p>FYP Project</p>
								<address>
									<dl>
										<dt><i class="fi flaticon-navigation"></i></dt>
										<dd>Golra Mor Islamabad, Pakistan</dd>
										<dt><i class="fi flaticon-24-hours"></i></dt>
										<dd><a href="#">+92 3065085832</a></dd>
										<dt><i class="fi flaticon-mail"></i></dt>
										<dd><a href="#">info@housefinder.com</a></dd>
									</dl>
								</address>
							</div>
							<!-- ftNav -->
							<nav class="col-xs-12 ftNav col-sm-4 col">
								<h2 class="fontNeuron fwSemi text-uppercase">Useful Links</h2>
								<div class="ftNavListsHolder">
									<ul class="list-unstyled">
										<li><a href="about.html">About US</a></li>
										<li><a href="contact.html">Contact Support</a></li>
										<li><a href="properties-faqs.html">FAQs</a></li>
									</ul>
									<ul class="list-unstyled">
										<li><a href="properties-faqs.html">FAQ</a></li>
										<li><a href="blog-full-width.html">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</nav>
							<div class="col-xs-12 col-sm-4 col">
								<h2 class="fontNeuron fwSemi text-uppercase">LATEST PROPERTIES</h2>
								<!-- postsWidgetList -->
								<ul class="list-unstyled postsWidgetList">
									<li>
										<div class="alignleft">
											<a href="properties-single2.html">
												<img src="https://via.placeholder.com/90x70" alt="image description">
											</a>
										</div>
										<div class="descrWrap">
											<h3 class="fwNormal"><a href="properties-single2.html">Do what you love and tomorrow will pay</a></h3>
											<h4 class="fwSemi">  1,27,000</h4>
										</div>
									</li>
									<li>
										<div class="alignleft">
											<a href="properties-single2.html">
												<img src="https://via.placeholder.com/90x70" alt="image description">
											</a>
										</div>
										<div class="descrWrap">
											<h3 class="fwNormal"><a href="properties-single2.html">We’re ready for the TRID rules!</a></h3>
											<h4 class="fwSemi">  527,000</h4>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</aside>
                
				<!-- pageFooter -->
				<footer id="pageFooter">
					<div class="container pageFooterHolder">
						<div class="row">
							<div class="col-xs-12 col-sm-push-6 col-sm-6">
								<!-- pageFooterSocial -->
								<ul class="socialNetworks list-unstyled pageFooterSocial">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-pull-6 col-sm-6">
								<p>2019 <a href="#">House Finder</a> - All rights reserved</p>
							</div>
						</div>
					</div>
				</footer>
				<!-- btnScrollToTop -->
				<a href="#pageWrapper" class="btnScrollToTop smooth textWhite">Scroll Top <i class="fi flaticon-arrows btnScrollIcn"></i></a>
				<span class="bgCover elemenBlock" style="background-image: url(https://via.placeholder.com/1920x520);"></span>
			</div>
		</div>
	</div>
	<!-- include jQuery library -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap-slider.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
</body>
</html>