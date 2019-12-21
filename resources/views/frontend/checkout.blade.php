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
					<h1 class="heading text-center">Checkout</h1>
				</div>
			</section>
			<section class="check-sec container">
				<div class="row">
					<div class="col-xs-12">
						<div class="txt-wrap">
							<p>Returning customer? <a href="#">Click here to login</a></p>
						</div>
						<div class="txt-wrap">
							<p>Have a coupon?  <a href="#">Click here to enter your code</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<form class="checkout-form text-left" action="#">
							<fieldset>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<h2>Billing Details</h2>
										<div class="form-group">
											<div class="holder">
												<div class="col">
													<label>First Name <span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
												<div class="col">
													<label>Last Name<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
											</div>
											<label>Company Name<span class="sign">*</span></label>
											<input class="form-control " placeholder="" type="text">
											<label>Address 1<span class="sign">*</span></label>
											<input class="form-control" placeholder="" type="text">
											<label>Address 2 [optional}</label>
											<input class="form-control" placeholder="" type="text">
											<div class="holder">
												<div class="col">
													<label>Email Address<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
												<div class="col">
													<label>Phone<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
											</div>
											<div class="holder">
												<div class="col">
													<label>Town/City<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
												<div class="col">
													<label>Pin code/Zip<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
											</div>
											<label>Country<span class="sign">*</span></label>
											<select class="form-control">
												<option value="0">United States</option>
												<option value="1">United States</option>
												<option value="2">United States</option>
											</select>
										</div>
										<div class="form-group">
										    <input type="checkbox" class="checkbox">
										    <span class="check-holder">Create an Account?</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<h2>Additional Info</h2>
										<div class="form-group">
											<label>Other Notes</label>
											<textarea class="form-control" placeholder="Notes about your order, e.g: your delivery"></textarea>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-bordered">
							<caption>Your Order</caption>
							<thead>
								<tr>
									<th>Products</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Pets Puriest  × 1</td>
									<td>34.00</td>
								</tr>
								<tr>
									<td>Nutri Vitamin+ × 1</td>
									<td>$40.00</td>
								</tr>
								<tr class="total">
									<td>Sub-Total</td>
									<td class="clr">$74.00</td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<td class="clr">$74.00</td>
								</tr>
							</tbody>
						</table>
						<div class="payment-holder">
							<h2>Payment Method</h2>
							<form  class="payment-form" action="#">
								<div class="form-group"> 
									<label>
										<input type="checkbox" class="check" name="checkbox" value="value" checked>Cheque Payment
									</label>
									<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
								</div>
								<div class="form-group"> 
									<label>
										<input type="checkbox" class="check" name="checkbox" value="value">Direct Transfer
									</label>
								</div>
								<div class="form-group block">
									<label>
										<input type="checkbox" class="check" name="checkbox" value="value">Paypal
										<img src="images/img49.jpg" class="img-responsive" alt="payment-method-image">
										<a href="#">What is Paypal?</a>
									</label>
								</div>
								<input type="submit" value="place your order" class="text-uppercase submit-btn">
							</form>
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