<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>House Finder- Find your home</title>
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="/css/bootstrap.css">
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
										<div class="logo"><a href="home"><img src="images/houseFinderLogo.png" alt="LemanHouse"></a></div>
									</div>
									<div class="col-xs-6 col-sm-9 d-flex">
										<!-- headerContactList -->
										<ul class="list-unstyled headerContactList">
											<li>
												<a href="tel:+12463450695" class="icn icnBubble noShrink text-info"><i class="fi flaticon-24-hours"></i></a>
												<div class="descr hidden-xs">
													<strong class="fwNormal elemenBlock text"><a href="tel:+12463450695">+92-3065085832</a></strong>
													<strong class="fwNormal elemenBlock text"><a href="#">info@homefinder.com</a></strong> 
												</div>
											</li>
											<li class="hidden-xs">
												<span class="icn icnJumping text-info noShrink"><i class="fi flaticon-pin-1"></i></span>
												<div class="descr">
													<strong class="fwNormal elemenBlock text">Riphah International University I-14 <br>Golra Mor Islamabad, Pakistan</strong>
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
					<!-- introSlider -->
					<section class="slick-fade slickSlider introSlider">
						<div>
							<!-- introSlide -->
							<article class="introSlide bgCover" style="background-image: url(images/homepic.jpg);">
								<div class="container introSlideHolder">
									<div class="align">
										<!-- introSlideCaption -->
										<div class="introSlideCaption">
											<h1 class="text-uppercase fontNeuron">Mordern Family Home</h1>
											<div class="introSlideCaptionHolder">
												<address class="text-primary">
													<span class="icn"><i class="fi flaticon-pin-1"></i></span>
													<p>F 7/1 Islamabad Pakistan</p>
												</address>
												<h2 class="fontNeuron"> 190,000 <strong class="fwNormal textUnit">/ monthly</strong></h2>
												<div class="btnsWrap">
													<a href="#" class="btn btn-success btnSmall">For Rent</a>
													<a href="#" class="btn btn-info btnSmall">Featured</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div>
							<!-- introSlide -->
							<article class="introSlide bgCover" style="background-image: url(images/home.jpg);">
								<div class="container introSlideHolder">
									<div class="align">
										<!-- introSlideCaption -->
										<div class="introSlideCaption">
											<h1 class="text-uppercase fontNeuron">Mordern Home</h1>
											<div class="introSlideCaptionHolder">
												<address class="text-primary">
													<span class="icn"><i class="fi flaticon-pin-1"></i></span>
													<p>PO Box 161 Pakistan</p>
												</address>
												<h2 class="fontNeuron">400,000 <strong class="fwNormal textUnit">/ monthly</strong></h2>
												<div class="btnsWrap">
													<a href="#" class="btn btn-success btnSmall">For Rent</a>
													<a href="#" class="btn btn-info btnSmall">Featured</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div>
							<!-- introSlide -->
							<article class="introSlide bgCover" style="background-image: url(images/home.jpg);">
								<div class="container introSlideHolder">
									<div class="align">
										<!-- introSlideCaption -->
										<div class="introSlideCaption">
											<h1 class="text-uppercase fontNeuron">Latest Family Home</h1>
											<div class="introSlideCaptionHolder">
												<address class="text-primary">
													<span class="icn"><i class="fi flaticon-pin-1"></i></span>
													<p>PO Box 161 Pakistan</p>
												</address>
												<h2 class="fontNeuron">390,000 <strong class="fwNormal textUnit">/ monthly</strong></h2>
												<div class="btnsWrap">
													<a href="#" class="btn btn-success btnSmall">For Rent</a>
													<a href="#" class="btn btn-info btnSmall">Featured</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</section>
					<!-- findFormBlock -->
					<form method="GET" action="/searchHouse" class="bgWhite findFormBlock hasShadow">
						<div class="container">
							<h2 class="fontNeuron">FIND YOUR <span class="text-info">HOME</span></h2>
							<hr class="sep elemenBlock">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<select name="city_id"data-placeholder="All Property Types" class="form-control" id="city">
											<option value="">Select city</option>
											@foreach ($cities as $city)
												<option value="{{$city->id}}">{{$city->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<select name="sub_area" data-placeholder="Select Option" class="form-control" id="sel1">
											<option value="">Select Sub area</option>
										</select>
									</div>
								</div>
							</div>
							<!-- orderRow -->
							<div class="row orderRow">
								<div class="col-xs-12 col-sm-3 order1">
									<!-- otherFeaturesOpener -->
									<a class="btnPlus otherFeaturesOpener text-capitalize" role="button" data-toggle="collapse" href="#otherFeaturescollapse" aria-expanded="false" aria-controls="otherFeaturescollapse">
										<i class="fas btnIcn fa-plus-circle text-info opener"></i>
										<i class="fas fa-minus-circle closer btnIcn text-info"></i>
										Others Features
									</a>
								</div>
								<div class="col-xs-12 order3">
									<!-- otherFeaturesCollapse -->
									<div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
										<!-- checkList -->
										<ul class="list-unstyled checkList text-primary">
											<li>
												<label class="fwNormal customLabelCheck">
													{{-- class="customFormInputReset" --}}
													<input type="checkbox" name="ip" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Internet Provider</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" name="p" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Parking</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" name="co" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Cable Operator</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" name="sv" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">School Van</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" name="sw" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Sweeper</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" name="w" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Watchman</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" name="hm" class="checkbox customFormInputReset" value="0">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Housemaid</span>
												</label>
											</li>
										</ul>
										<div class="col-xs-12 col-sm-4">
											<div class="form-group">
												<input name="price" type="number" class="form-control elemenBlock" placeholder="Price">
											</div>
										</div>
										<div class="col-xs-12 col-sm-4">
											<div class="row">
												<div class="col-xs-12">
													<div class="form-group">
														<select name="bedrooms" data-placeholder="Beds" class="form-control">
															<option value="">Number of bedrooms</option>
															<option value="1">1 Bed</option>
															<option value="2">2 Beds</option>
															<option value="3">3 Beds</option>
															<option value="4">4 Beds</option>
															<option value="5">5 Beds</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4">
											<div class="form-group">
												<select name="type" data-placeholder="Parking" class="form-control">
													<option value="">Property type</option>
													<option value="1">Flat</option>
													<option value="1">Home</option>
													<option value="1">Room</option>
													<option value="1">Office</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<select name="unit" data-placeholder="Parking" class="form-control">
													<option value="">Area type</option>
									  					<option value="Marla">Marla</option>
									  					<option value="Kanal">Kanal</option>
									  					<option value="Square Feet">Square Feet</option>
									  					<option value="Square Yards">Square Yards</option>
									  					<option value="Square Meters">Square Meters</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<input name="value" type="number" class="form-control elemenBlock" placeholder="Area/marla">
											</div>
										</div>
									</div>
							</div>
						<div class="col-xs-12 col-sm-offset-6 col-sm-3 order2">
							<button type="submit" class="btn btnSecondary text-uppercase fontNeuron pull-right">SEARCH</button>
						</div>
					</div>
						</div>
					</form>
					<!-- latestPostsBlock -->
					<section class="latestPostsBlock container">
						<!-- rowHead -->
						<header class="row rowHead">
							<div class="col-xs-12 col-sm-5">
								<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">LATEST</span> <span class="textSecondary">PROPERTIES</span></h1>
							</div>
							<div class="col-xs-12 col-sm-7">
								<!-- postsFiltersList -->
								<ul class="list-unstyled postsFiltersList text-capitalize text-center isoFiltersList">
									<li ><a href="#">All</a></li>
									<li class="active"><a href="#" data-filter=".rent">For Rent</a></li>
								
								</ul>
							</div>
						</header>
						<!-- isoContentHolder -->
						<div class="isoContentHolder">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
									<!-- postColumn -->
									<article class="postColumn hasOver bgWhite">
										<div class="aligncenter">
											<!-- postColumnImageSlider -->
											<div class="slick-carousel slickSlider postColumnImageSlider">
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
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
											<p>The GPO Islamabad </p>
										</address>
										<span class="btn btnSmall btn-success text-capitalize">For Sale</span>
										<h3 class="fontNeuron fwSemi"><span class="textSecondary">40,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
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
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
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
										<h3 class="fontNeuron fwSemi"><span class="textSecondary">100,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
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
								<div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
									<!-- postColumn -->
									<article class="postColumn hasOver bgWhite">
										<div class="aligncenter">
											<!-- postColumnImageSlider -->
											<div class="slick-carousel slickSlider postColumnImageSlider">
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
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
										<h2 class="fontNeuron text-capitalize"><a href="properties-single2.html">4 Bedroom New House For Sale</a></h2>
										<address>
											<span class="icn"><i class="fi flaticon-pin-1"></i></span>
											<p>Islamabad</p>
										</address>
										<span class="btn btnSmall btn-success text-capitalize">For Rent</span>
										<h3 class="fontNeuron fwSemi"><span class="textSecondary">250,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
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
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
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
											<p>F7 Islamabad </p>
										</address>
										<span class="btn btnSmall btn-success text-capitalize">For Rent</span>
										<h3 class="fontNeuron fwSemi"><span class="textSecondary">400,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
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
								<div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
									<!-- postColumn -->
									<article class="postColumn hasOver bgWhite" data-label="featured">
										<div class="aligncenter">
											<!-- postColumnImageSlider -->
											<div class="slick-carousel slickSlider postColumnImageSlider">
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
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
										<h2 class="fontNeuron text-capitalize"><a href="properties-single2.html">Full Floor Office Condo</a></h2>
										<address>
											<span class="icn"><i class="fi flaticon-pin-1"></i></span>
											<p>G9 Islamabad </p>
										</address>
										<span class="btn btnSmall btn-info text-capitalize">For Rent</span>
										<h3 class="fontNeuron fwSemi"><span class="textSecondary"> 200,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
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
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
														</a>
													</div>
												</div>
												<div>
													<div class="imgHolder">
														<a href="properties-single2.html">
															<img src="images/home.jpg" alt="image description">
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
										<h2 class="fontNeuron text-capitalize"><a href="properties-single2.html">Villa on Hollywood Boulevard</a></h2>
										<address>
											<span class="icn"><i class="fi flaticon-pin-1"></i></span>
											<p>i14 Islamabad</p>
										</address>
										<span class="btn btnSmall btn-info text-capitalize">For Rent</span>
										<h3 class="fontNeuron fwSemi"><span class="textSecondary">320,000</span> <span class="textUnit fwNormal">/ monthly</span></h3>
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
						<div class="row text-center btnHolder">
							<a href="properties-single2.html" class="btn btn-primary btnPrimaryOutline text-capitalize fontNeuron">Show More Property</a>
						</div>
					</section>
					<!-- mostPostsBlock -->
					<section class="mostPostsBlock bgWhite">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">MOST POPULAR</span> <span class="textSecondary">PLACES</span></h1>
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<!-- visualPostColumn -->
									<a href="properties-single2.html" class="visualPostColumn hasOver elemenBlock text-center type01 textWhite">
										<span class="bgCover elemenBlock" style="background-image: url(https://via.placeholder.com/555x450);"></span>
										<div class="captionWrap">
											<h2 class="fontNeuron">Sector F7</h2>
										</div>
									</a>
								</div>
								<div class="col-xs-12 col-sm-6">
									<!-- visualPostColumn -->
									<a href="properties-detial.html" class="visualPostColumn hasOver elemenBlock text-center type02 textWhite">
										<span class="bgCover elemenBlock" style="background-image: url(images/islamabad.jpg);"></span>
										<div class="captionWrap">
											<h2 class="fontNeuron">E11</h2>
										</div>
									</a>
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<a href="#" class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">
												<span class="bgCover elemenBlock" style="background-image: url(images/islamabad.jpg);"></span>
												<div class="captionWrap">
													<h2 class="fontNeuron">Bahria Town</h2>
												</div>
											</a>
										</div>
										<div class="col-xs-12 col-sm-6">
											<a href="properties-detial.html" class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">
												<span class="bgCover elemenBlock" style="background-image: url(images/islamabad.jpg);"></span>
												<div class="captionWrap">
													<h2 class="fontNeuron">Blue Area</h2>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- servicesFetaureBlock -->
					<section class="servicesFetaureBlock container">
						<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">SERVICE</span></h1>
						<!-- servicesFetauresList -->
						<ul class="servicesFetauresList list-unstyled text-center">
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-rent"></i></span>
									<h2 class="fontNeuron text-capitalize">Renting Service</h2>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-list"></i></span>
									<h2 class="fontNeuron text-capitalize">Property Listing</h2>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-house-1"></i></span>
									<h2 class="fontNeuron text-capitalize">Property Management</h2>
								</a>
							</li>
						</ul>
					</section>
					<!-- testimonilasBlock -->
					<section class="testimonilasBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">Testimonials</span></h1>
							<div class="row">
								<div class="col-xs-12 col-md-8 col-md-offset-2">
									<!-- testimonialSlider -->
									<div class="slickSlider testimonial-carousel testimonialSlider">
										<div>
											<!-- testimonialColumn -->
											<article class="testimonialColumn text-center">
												<div class="aligncenter roundedCircle">
													<a href="testimonials.html">
														<img src="images/images.png" class="roundedCircle" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="testimonials.html">The Hermess Family</a></h2>
												<p><em>Although we haven’t had many issues but any time there has been an issue you have been incredibly helpful and whenever you have come out for an inspection you have been so personable and absolutely lovely to be around. You are a great addition to the Realtyspace Team and i&hellip;</em></p>
											</article>
										</div>
										<div>
											<!-- testimonialColumn -->
											<article class="testimonialColumn text-center">
												<div class="aligncenter roundedCircle">
													<a href="testimonials.html">
														<img src="images/images.png" class="roundedCircle" alt="image description">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron"><a href="testimonials.html">The Hermess Family</a></h2>
													<p><em>Although we haven’t had many issues but any time there has been an issue you have been incredibly helpful and whenever you have come out for an inspection you have been so personable and absolutely lovely to be around. You are a great addition to the Realtyspace Team and i&hellip;</em></p>
												</div>
											</article>
										</div>
										<div>
											<!-- testimonialColumn -->
											<article class="testimonialColumn text-center">
												<div class="aligncenter roundedCircle">
													<a href="testimonials.html">
														<img src="images/images.png" class="roundedCircle" alt="image description">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron"><a href="testimonials.html">The Hermess Family</a></h2>
													<p><em>Although we haven’t had many issues but any time there has been an issue you have been incredibly helpful and whenever you have come out for an inspection you have been so personable and absolutely lovely to be around. You are a great addition to the Realtyspace Team and i&hellip;</em></p>
												</div>
											</article>
										</div>
										<div>
											<!-- testimonialColumn -->
											<article class="testimonialColumn text-center">
												<div class="aligncenter roundedCircle">
													<a href="testimonials.html">
														<img src="images/images.png" class="roundedCircle" alt="image description">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron"><a href="testimonials.html">The Hermess Family</a></h2>
													<p><em>Although we haven’t had many issues but any time there has been an issue you have been incredibly helpful and whenever you have come out for an inspection you have been so personable and absolutely lovely to be around. You are a great addition to the Realtyspace Team and i&hellip;</em></p>
												</div>
											</article>
										</div>
										<div>
											<!-- testimonialColumn -->
											<article class="testimonialColumn text-center">
												<div class="aligncenter roundedCircle">
													<a href="testimonials.html">
														<img src="images/images.png" class="roundedCircle" alt="image description">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron"><a href="testimonials.html">The Hermess Family</a></h2>
													<p><em>Although we haven’t had many issues but any time there has been an issue you have been incredibly helpful and whenever you have come out for an inspection you have been so personable and absolutely lovely to be around. You are a great addition to the Realtyspace Team and i&hellip;</em></p>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- newsNstoriesBlock -->
					<section class="bgWhite newsNstoriesBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">NEWS AND</span> <span class="textSecondary">STORIES</span></h1>
							<div class="row">
								<!-- newsCarousel -->
								<div class="news-posts-carousel slickSlider newsCarousel">
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="images/islamabad.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Getting Started Designing Apps for the Apple Watch</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="blog-detail.html" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="images/islamabad.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get From</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="blog-detail.html" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="images/islamabad.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Getting Started Designing Apps for the Apple Watch</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="blog-detail.html" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="images/islamabad.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get From</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="blog-detail.html" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
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
										<dd><a href="tel:+12463450695">+92-3065085832</a></dd>
										<dt><i class="fi flaticon-mail"></i></dt>
										<dd><a href= "#">info@homefinder.com</a></dd>
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
												<img src="images/islamabad.jpg" alt="image description">
											</a>
										</div>
										<div class="descrWrap">
											<h3 class="fwNormal"><a href="properties-single2.html">Luxurious House F7</a></h3>
											<h4 class="fwSemi">1,00,000</h4>
										</div>
									</li>
									<li>
										<div class="alignleft">
											<a href="properties-single2.html">
												<img src="images/islamabad.jpg" alt="image description">
											</a>
										</div>
										<div class="descrWrap">
											<h3 class="fwNormal"><a href="properties-single2.html">Flat g10/2</a></h3>
											<h4 class="fwSemi">50,000</h4>
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
				<span class="bgCover elemenBlock" style="background-image: url(images/footerbg.jpg);"></span>
			</div>
		</div>
		<!-- pagePopupWrap -->
		<div class="popup-holder">
			<div id="popup1" class="lightbox-demo">
				<!-- popupLoginFrom -->
				<form method="POST" action="{{ route('login') }}" class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
					@csrf
					<div class="tab-content">
						<div id="tab01" class="tab-active">
							<div class="popupColsHolder">
								<div class="col bgWhite">
									<div class="form-group">
										<input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control elemenBlock" placeholder="User Namer">
									</div>
									<div class="form-group">
										<input type="password" class="form-control elemenBlock" placeholder="Password" name="password" required autocomplete="current-password">
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
					</div>
				</form>
			</div>
		</div>


		<div class="popup-holder">
			<div id="popup2" class="lightbox-demo">
				<!-- popupLoginFrom -->
				<form method="POST" action="{{ route('register') }}" class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
					@csrf
					<div class="tab-content">
						<div id="tab02">
							<div class="popupColsHolder">
								<div class="col bgWhite">
									<div class="form-group">
										<input type="text" class="form-control elemenBlock" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
									</div>
									<div class="form-group">
										<input type="email" class="form-control elemenBlock" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
									</div>
									<div class="form-group">
								<input type="password" class="form-control elemenBlock" placeholder="Password" name="password" required autocomplete="new-password">
									</div>
									<div class="form-group">
										<input type="password" class="form-control elemenBlock" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
									</div>
									<div class="form-group">
										<select name="user_type" value="{{ old('user_type') }}" data-placeholder="Type" class="chosen-select" class="form-control elemenBlock">
											<option value="House Owner">House Owner</option>
											<option value="Service Provider">Service Provider</option>
										</select>
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
	<script>
		$('#city').on('change', function(e){
			console.log(e);
			var city_id = e.target.value;

			$.get('/ajax-sub-area?city_id=' + city_id, function(data){
				console.log(data);
				$('#sel1').empty();
				$.each(data, function(index, subAreaObj){
					$('#sel1').append('<option value="'+subAreaObj.id+'">'+subAreaObj.name+'</option>');
				
					
				});

			});
		});
		$( document ).ready(function() {
			$(".checkbox").change(function() {
			if(this.checked) {
				$(this).val("1");
			}
			else
			{
				$(this).val("1");
			}
		});
		});
		
	</script>
</body>
</html>