<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
<title>CampUnit</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body class="transparent-header">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo-icon.png" data-sticky-logo="images/logo-icon.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="current" href="#">{{trans('front.menu_home')}}</a></li>
						<li><a  href="#">{{trans('front.menu_rent')}}</a>
							<ul>
								<li><a href="index-3.html">{{trans('front.menu_rent_motorhome')}}</a></li>
								<li><a href="index-4.html">{{trans('front.menu_rent_campervan')}}</a></li>
								<li><a href="index-5.html">{{trans('front.menu_rent_caravan')}}</a></li>
								<li><a href="index-6.html">{{trans('front.menu_rent_other')}}</a></li>
							</ul>
						</li>
						<li><a href="#">{{trans('front.menu_insert_vehicule')}}</a></li>

						<li><a href="#">{{trans('front.menu_magazine')}}</a></li>
						
						<li>
							<a  id="myBtn">{{trans('front.menu_login')}}</a>
							<div id="myModal" class="modal">

								<!-- Modal content -->
								<div class="modal-content" style="background: #f4f4f4;">
									<span class="close">&times;</span>
									<header class="modal-header">
										<div class="controls"><!---->
											 <a  href="#" class="control-right">
												</a>
											</div> 
											<div  class="titles-container">
												<h3 class="text-center">{{trans('front.to_connect')}}</h3></div>
									</header>
									<div class="modal-body">
											<div class="container">
												<form>
												
													<div  class="form-group">
														<label class="sr-only">
															{{trans('front.email_address')}}
													  	</label>
														<input  type="text" placeholder="Adresse e-mail" autocomplete="username" class="login-username form-control" style="width:727px !important;">
													</div>
													<div  class="form-group">
														<label class="sr-only">
															{{trans('front.password')}}
													  	</label>
														<input  type="password" placeholder="Adresse e-mail" autocomplete="username" class="login-username form-control" style="width:727px !important;">
													</div>
													<div >
														<button type="button" class="btn btn-primary btn-block w-727 connexion">
															{{trans('front.to_connect')}}
														</button>
													</div>
													<a style="color: #f15424;" id="forget-password"><small >{{trans('front.forget_password')}}</small></a>
													<div id="passwordModel" class="modal">
														<div class="modal-content" style="background: #f4f4f4;margin-top: 82px;">
															<span class="close-forget-password-model">&times;</span>
														
														<div class="titles-container"><h3 class="text-center">{{trans('front.to_connect')}}</h3></div>
														
															<form>
																<div class="form-group"><label  class="sr-only">
																	Email address
																  </label> <input type="text" placeholder="Email address" autocomplete="username" class=" form-control w-727" >
																</div>
																<button type="button" class="btn btn-primary connexion w-727"><!---->
																	{{trans('front.reset_password_link')}}
																</button>
															</form>
															<a style="color: #f15424;" id="forget-password"><small >{{trans('front.register')}}</small></a>
	
														</div>
													</div>
														
													<div class="hr-bar w-727">
														<span  class="hr-bar-content" style="color: rgb(204, 204, 204);">
															<small >{{trans('front.or')}}</small>
														</span>
													</div>
													<button class="btn btn-primary w-727 facebook" >
														{{trans('front.facebook_connexion')}}
													</button>
												</form>
											</div>
									</div>
									<br/>
									<div class="create-compte">
										{{trans('front.create_account')}}<a class="inscription" href="#" id="register" >{{trans('front.register')}}</a>
										<div id="registerModel" class="modal">
											<div class="modal-content" style="background: #f4f4f4;margin-top: 82px;">
												<span class="close-second-model">&times;</span>
												<div class="titles-container">
													<h4 class="text-center">{{trans('front.create_an_account')}}</h4> 
													<h3 class="text-center">{{trans('front.welcome')}}</h3>
													<br/>
													<div class="modal-body"> 
														<div>
														<button id="registrationEmail" class="btn btn-primary w-727 gmail">
															<i class="far fa-envelope-square"></i>{{trans('front.register_email_address')}}
														</button>
														<div id="registerWithEmail" class="modal">
															<div class="modal-content" style="background: #f4f4f4;margin-top: 82px;">
																<div class="controls">
																	<a class="control-left"><i class="fa fa-angle-left icons-design go-back"></i></a>
																	<span class="close-third-model">&times;</span>
																</div>
																<div class="titles-container">
																	<h1 class="text-center">{{trans('front.create_an_account')}}</h1> 
																	<h4 class="text-center">{{trans('front.register_with_email_address')}}</h4>
																	<form>
																		<div class="form-group">
																				<label  class="sr-only">
																				{{trans('front.first_name')}}
																			</label> 
																			<input   type="text" placeholder="First Name" class="form-control">
																		</div>
																		<div class="form-group">
																			<label  class="sr-only">
																			{{trans('front.last_name')}}
																			</label> 
																			<input   type="text" placeholder="Last Name" class="form-control">
																		</div>
																	<div class="form-group">
																		<label  class="sr-only">
																		{{trans('front.email_add')}}
																		</label> 
																		<input type="text" placeholder="Email Address" class="form-control">
																	</div>
																	<label  >
																		<i class="fas fa-info-circle"></i>{{trans('front.minimum_length')}}
																	</label>
																	<div class="form-group">
																		<label  class="sr-only">
																		{{trans('front.password')}}
																		</label> 
																		<input type="password" placeholder="Password" class="form-control">
																	</div>
																	<div class="form-group">
																		<label style="display: flex;"><input style="width: auto;" type="checkbox" class="form-control">
																		<span style="margin-top: 12px;">{{trans('front.agree')}} <a style="display: contents;" class="inscription" href="#" id="register" >{{trans('front.service_terms')}}</a>{{trans('front.and')}} <a style="display: contents;" class="inscription" href="#" id="register" >{{trans('front.privacy_policy')}}</a></span>
																		</label>
																	</div>
																	<button  type="submit" class="btn w-727 connexion">
																		{{trans('front.sign_up')}}
																	  </button>
																	</form>
																<div class="create-compte" style="bottom: -19px;position: relative;">
																	{{trans('front.existed_account')}}<a class="inscription" href="#" id="register" >{{trans('front.to_connect')}}</a>
																</div>
																</div>
																
														  
														</div>
							
													</div>	</div>
														<div class="hr-bar">
															<span  class="hr-bar-content" >
																<small>or</small>
															</span>
														</div> 
														<button class="btn btn-primary facebook w-727">
															{{trans('front.register_facebook')}}
														</button> 
														<br/><br/><br/>
												</div>
												<div class="create-compte" style="bottom: -19px;position: relative;">
													{{trans('front.existed_account')}}<a class="inscription" href="#" id="register" >{{trans('front.to_connect')}}</a>
												</div>
												</div>
												
										  
										</div>
			
									</div>	
								</div>
							  
							</div>
						</li>
						<li><a href="#" >{{trans('front.menu_register')}}</a></li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Hi, Tom!</div>
						<ul>
							<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>


					<a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password"/>
									</label>
									<span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Repeat Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password2" id="password2"/>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
@yield('banner')
@yield('content')
<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<h4>{{trans('front.footer_title_presentation')}}</h4>
				<p>{{trans('front.footer_presentation')}}</p>
			</div>
			<div class="col-md-3  col-sm-6">
				<h4>{{trans('front.footer_social')}}</h4>
				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>
			<div class="col-md-3  col-sm-12">
				<h4>{{trans('front.footer_paiement_methods')}}</h4>
				<ul class="social-icons margin-top-20">
					<li><img width="50" height="180" style="max-width: 100%;height: auto;"  src="images/paiement-methods/Paypal-Icon.png" /></li>
					<li><img width="50" height="180" style="max-width: 100%;height: auto;"  src="images/paiement-methods/Mastercard-Icon.png" /></li>
					<li><img width="50" height="180" style="max-width: 100%;height: auto;"  src="images/paiement-methods/Visa-Icon.png" /></li>
					<li><img width="50" height="180" style="max-width: 100%;height: auto;"  src="images/paiement-methods/Maestro-Icon.png" /></li>
				</ul>

			</div>
			<div class="col-md-3 col-sm-6 ">
				<h4>{{trans('front.footer_helpful_links')}}</h4>
				<ul class="footer-links">
					<li><a href="#">{{trans('front.footer_Help')}}</a></li>
					<li><a href="#">{{trans('front.footer_Contact')}}</a></li>
					<li><a href="#">{{trans('front.footer_Conditions')}}</a></li>
					<li><a href="#">{{trans('front.footer_Disclaimer')}}</a></li>
					<li><a href="#">{{trans('front.footer_imprint')}}</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2020 {{trans('front.footer_campunit_title')}}. {{trans('front.footer_reserved_right')}}.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="scripts/leaflet.min.js"></script>

<!-- Leaflet Maps Scripts -->
<script src="scripts/leaflet-markercluster.min.js"></script>
<script src="scripts/leaflet-gesture-handling.min.js"></script>
<script src="scripts/leaflet-listeo.js"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="scripts/leaflet-autocomplete.js"></script>
<script src="scripts/leaflet-control-geocoder.js"></script>

<script>
	var modal = document.getElementById("myModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
	  modal.style.display = "block";
	}
	span.onclick = function() {
	  modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
	</script>
	<script>
		var registerModel = document.getElementById("registerModel");
		var registerBtn = document.getElementById("register");
		var span = document.getElementsByClassName("close-second-model")[0];
		registerBtn.onclick = function() {
		  registerModel.style.display = "block";
		}
		span.onclick = function() {
		  registerModel.style.display = "none";
		}
		window.onclick = function(event) {
		  if (event.target == registerModel) {
			registerModel.style.display = "none";
		  }
		}
	</script>
	<script>
		var emailModel = document.getElementById("registerWithEmail");
		var emailBtn = document.getElementById("registrationEmail");
		var span = document.getElementsByClassName("close-third-model")[0];
		var back=document.getElementsByClassName("go-back")[0];
		emailBtn.onclick = function() {
		  emailModel.style.display = "block";
		}
		span.onclick = function() {
		  emailModel.style.display = "none";
		}
		back.onclick = function() {
		  emailModel.style.display = "none";
		}
		window.onclick = function(event) {
		  if (event.target == emailModel) {
			emailModel.style.display = "none";
		  }
		}
	</script>
	<script>
		var paswwordModel = document.getElementById("passwordModel");
		var passwordBtn = document.getElementById("forget-password");
		var span = document.getElementsByClassName("close-third-model")[0];
		passwordBtn.onclick = function() {
		  paswwordModel.style.display = "block";
		}
		span.onclick = function() {
		  paswwordModel.style.display = "none";
		}
		window.onclick = function(event) {
		  if (event.target == paswwordModel) {
			paswwordModel.style.display = "none";
		  }
		}
</script>
	<!-- Typed Script -->
<script type="text/javascript" src="scripts/typed.js"></script>
<script>
var typed = new Typed('.typed-words', {
strings: [""," "," "],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->

</body>
</html>
