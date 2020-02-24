<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Blog</title>
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
				<header id="pageHeader" class="bgWhite offsetBottom">
					<!-- pageHeaderWrap -->
					<div class="pageHeaderWrap">
						<!-- headerTopBar -->
						<div class="bgLightDark headerTopBar textLightDark">
							<div class="container">
								<div class="row">
									<div class="col-xs-6 col-sm-4">
									</div>
									<div class="col-xs-6 col-sm-8 text-right">
										<!-- topBarPanelList -->
										<ul class="list-unstyled topBarPanelList">
											<li class="hidden-xs">
												<!-- topBarPanelListSocial -->
												<ul class="list-unstyled socialNetworks topBarPanelListSocial">
													<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#"><i class="fab fa-google"></i></a></li>
												</ul>
											</li>
											<li>
												<!-- topBarPanelListDropdown -->
												<div class="dropdown topBarPanelListDropdown">
													<button class="dropdown-toggle buttonReset" type="button" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></button>
													<!-- dropdownLang -->
													<ul class="dropdown-menu" aria-labelledby="dropdownLang">
														<li><a href="#">English</a></li>
														<li><a href="#">Turkish</a></li>
														<li><a href="#">French</a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<!-- headerHolder -->
							<div class="headerHolder">
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										<!-- logo -->
										<div class="logo"><a href="home.html"><img src="images/logo.png" alt="LemanHouse"></a></div>
									</div>
									<div class="col-xs-6 col-sm-9 d-flex">
										<!-- headerContactList -->
										<ul class="list-unstyled headerContactList">
											<li>
												<a href="tel:+12463450695" class="icn icnBubble noShrink text-info"><i class="fi flaticon-24-hours"></i></a>
												<div class="descr hidden-xs">
													<strong class="fwNormal elemenBlock text"><a href="#">+92 3065085832</a></strong>
													<strong class="fwNormal elemenBlock text"><a href="#">info@housefinder.com</a></strong>
												</div>
											</li>
											<li class="hidden-xs">
												<span class="icn icnJumping text-info noShrink"><i class="fi flaticon-pin-1"></i></span>
												<div class="descr">
													<strong class="fwNormal elemenBlock text">Riphah International University I-14 <br>Golra mor Islamabad, Pakistan</strong>
												</div>
											</li>
										</ul>
										<!-- headerSearchForm -->
										<form action="#" class="headerSearchForm">
											<a class="headerSearchOpener roundedCircle bgWhite" role="button" data-toggle="collapse" href="#headerSearchFormcollapse" aria-expanded="false" aria-controls="headerSearchFormcollapse"><i class="fi flaticon-search btnOpen"></i><i class="fas fa-times btnClose"></i></a>
											<!-- headerSearchFormcollapse -->
											<div class="collapse searchFormcollapse bgWhite" id="headerSearchFormcollapse" aria-expanded="false" role="form">
												<div class="form-group form-group-lg">
													<label for="s" class="labelIcn"><i class="fi flaticon-search"></i></label>
													<input type="search" id="s" class="form-control elemenBlock" placeholder="Search&hellip;">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- pageNav -->
							<nav id="pageNav" class="navbar navbar-default pageNav1">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header hidden-sm hidden-md hidden-lg">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- navbar collapse -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<div class="navigation-wrapper">
										<strong class="h elemenBlock h4 textWhite text-center hidden-sm hidden-md hidden-lg menuTitle fontNeuron" id="menu-title">Menu</strong>
										<!-- pageMainNav -->
										<ul class="nav navbar-nav pageMainNav pageMainNav1">
											<li >
												<a href="home.html" >Home<span></span></a>
											</li>
											<!-- remove dropdownFull class when its just regular dropdown -->
											<li>
												<a href="about.html" >About <span></span></a>
											</li>
											<li>
												<a href="testimonials.html">Testimonials<span></span></a>
											</li>
											<li>
												<a href="blog-full-width.html">Blog<span></span></a>
											</li>
											<li>
												<a href="contact.html">Contact</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- userOptions -->
								<div class="userOptions">
									<!-- UserLinksList -->
									<ul class="list-unstyled UserLinksList">
										<li>
											<a href="#popup1" class="lightbox">
												<i class="fi flaticon-social icn"></i>
												<strong class="text fwNormal hidden-xs hidden-sm">Login</strong>
											</a>
										</li>
										<li>
											<a href="#popup1" class="lightbox">
												<i class="fi flaticon-edit icn"></i>
												<strong class="text fwNormal hidden-xs hidden-sm">Register</strong>
											</a>
										</li>
									</ul>
									<!-- headerModalOpener -->
									<a href="#" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i> Submit Property</a>
								</div>
							</nav>
						</div>
					</div>
				</header>
				<!-- main -->
				<main>
					<!-- findFormBlock -->
					<form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop">
					</form>
					<!-- twoColumns -->
					<section class="twoColumns container">
						<!-- contentFiltersHeadingWrap -->
						<header class="contentFiltersHeadingWrap row">
							<div class="col-xs-12 col-sm-10">
								<h1 class="fontNeuron">Blog</h1>
							</div>
							<div class="col-xs-12 col-sm-2">
								<!-- viewFilterLinks -->
								<ul class="list-unstyled viewFilterLinks">
									<li><a href="#"><i class="fi flaticon-share"></i></a></li>
									<li><a href="#"><i class="fi flaticon-printer"></i></a></li>
								</ul>
							</div>
						</header>
						<div class="row">
							<!-- content -->
							<div id="content">
	                          	<div class="col-xs-12 col-sm-6 col-md-4">
									<!-- newsPostColumn -->
									<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
										<div class="aligncenter">
											<a href="blog-detail.html">
												<img src="https://via.placeholder.com/360x260" alt="image description">
											</a>
										</div>
										<h2 class="fontNeuron"><a href="blog-detail.html">Getting Started Designing Apps for the Apple Watch</a></h2>
										<p>
											<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
											<time datetime="2011-01-12">February 9, 2017</time>
											<a href="#" class="commentsCount">12 comment</a>
										</p>
										<p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
										<footer class="PostColumnFoot">
											<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
										</footer>
									</article>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<!-- newsPostColumn -->
									<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
										<div class="aligncenter">
											<a href="blog-detail.html">
												<img src="https://via.placeholder.com/360x260" alt="image description">
											</a>
										</div>
										<h2 class="fontNeuron"><a href="blog-detail.html">Getting Started Designing Apps for the Apple Watch</a></h2>
										<p>
											<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
											<time datetime="2011-01-12">February 9, 2017</time>
											<a href="#" class="commentsCount">12 comment</a>
										</p>
										<p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
										<footer class="PostColumnFoot">
											<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
										</footer>
									</article>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<!-- newsPostColumn -->
									<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
										<div class="aligncenter">
											<a href="blog-detail.html">
												<img src="https://via.placeholder.com/360x260" alt="image description">
											</a>
										</div>
										<h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get<br class="hidden-xs"> From</a></h2>
										<p>
											<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
											<time datetime="2011-01-12">February 9, 2017</time>
											<a href="#" class="commentsCount">12 comment</a>
										</p>
										<p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
										<footer class="PostColumnFoot">
											<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
										</footer>
									</article>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<!-- newsPostColumn -->
									<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
										<div class="aligncenter">
											<a href="blog-detail.html">
												<img src="https://via.placeholder.com/360x260" alt="image description">
											</a>
										</div>
										<h2 class="fontNeuron"><a href="blog-detail.html">One Thing That Is Really Make This Blog ...</a></h2>
										<p>
											<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
											<time datetime="2011-01-12">February 9, 2017</time>
											<a href="#" class="commentsCount">12 comment</a>
										</p>
										<p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
										<footer class="PostColumnFoot">
											<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
										</footer>
									</article>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<!-- newsPostColumn -->
									<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
										<div class="aligncenter">
											<a href="blog-detail.html">
												<img src="https://via.placeholder.com/360x260" alt="image description">
											</a>
										</div>
										<h2 class="fontNeuron"><a href="blog-detail.html">This Week I Thought It Would Be Good ...</a></h2>
										<p>
											<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
											<time datetime="2011-01-12">February 9, 2017</time>
											<a href="#" class="commentsCount">12 comment</a>
										</p>
										<p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
										<footer class="PostColumnFoot">
											<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
										</footer>
									</article>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<!-- newsPostColumn -->
									<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
										<div class="aligncenter">
											<a href="blog-detail.html">
												<img src="https://via.placeholder.com/360x260" alt="image description">
											</a>
										</div>
										<h2 class="fontNeuron"><a href="blog-detail.html">The Leader In Real Estate Information Systems</a></h2>
										<p>
											<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
											<time datetime="2011-01-12">February 9, 2017</time>
											<a href="#" class="commentsCount">12 comment</a>
										</p>
										<p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor torquent...</p>
										<footer class="PostColumnFoot">
											<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
										</footer>
									</article>
								</div>
								<div class="col-xs-12">
									<!-- navigation pagination -->
									<nav class="navigation pagination pagination1 fontNeuron" role="navigation">
										<div class="nav-links">
											<a class="prev page-numbers" href="#">Previous</a>
											<a class="page-numbers" href="#">1</a>
											<span class="page-numbers current">2</span>
											<a class="page-numbers" href="#">3</a>
											<span class="page-numbers dots">&hellip;</span>
											<a class="page-numbers" href="#">22</a>
											<a class="next page-numbers" href="#">Next</a>
										</div>
									</nav>
								</div>
							</div>
                        </div>
					</section>
					<!-- signupFormAside -->
					<form action="#" class="bgWhite signupFormAside">
						<div class="container signupFormAsideHolder">
							<span class="icnAbsolute elemenBlock fi flaticon-message"></span>
							<div class="col-xs-12 col-md-offset-2 col-md-6">
								<h3 class="fontNeuron textSecondary">Download our app</h3>
								<p>Download our app from google play store</p>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
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
		<!-- pagePopupWrap -->
		<div class="popup-holder">
			<div id="popup1" class="lightbox-demo">
				<!-- popupLoginFrom -->
				<form action="#" class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
					<ul class="list-unstyled popupTabsetList text-center fwBold text-uppercase fontNeuron">
						<li class="active"><a href="#tab01">LOGIN</a></li>
						<li><a href="#tab02">REGISTER</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab01" class="tab-active">
							<div class="popupColsHolder">
								<div class="col bgWhite">
									<div class="form-group">
										<input type="text" class="form-control elemenBlock" placeholder="User Namer">
									</div>
									<div class="form-group">
										<input type="password" class="form-control elemenBlock" placeholder="Password">
									</div>
									<div class="form-group">
										<label class="fwNormal customLabelCheck">
											<input type="checkbox" class="customFormInputReset">
											<span class="fakeCheckbox"></span>
											<span class="fakeLabel">Remember me</span>
										</label>
									</div>
									<button type="submit" class="btn btnSecondary elemenBlock fontNeuron fwNormal text-uppercase btnSubmit">LOGIN</button>
									<a href="#" class="linkForget">Forgot Password?</a>
								</div>
								<div class="col">
									<p>You Can Login using your facebook Profile or Google account</p>
									<button type="button" class="btnSocial btnFb elemenBlock"><i class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
									<button type="button" class="btnSocial btnTw elemenBlock"><i class="fab fa-twitter btnIco"></i> Twitter Connect</button>
									<button type="button" class="btnSocial btnG elemenBlock"><i class="fab fa-google btnIco"></i> Google Connect</button>
								</div>
							</div>
						</div>
						<div id="tab02">
							<div class="popupColsHolder">
								<div class="col bgWhite">
									<div class="form-group">
										<input type="text" class="form-control elemenBlock" placeholder="Full Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control elemenBlock" placeholder="User Name">
									</div>
									<div class="form-group">
										<input type="password" class="form-control elemenBlock" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" class="form-control elemenBlock" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<input type="email" class="form-control elemenBlock" placeholder="Email Address">
									</div>
									<div class="form-group">
										<select data-placeholder="Type" class="chosen-select">
											<option value="1">For Rent</option>
											<option value="2">For Sale</option>
											<option value="3">House</option>
											<option value="4">Property</option>
											<option value="5">Real Estate</option>
										</select>
									</div>
									<div class="form-group">
										<label class="fwNormal customLabelCheck">
											<input type="checkbox" class="customFormInputReset" checked>
											<span class="fakeCheckbox"></span>
											<span class="fakeLabel">I have read and agree to the Term of Service.</span>
										</label>
									</div>
									<button type="submit" class="btn btn-primary elemenBlock fontNeuron fwNormal text-uppercase btnSubmit">REGISTER</button>
								</div>
								<div class="col">
									<p>You Can Login using your facebook Profile or Google account</p>
									<button type="button" class="btnSocial btnFb elemenBlock"><i class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
									<button type="button" class="btnSocial btnTw elemenBlock"><i class="fab fa-twitter btnIco"></i> Twitter Connect</button>
									<button type="button" class="btnSocial btnG elemenBlock"><i class="fab fa-google btnIco"></i> Google Connect</button>
								</div>
							</div>
						</div>
					</div>
				</form>
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