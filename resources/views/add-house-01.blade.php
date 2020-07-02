<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Add Property</title>
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
				<header id="pageHeader" class="bgWhite shadow">
					<!-- pageHeaderWrap -->
					<div class="pageHeaderWrap">
						<!-- headerTopBar -->
						<div class="container">
							<!-- headerHolder -->
							<div class="headerHolder">
                              <!-- logo -->
                              <div class="logo logoCentered"><a href="home"><img src="images/logo.png" alt="LemanHouse"></a></div>
							</div>
						</div>
					</div>
				</header>
				<!-- main -->
				<main>
                  <!-- content -->
                  <section id="content" class="container pEqual">
                    <div class="addProperty">
					  <h1 class="fontNeuron">Add New Property</h1>
					  @if (count($errors) > 0)
						  @foreach ($errors->all() as $error)
				  				<div class="alert alert-danger" role="alert">
								  	{{$error}}
								</div>
						  @endforeach
					  @endif
					  @if (session('success'))
						  <div class="alert alert-success" role="alert">
							  {{session('success')}}
						  </div>
					  @endif
					  @if (session('error'))
						<div class="alert alert-danger" role="alert">
							{{seesion('error')}}
						</div>
					  @endif
                      <div class="formContent">
						<form action={{action('HouseController@store')}} method="POST" enctype="multipart/form-data">
							@csrf
                          <header class="contentHead">
                            <h2 class="fontNeuron">Basic Info</h2>
                          </header>
                          <div class="row">
							<div class="col-xs-12">
								<div class="form-group">
								  <label for="itemN-90">Title</label>
								  <input name="title" type="text" class="form-control " placeholder=" title" id="itemN-90" required>
								</div>
							  </div>
							<div class="col-xs-12">
								<div class="form-group">
								  <label for="itemN-17">Property Type</label>
								  <select name="type" data-placeholder="Select Option" class="form-control " id="itemN-17">
									<option value="">Select Option</option>
									  <option value="Flat">Flat</option>
									  <option value="House">House</option>
									  <option value="Apartment">Apartment</option>
									  <option value="Room">Room</option>
									  <option value="Office">Office</option>
									  <option value="Penthouse">Penthouse</option>
									  <option value="Upper Portion">Upper Portion</option>
									  <option value="Lower Portion">Lower Portion</option>
									</select>
								</div>
							  </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-16">Price</label>
                                <input name="price" type="number" class="form-control " placeholder=" 158" id="itemN-16" required>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-17">Price</label>
                                <select name="negotiable" data-placeholder="Select Option" class="form-control " id="itemN-17">
									<option value="">Select Option</option>
									<option value="Yes">Negotiable</option>
									<option value="No">Not Negotiable</option>
								  </select>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-18">Bedrooms</label>
                                <input name="bedroom" type="number" class="form-control " placeholder="5" min="0" max="9999" id="itemN-18">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-19">Bathrooms</label>
                                <input name="bathroom" type="number" class="form-control " placeholder="3" min="0" max="9999" id="itemN-19">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-21">Land Area</label>
                                <input name="area" type="number" class="form-control " placeholder="1500" id="itemN-21">
                              </div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
								  <label for="itemN-17">Area Unit</label>
								  <select name="unit" data-placeholder="Select Option" class="form-control " id="itemN-17">
									  <option value="">Select Option</option>
									  <option value="Marla">Marla</option>
									  <option value="Kanal">Kanal</option>
									  <option value="Square Feet">Square Feet</option>
									  <option value="Square Yards">Square Yards</option>
									  <option value="Square Meters">Square Meters</option>
									</select>
								</div>
							  </div>
                            <div class="col-xs-12">
                              <div class="form-group">
                              <label for="itemN-25">Description</label>
                                <textarea name="description" class="form-control " id="itemN-25" placeholder=""></textarea>
                              </div>
							</div>
								<h3 class="fontNeuron">Location</h3><br>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
									  <label for="city">City</label>
									  <select id="city" name="city" data-placeholder="Choose..." class="form-control ">
										<option value="">Select Area</option>
										@if(isset($cities))
										@foreach ($cities as $city)
										<option value="{{$city->id}}">{{$city->name}}</option>
									@endforeach
									@endif
									  </select>
									</div>
								  </div>
								  <div class="col-xs-12 col-sm-6">
									<div class="form-group">
									  <label for="sub_area">Sub Area</label>
									  <select name="sub_area" data-placeholder="Select Option" class="form-control " id="sel1">
										<option value="">Select Option</option>
	
									  </select>
									</div>
								  </div>
								  <div class="col-xs-12">
									<div class="form-group">
									  <label for="item-map">Address / Location</label>
									  <div class="input-group">
										<input name="address" type="text" class="form-control " id="item-map" placeholder="Your address">
									  </div>
									</div>
								  </div>
								  <h3 class="fontNeuron">Photos</h3><br>
								  <div class="col-xs-12">
									<div class="form-group">
									  <label for="item-map">Upload images</label>
									  <div class="input-group">
										<input name="img_url[]" type="file" class="form-control" multiple>
									  </div>
									</div>
								  </div>
                          <div class="btnArea">
							<br><button class="btn btnDark"><a href="/ho_dashboard">Back</a></button>
							<button type="submit" class="btn btnDark">Save</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </section>
                  <!-- signupFormAside -->
					<form action="#" class="bgWhite signupFormAside">
						<div class="container signupFormAsideHolder">
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
	</div>
	<!-- include jQuery library -->
	<script src="js/jquery.js"></script>
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
	</script>
	<script src="js/plugins.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap-slider.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
</body>
</html>