<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>{{$internet->title}}</title>
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="/css/fancybox.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="/style.css">
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
										<!-- <time datetime="2011-01-12" class="TopBarTime">Mon - Sat: 08.00 AM - 18.00 PM</time> -->
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
										<div class="logo"><a href="home"><img src="/images/houseFinderLogo.png" alt="LemanHouse"></a></div>
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
													<strong class="fwNormal elemenBlock text">Riphah International University I-14<br>Golra Mor Islamabad, Pakistan</strong>
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
											<li>
												<a href="/" >Home<span></span></a>
												
											</li>
											<li >
												<a href="/about" >About <span ></span></a>

											</li>
											<li >
												<a href="/testimonials" >Testimonials<span ></span></a>
												
											</li>
											<li >
												<a href="/blog-full-width" >Blog<span ></span></a>
												
											</li>
											<li>
												<a href="/contact">Contact</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- userOptions -->
								<div class="userOptions">
									<!-- UserLinksList -->
									<ul class="list-unstyled UserLinksList">
										@guest
										<li>
											<a href="#popup1" class="lightbox">
												<i class="fi flaticon-social icn"></i>
												<strong class="text fwNormal hidden-xs hidden-sm">Login</strong>
											</a>
										</li>
										<li>
											<a href="#popup2" class="lightbox">
												<i class="fi flaticon-edit icn"></i>
												<strong class="text fwNormal hidden-xs hidden-sm">Register</strong>
											</a>
										</li>
										<a href="/" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i>Welcome</a>
										@endguest
										@if(isset(Auth::user()->id))
										@if(Auth::user()->user_type=="admin")
										<li>
											<a href="/dashboard">
												<i class="fi flaticon-social icn"></i>
											<strong class="text fwNormal hidden-xs hidden-sm">{{Auth::user()->name}}</strong>
											</a>
										</li>
										<a href="/add-city" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i> Add City</a>
										@elseif(Auth::user()->user_type=="House Owner")
										<li>
											<a href="/ho_dashboard">
												<i class="fi flaticon-social icn"></i>
											<strong class="text fwNormal hidden-xs hidden-sm">{{Auth::user()->name}}</strong>
											</a>
										</li>
										<a href="/add-house-01" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i> Add Property</a>
										@elseif(Auth::user()->user_type=="Data Operator")
											<li>
												<a href="/do_dashboard">
													<i class="fi flaticon-social icn"></i>
												<strong class="text fwNormal hidden-xs hidden-sm">{{Auth::user()->name}}</strong>
												</a>
											</li>
											<a href="/add-sub-area" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i> Add Service</a>
										@elseif(Auth::user()->user_type=="Service Provider")
										<li>
											<a href="/sp_dashboard">
												<i class="fi flaticon-social icn"></i>
											<strong class="text fwNormal hidden-xs hidden-sm">{{Auth::user()->name}}</strong>
											</a>
										</li>
										<a href="/add-internetProvider-info" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i> Add Sub Area</a>
										@endif
										@endif
									</ul>
									<!-- headerModalOpener -->
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
					
					<section class="container">
						<!-- contentFiltersHeadingWrap -->
						<header class="contentFiltersHeadingWrap row">
							<div class="col-xs-12 col col-sm-8">
								<h1 class="fontNeuron"> <a href="#" class="btn btnSmall btn-success fontBase"></a></h1>
								<!-- captionAddress -->
								<address class="captionAddress">
									<span class="icn"><i class="fi flaticon-pin-1"></i></span>
									<p></p>
								</address>
							</div>
							<div class="col-xs-12 col-sm-4 justify-end">
								<!-- captionActionsList -->
								<ul class="list-unstyled viewFilterLinks">
									<li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
									<li>
										<a href="#">
											<i class="fi flaticon-share"></i>
										</a>
										<!-- postColumnSocial -->
									</li>
									<li><a href="#"><i class="far fa-heart"></i></a></li>
									<li><a href="#"><i class="fi flaticon-printer"></i></a></li>
								</ul>
								<strong class="elemenBlock price fwSemi fontNeuron w100"> </strong>
								<strong class="elemenBlock fwNormal fontNeuron subtitle w100"></strong>
							</div>
						</header> 
					</section>
					<!-- twoColumns -->
					<div class="twoColumns container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8">
								<!-- content -->
								<article id="content">
									<!-- tabs -->
									<div class="tabSetholder tabschanges bgWhite">
							    		<div class="tab-content">
									        <div id="tab1-0">
										        <div class="slick-thumbnailslider slickSlider postColumnImageSlider">
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/780x495" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/780x495" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/780x495" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/780x495" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/780x495" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/780x495" alt="image description">
															</a>
														</div>
													</div>
												</div>
												<div class="slick-carouselnav slickSlider postColumnImageSlider">
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
													<div>
														<div class="imgHolder">
															<a href="#">
																<img src="https://via.placeholder.com/115x90" alt="image description">
															</a>
														</div>
													</div>
												</div>
									        </div>
									        <div id="tab2-0">
									        	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d39733.11938503574!2d-0.1627775524531611!3d51.5073456865004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+United+Kingdom!3m2!1d51.5073509!2d-0.1277583!4m0!5e0!3m2!1sen!2s!4v1530281946864" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
									        </div>
							        		<div id="tab3-0">
									        	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d39733.11938503574!2d-0.1627775524531611!3d51.5073456865004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+United+Kingdom!3m2!1d51.5073509!2d-0.1277583!4m0!5e0!3m2!1sen!2s!4v1530281946864" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</div>
										</div>
									</div>
									<!-- boxPanelBlock -->
									<section id="Detail" class="accountData">
										<div class="head">
											<h2 class="fontNeuron">Detail</h2>
										</div>
										<ul class="listpanel-head">
											<li>beds<span></span></li>
											<li>baths<span></span></li>
										</ul>
										<div class="listpanel-content">
											<ul>
												<li><span>Property ID</span><span class="righttext">: </span></li>
												<li><span>Property Size</span><span class="righttext">: </span></li>
											</ul>
										</div>
									</section>
									<section class="accountData">
		                                <div class="head">
		                                  <h4 class="fontNeuron">Description</h4>
		                                </div>
		                            	<p></p>
		                            </section>
		                            <section id="address" class="accountData address">
										<div class="head">
											<h4 class="fontNeuron">Detail</h4>
											<div class="btnArea">
				                              <a href="#" class="btn btn-info"><i class="fi flaticon-pin-1"></i>Open on Google Maps</a>
				                            </div>
										</div>
										<div class="listpanel-content widthauto address paddingzero">
											<ul>
												<li><span>Address</span><span class="righttext">: </span></li>
												<li><span>Country</span><span class="righttext">: Pakistan</span></li>
												<li><span>City</span><span class="righttext">: </span></li>
												<li><span>Sub Area</span><span class="righttext">: </span></li>
											</ul>
										</div>
									</section>

		                            <section class="accountData ratingreviews">
		                                <div class="head">
		                                  	<h4 class="fontNeuron">Ratings & Reviews</h4>
		                                </div>
		                                <div class="ratingarea">
		                                	<div class="hb-ratingandskillbar">
			                                	<ul class="hb-ratingbox">
			                                		<li>
			                                			<span class="hb-stars">
															<span></span>
														</span>
														<em>3</em>
			                                		</li>
			                                		<li>
			                                			<span class="hb-stars">
															<span></span>
														</span>
														<em>4</em>
			                                		</li>
			                                		<li>
			                                			<span class="hb-stars">
															<span></span>
														</span>
														<em>3</em>
			                                		</li>
			                                		<li>
			                                			<span class="hb-stars">
															<span></span>
														</span>
														<em>2</em>
			                                		</li>
			                                		<li>
			                                			<span class="hb-stars">
															<span></span>
														</span>
														<em>0</em>
			                                		</li>
			                                	</ul>
			                                	<div id="hb-ourskill" class="hb-ourskill hb-skillgroup">
													<div class="hb-skill">
														<div class="hb-skillholder" data-percent="95%">
														<div class="hb-skillbar"></div>
														</div>
													</div>
													<div class="hb-skill">
														<div class="hb-skillholder" data-percent="80%">
															<div class="hb-skillbar"></div>
														</div>
													</div>
													<div class="hb-skill">
														<div class="hb-skillholder" data-percent="50%">
															<div class="hb-skillbar"></div>
														</div>
													</div>
													<div class="hb-skill">
														<div class="hb-skillholder" data-percent="90%">
															<div class="hb-skillbar"></div>
														</div>
													</div>
													<div class="hb-skill">
														<div class="hb-skillholder" data-percent="0%">
															<div class="hb-skillbar"></div>
														</div>
													</div>
												</div>
											</div>
		                                	<div class="overallrating pull-right">
		                                		<div class="overallratingbox">
		                                			<span class="hb-stars">
														<span></span>
													</span>
													<h3>4.3</h3>
													<em>Overall rating</em>
		                                		</div>
		                                	</div>
		                                </div>
		                                <div class="reviews">
		                                	<h4>3 Reviews</h4>
			                                <ul class="hb-commentlist">
			                                	<li>
													<div class="hb-comment">
														<figure class="hb-author-img">
															<a href="#"><img src="https://via.placeholder.com/100x75" alt="image description"></a>
														</figure>
														<div class="hb-comment-box">
															<div class="hb-comment-head">
																<div class="pull-left">
																	<h4>john Milk</h4>
																</div>
																<div class="pull-right">
																	<span class="hb-stars">
																		<span></span>
																	</span>
																	<em>December 25, 2013</em>
																</div>
															</div>
															<div class="description">
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="hb-comment">
														<figure class="hb-author-img">
															<a href="#"><img src="https://via.placeholder.com/100x75" alt="image description"></a>
														</figure>
														<div class="hb-comment-box">
															<div class="hb-comment-head">
																<div class="pull-left">
																	<h4>Ali Tufan</h4>
																</div>
																<div class="pull-right">
																	<span class="hb-stars">
																		<span></span>
																	</span>
																	<em>December 25, 2013</em>
																</div>
															</div>
															<div class="description">
																<p>Downtown Melissa! Located on a large lot with trees and detached 30×30 workshop-2 car garage, wood burning stove located in shop.</p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="hb-comment">
														<figure class="hb-author-img">
															<a href="#"><img src="https://via.placeholder.com/100x75" alt="image description"></a>
														</figure>
														<div class="hb-comment-box">
															<div class="hb-comment-head">
																<div class="pull-left">
																	<h4>Robert Tufan</h4>
																</div>
																<div class="pull-right">
																	<span class="hb-stars">
																		<span></span>
																	</span>
																	<em>December 25, 2013</em>
																</div>
															</div>
															<div class="description">
																<p>New AC, installed in February. Recently painted. New laminate wood floors in Kitchen and Bath. Nice country setting.</p>
															</div>
														</div>
													</div>
												</li>
			                                </ul>	
		                                </div>
		                            </section>
									<section class="accountData contactFormPage">
										<div class="head">
		                                  <h4 class="fontNeuron">Your Reviews</h4>
		                                </div>
										<form>
											<div class="row">
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="text" placeholder="Your Name" class="form-control">
													</div>
												</div>
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="email" placeholder="Email" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="tel" placeholder="Phone Number" class="form-control">
													</div>
												</div>
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="url" placeholder="Website" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Message"></textarea>
											</div>
											<div class="form-group">
												<span>your rating: </span>
												<span class="hb-stars">
													<span></span>
												</span>
											</div>
											<button type="submit" class="btn btnDark fontNeuron buttonXL">Submit</button>
										</form>
									</section>
								</article>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4">
								<aside id="sidebar">
									<!-- contactFormPage -->
									<section class="contactFormPage widget">
										<div class="hb-headarea">
											<div class="holder">
												<figure class="hb-author-img pull-left">
													<a href="#"><img src="https://via.placeholder.com/100x75" alt="image description"></a>
												</figure>
												<div class="pull-left">
													<div class="hb-headcontent">
														<span>{{Auth::user()->name}}</span>
														<a href="properties-full-width-list.html">View Listings</a>
													</div>
												</div>
											</div>
											<div class="hb-numberbox text-center">
												<h3><i class="fi flaticon-24-hours"></i>+92 3065085832</h3>
											</div>
										</div>
										<form class="widgetCalcForm">
											<div class="row">
												<div class="col-xs-12">
													<div class="form-group">
														<input type="text" placeholder="Your Name" class="form-control">
													</div>
												</div>
												<div class="col-xs-12">
													<div class="form-group">
														<input type="tel" placeholder="Phone" class="form-control">
													</div>
												</div>
												<div class="col-xs-12">
													<div class="form-group">
														<input type="email" placeholder="Email" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Hi Jennie Wilson, I saw your profile on LemanHouse and wanted to see if you could help me"></textarea>
											</div>
											<button type="submit" class="btn btnDark fontNeuron buttonXL">Submit</button>
										</form>
									</section>
								</aside>
							</div>
							<div class="col-xs-12">
								<header class="rowHead">
									<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">SIMILAR</span> <span class="textSecondary">PROPERTIES</span></h1>
								</header>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
								<!-- postColumn -->
								<article class="postColumn hasOver bgWhite">
									<div class="aligncenter">
										<!-- postColumnImageSlider -->
										<div class="slick-carousel slickSlider postColumnImageSlider">
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
										</div>
										<!-- postHoverLinskList -->
										<ul class="list-unstyled postHoverLinskList">
											<li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
											<li class="hasOver">
												<a href="#"><i class="fi flaticon-share"></i></a>
												<!-- postColumnSocial -->
												<ul class="list-unstyled socialNetworks postColumnSocial">
													<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#"><i class="fab fa-google"></i></a></li>
												</ul>
											</li>
										</ul>
										<!-- linkToFavourite -->
										<a href="#" class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i class="far fa-heart"></i></a>
									</div>
									<h2 class="fontNeuron text-capitalize"><a href="properties-single2.html">Luxury Family Home</a></h2>
									<address>
										<span class="icn"><i class="fi flaticon-pin-1"></i></span>
										<p>The Village, Jersey City, NJ 07302, USA </p>
									</address>
									<span class="btn btnSmall btn-success text-capitalize">For Sale</span>
									<h3 class="fontNeuron fwSemi"><span class="textSecondary">  490,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
									<!-- postColumnFoot -->
									<footer class="postColumnFoot">
										<ul class="list-unstyled">
											<li>
												<strong class="fwNormal elemenBlock text-primary">Area</strong>
												<strong class="fwNormal elemenBlock">2100 m2</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Beds</strong>
												<strong class="fwNormal elemenBlock">3</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Baths</strong>
												<strong class="fwNormal elemenBlock">2</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Garages</strong>
												<strong class="fwNormal elemenBlock">1</strong>
											</li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col isoCol rent">
								<!-- postColumn -->
								<article class="postColumn hasOver bgWhite">
									<div class="aligncenter">
										<!-- postColumnImageSlider -->
										<div class="slick-carousel slickSlider postColumnImageSlider">
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
										</div>
										<!-- postHoverLinskList -->
										<ul class="list-unstyled postHoverLinskList">
											<li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
											<li class="hasOver">
												<a href="#"><i class="fi flaticon-share"></i></a>
												<!-- postColumnSocial -->
												<ul class="list-unstyled socialNetworks postColumnSocial">
													<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#"><i class="fab fa-google"></i></a></li>
												</ul>
											</li>
										</ul>
										<!-- linkToFavourite -->
										<a href="#" class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i class="far fa-heart"></i></a>
									</div>
									<h2 class="fontNeuron text-capitalize"><a href="properties-single2.html">Meridian Villas</a></h2>
									<address>
										<span class="icn"><i class="fi flaticon-pin-1"></i></span>
										<p>London, United Kingdom</p>
									</address>
									<span class="btn btnSmall btn-info text-capitalize">For Rent</span>
									<h3 class="fontNeuron fwSemi"><span class="textSecondary">  920,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
									<!-- postColumnFoot -->
									<footer class="postColumnFoot">
										<ul class="list-unstyled">
											<li>
												<strong class="fwNormal elemenBlock text-primary">Area</strong>
												<strong class="fwNormal elemenBlock">2100 m2</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Beds</strong>
												<strong class="fwNormal elemenBlock">3</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Baths</strong>
												<strong class="fwNormal elemenBlock">2</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Garages</strong>
												<strong class="fwNormal elemenBlock">1</strong>
											</li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col isoCol rent">
								<!-- postColumn -->
								<article class="postColumn hasOver bgWhite">
									<div class="aligncenter">
										<!-- postColumnImageSlider -->
										<div class="slick-carousel slickSlider postColumnImageSlider">
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
											<div>
												<div class="imgHolder">
													<a href="properties-single2.html">
														<img src="https://via.placeholder.com/360x260" alt="image description">
													</a>
												</div>
											</div>
										</div>
										<!-- postHoverLinskList -->
										<ul class="list-unstyled postHoverLinskList">
											<li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
											<li class="hasOver">
												<a href="#"><i class="fi flaticon-share"></i></a>
												<!-- postColumnSocial -->
												<ul class="list-unstyled socialNetworks postColumnSocial">
													<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#"><i class="fab fa-google"></i></a></li>
												</ul>
											</li>
										</ul>
										<!-- linkToFavourite -->
										<a href="#" class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i class="far fa-heart"></i></a>
									</div>
									<h2 class="fontNeuron text-capitalize"><a href="properties-single2.html">Elegant studio flat</a></h2>
									<address>
										<span class="icn"><i class="fi flaticon-pin-1"></i></span>
										<p>The Village, Jersey City, NJ 07302, USA</p>
									</address>
									<span class="btn btnSmall btn-info text-capitalize">For Rent</span>
									<h3 class="fontNeuron fwSemi"><span class="textSecondary">  490,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
									<!-- postColumnFoot -->
									<footer class="postColumnFoot">
										<ul class="list-unstyled">
											<li>
												<strong class="fwNormal elemenBlock text-primary">Area</strong>
												<strong class="fwNormal elemenBlock">2100 m2</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Beds</strong>
												<strong class="fwNormal elemenBlock">3</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Baths</strong>
												<strong class="fwNormal elemenBlock">2</strong>
											</li>
											<li>
												<strong class="fwNormal elemenBlock text-primary">Garages</strong>
												<strong class="fwNormal elemenBlock">1</strong>
											</li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
					</div>
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
											<option value="1">House Owner</option>
											<option value="2">Service Owner</option>
											<option value="3">Data Operator</option>
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