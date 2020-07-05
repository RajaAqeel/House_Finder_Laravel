<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Edit {{$cable->title}} Information</title>
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
                      <h1 class="fontNeuron">Add New Service</h1> 
                      <div class="formContent">
						<form method="POST" action="/editInternetInformation/{{$cable->id}}">
                            {{ csrf_field() }}
							{{ method_field('PUT') }}
                          <header class="contentHead">
                            <h2 class="fontNeuron">Basic Info</h2>
                          </header>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="form-group">
                                <label for="itemN-15">Service Title*</label>
                                <input required name="service_title" type="text" class="form-control" placeholder="{{$cable->title}}" id="itemN-15">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label for="itemN-16">Price/month</label>
                                <input required name="price" type="text" class="form-control" placeholder="{{$cable->price_month}}" id="itemN-16">
                              </div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
								  <label for="itemN-101">Address</label>
								  <select  required name="address" data-placeholder="" class="form-control" id="itemN-101">
									  <option value="{{$cable->address}}">{{$cable->address}}</option>
									</select>
								</div>
							  </div>
							  <div  class="col-xs-12 col-sm-6">
								<div class="form-group">
								  <label for="itemN-102">City</label>
								  <select  required name="city_id" data-placeholder="" class="form-control" id="itemN-102">
									  <option value="{{$cable->city_id}}">{{$cable->city_id}}</option>
									</select>
								</div>
							  </div>
							  <div  class="col-xs-12 col-sm-6">
								<div class="form-group">
								  <label for="itemN-103">Sub Area</label>
								  <select  required name="sub_area" data-placeholder="" class="form-control" id="itemN-103">
									  <option value="{{$cable->sub_area_id}}">{{$cable->sub_area_id}}</option>
									</select>
								</div>
							  </div>
							  <div class="col-xs-12">
                                <div class="form-group">
                                  <label for="itemN-36">Phone Number</label>
                                  <input required name="number" type="text" class="form-control" placeholder="{{$cable->phone_number}}" id="itemN-36">
                                </div>
                              </div>
							  <div class="col-xs-12">
                                <div class="form-group">
                                  <label for="itemN-34">Description</label>
                                  <textarea required name="description" type="text" class="form-control" placeholder="{{$cable->description}}" id="itemN-34">
                                </div>
                              </div>
                        
                          </div>
                          <div class="btnArea">
							<button class="btn btnDark"><a href="/sp_dashboard">Back</a></button>
							<button type="submit" class="btn btnDark">Update</button>

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
				<span class="bgCover elemenBlock" style=""></span>
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
				$('#sub_area_chosen').empty();
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