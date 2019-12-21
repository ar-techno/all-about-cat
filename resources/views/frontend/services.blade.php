@extends('layouts.frontend.view')
@push('style')
@endpush

@section('content')
	<div id="wrapper">
		<header id="header">
			<div class="header-area container">
				<div class="row">
					<div class="col-xs-12 hidden visible-xs">
						<ul class="list-unstyled social-network text-center">
							<li><a href="mailto:petty@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
							<li><a href="tell:1345678000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<ul class="list-unstyled contact-info">
							<li>
								<a href="mailto:petty@support.com" class="icon pull-left"><i class="icon-message"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Mail us:</strong>
									<a href="mailto:petty@support.com">petty@support.com</a>
								</div>
							</li>
							<li>
								<a href="tell:1345678000" class="icon pull-left"><i class="icon-phone-call"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Call us:</strong>
									<a href="tell:1345678000">(+1) 345 678 000</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<div class="social-list">
							<ul class="list-unstyled social-network">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
							<ul class="list-unstyled account-cart">
								<li><a href="#"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="#"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="logo pull-left hidden visible-xs">
							<a href="index.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a>
						</div>
						<a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
						<nav id="nav">
							<ul class="list-unstyled text-uppercase menu-left">
								<li><a href="index.html">home</a></li>
								<li>
									<a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="services.html">services</a></li>
										<li><a href="aboutus.html">about us</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="404page.html">404 page</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-detail.html">Shop Detail</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li>
								<li class="logo hidden-xs"><a href="index.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a></li>
								<li class="mar-zero">
									<a href="javascript:void(0);">blog</a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="blog-standard.html">Blog Standard</a></li>
										<li><a href="single-blog.html">Single Blog</a></li>
									</ul>
								</li>
								<li><a href="contact-us.html">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main id="main">
			<section class="hero-sec bg-full" style="background-image:url(https://via.placeholder.com/1920x370);">
				<div class="caption">
					<h1 class="heading text-center">Services</h1>
				</div>
			</section>
			<section class="feature-sec container style2">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h2 class="heading text-uppercase">why choose us</h2>
						<span class="icon"><i class="icon-bone"></i></span>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="feature-col">
							<span class="icon round"><i class="icon-bookmark"></i></span>
							<h3 class="heading2">Quality &amp; Caring</h3>
							<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="feature-col">
							<span class="icon round"><i class="icon-shield"></i></span>
							<h3 class="heading2">Insured &amp; Checked</h3>
							<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content </p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="feature-col">
							<span class="icon round"><i class="icon-home"></i></span>
							<h3 class="heading2">Free Home Consulting</h3>
							<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content </p>
						</div>
					</div>
				</div>
			</section>
			<section class="services-sec bg-full" style="background-image:url(https://via.placeholder.com/1920x700);">
				<div class="container">
					<div class="row">
						<header class="col-xs-12 header text-center">
							<h2 class="heading text-uppercase">what we do</h2>
							<span class="icon"><i class="icon-bone"></i></span>
						</header>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="https://via.placeholder.com/215x200" alt="Pet Adoption" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Pet Adoption</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="https://via.placeholder.com/215x200" alt="Pet Grooming" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Pet Grooming</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="https://via.placeholder.com/215x200" alt="Pet Daycare" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Pet Daycare</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="https://via.placeholder.com/215x200" alt="Dog Training" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Dog Training</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="appointment-sec container">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h2 class="heading text-uppercase">get appointment</h2>
						<span class="icon"><i class="icon-bone"></i></span>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<form class="appointment-form text-center" action="#">
							<fieldset>
								<div class="form-group">
									<div class="col">
										<input class="form-control" placeholder="Name" type="text">
									</div>
									<div class="col">
										<input class="form-control" placeholder="Date" type="text">
										<span class="icon icon-calendar"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="col">
										<input class="form-control" placeholder="Pet Type" type="text">
										<span class="icon fa fa-paw"></span>
									</div>
									<div class="col">
										<input class="form-control" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col">
										<input class="form-control" placeholder="Time" type="text">
										<span class="icon icon-clock"></span>
									</div>
									<div class="col">
										<select class="form-control">
											<option value="0">Service we offered</option>
											<option value="1">Service we offered</option>
											<option value="2">Service we offered</option>
										</select>
									</div>
								</div>
								<button class="btn-primary text-center text-uppercase" type="submit">submit</button>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
			<section class="callout" style="background-image:url(https://via.placeholder.com/1920x90);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<h2>Get 50% offer for all pet products</h2>
						</div>
						<div class="col-xs-12 col-sm-6">
							<a class="btn-primary text-uppercase text-center lg-round" href="#">coupon code : PETTY1234</a>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
						<div class="footer-logo">
							<a href="#"><img src="images/footer-logo.png" alt="Pet Shop" class="img-responsive"></a>
						</div>
						<p>It is a long established fact that a reader <br class="hidden-xs">distracted by the readable content</p>
						<ul class="contact-list list-unstyled">
							<li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> No: 801, petty shop, Australia.</li>
							<li><a href="mailto:pettyshop@mail.com"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>pettyshop@mail.com</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> (+23) 900 8990 000 </a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2">
						<h3>Information</h3>
						<ul class="info-list list-unstyled">
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Adoption</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Active Dogs</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Daycare</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Dog Training</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Helpcare</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Instagram</h3>
						<ul class="insta-list list-unstyled">
							<li><a href="#"><img src="https://via.placeholder.com/70x70" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="https://via.placeholder.com/70x70" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="https://via.placeholder.com/70x70" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="https://via.placeholder.com/70x70" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="https://via.placeholder.com/70x70" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="https://via.placeholder.com/70x70" alt="footer-img" class="img-responsive"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Newsletter</h3>
						<div class="newsletter">
							<p>It is a long established fact that a by <br class="hidden-xs">the readable content</p>
							<form class="newsletter-form" action="#">
								<fieldset>
									<input class="form-control" placeholder="Email" type="email">
									<button class="submit-btn round" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
@endsection