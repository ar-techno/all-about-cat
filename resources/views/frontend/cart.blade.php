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
					<h1 class="heading text-center">Cart</h1>
				</div>
			</section>
			<section class="cart-content-block container">
				<div class="row">
					<div class="col-xs-12"> 
						<div class="table-responsive">
							<table class="table cart-data-table">
								<thead>
									<tr>
										<th class="Product text-center">Products</th>
										<th class="price text-center">Price</th>
										<th class="Quantity text-center">Quantity</th>
										<th class="Total text-center">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="Product">
											<a href="#" class="btn-remove fa fa-times"></a>
											<div class="img-holder">
												<img src="https://via.placeholder.com/90x90" alt="image description" class="img-resposnive">
											</div>
											<span class="descr-wrap">Pets Puriest</span>
										</td>
										<td class="price"><span><strong class="price element-block"> $34.00</strong></span></td>
										<td class="Quantity">
											<input type="number" class="form-control text-center" min="0" value="1">
										</td>
										<td class="Total"><strong class="element-block price"> $34.00</strong></td>
									</tr>
									<tr>
										<td class="Product">
											<a href="#" class="btn-remove fa fa-times"></a>
											<div class="img-holder">
												<img src="https://via.placeholder.com/90x90" alt="image description" class="img-responsive">
											</div>
											<span class="descr-wrap">Nutri Vitamin+</span>
										</td>
										<td class="price"><span><strong class="price element-block"> $34.00</strong></span></td>
										<td class="Quantity">
											<input type="number" class="form-control text-center" min="0" value="1">
										</td>
										<td class="Total"><strong class="element-block price"> $34.00</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 coupon-wrap">
						<div class="coupon-code pull-left">
							<input class="form-control" placeholder="Coupon Code" type="text">
							<button type="submit" class="btn-primary text-center text-uppercase  pull-right">apply code</button>
						</div>
						<a href="#" class="btn-primary updatebtn text-center text-uppercase pull-right">update cart</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="table-wrap pull-right">
							<h2>Cart Total</h2>
							<ul class="list-unstyled cart-total">
								<li>
									<strong class="title pull-left">Sub-Total</strong>
									<strong class="price pull-right">$74.00</strong>
								</li>
								<li>
									<strong class="title pull-left">Total</strong>
									<strong class="price pull-right">$74.00</strong>
								</li>
							</ul>
							<a href="checkout.html" class="btn-primary text-center text-uppercase">proceed to checkout</a>
						</div>
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