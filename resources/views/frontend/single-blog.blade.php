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
					<h1 class="heading text-center">Blog Single</h1>
				</div>
			</section>
			<section class="blog-sec style2 container">
				<div class="row">
					<div class="col-xs-12">
						<article id="content">
							<div class="blog-col">
								<div class="img-holder">
									<a href="#"><img class="img-responsive" src="https://via.placeholder.com/810x410" alt="image description"></a>
									<time class="text-uppercase date" datetime="03-18">18 mar</time>
								</div>
								<ul class="comment-list list-unstyled">
									<li><i class="fa fa-comment-o" aria-hidden="true"></i> 34 Comments / by  </li>
									<li><a href="#"> Admin</a> </li>
								</ul>
								<h4 class="heading">Mistaken idea of denouncing pleasure and praise pain</h4>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
								<p>Majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
								<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
								<p>Randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
								<blockquote class="text-center">
									<q>There are many variations of passages of Lorem Ipsum available, but the majority have <br class="hidden-xs">suffered alteration in some form, by injected humour</q>
								</blockquote>
								<p>Majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p><br>
								<footer class="footer">
									<ul class="list-unstyled social-network">
										<li class="heading">Share</li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									<ul class="list-unstyled tags-list">
										<li class="heading">Tags:</li>
										<li><a href="#">Grooming,</a></li>
										<li><a href="#">Helpcare,</a></li>
										<li><a href="#">Training</a></li>
									</ul>
								</footer>
							</div>
							<div class="holder">
								<h1 class="heading2">Related Posts </h1>
								<div class="row">
									<div class="col-sx-12 col-sm-6">
										<div class="blog-col blog text-center">
											<div class="img-holder overlay">
												<img src="https://via.placeholder.com/390x270" alt="image" class="img-responsive">
												<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
												<time class="text-uppercase date" datetime="2018-02-03 20:00">mar 18</time>
											</div>
											<ul class="comment-list list-unstyled">
												<li><i class="fa fa-comment-o" aria-hidden="true"></i> 34 Comments / </li>
												<li>by <a href="#"> Admin</a></li>
											</ul>
											<h4><a href="single-blog.html"> All this mistaken idea of denouncing pleasure and praise pain</a></h4>
										</div>
									</div>
									<div class="col-sx-12 col-sm-6">
										<div class="blog-col blog text-center">
											<div class="img-holder overlay">
												<img src="https://via.placeholder.com/390x270" alt="image" class="img-responsive">
												<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
												<time class="text-uppercase date" datetime="2018-02-03 20:00">nov 26</time>
											</div>
											<ul class="comment-list list-unstyled">
												<li><i class="fa fa-comment-o" aria-hidden="true"></i> 16 Comments /</li> 
												<li>by <a href="#"> Admin</a></li>
											</ul>	
											<h4><a href="single-blog.html"> But because occasionally circumstan occur in which toil and pain</a></h4>
										</div>
									</div>
								</div>
							</div>
							<div class="comments-block">
								<h4>Comments(02)</h4>
								<!-- comment area of the page -->
								<article class="commment-area">
									<a href="#" class="img"><img src="https://via.placeholder.com/60x60" alt="image description" class="img-responsive"></a>
									<div class="txt-holder">
										<div class="header">
											<h3><a href="#">Peter Jose</a></h3>
											<a href="#" class="reply text-uppercase"><i class="fa fa-reply-all"></i> Reply</a>
										</div>
										<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarsing hidden in the middle of text.</p>
									</div>
								</article>
								<!-- comment one level of the page -->
								<div class="commment-onelevel">
									<article class="commment-area">
										<a href="#" class="img"><img src="https://via.placeholder.com/60x60" alt="image description" class="img-responsive"></a>
										<div class="txt-holder">
											<div class="header">
												<h3><a href="#">Adam Joe</a></h3>
												<a href="#" class="reply text-uppercase"><i class="fa fa-reply-all"></i> Reply</a>
											</div>
											<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarsing hidden in the middle of text.</p>
										</div>
									</article>
								</div>
							</div>
							<div class="contact-sec">
								<h2>Post a Comment</h2>
								<form class="contact-form" action="#">
									<fieldset>
										<div class="form-group">
											<div class="col">
												<input class="form-control lg-round" placeholder="Name" type="text">
											</div>
											<div class="col">
												<input class="form-control lg-round" placeholder="Email" type="email">
											</div>
										</div>
										<textarea class="lg-round" placeholder="Comments"></textarea>
										<a class="btn-primary text-center text-uppercase lg-round" href="#">post comment</a>
									</fieldset>
								</form>
							</div>
						</article>
						<aside id="sidebar">
							<section class="widget">
								<form class="search-form" action="#">
									<fieldset>
										<input class="form-control" placeholder="Search...." type="search">
										<button class="submit-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									</fieldset>
								</form>
							</section>
							<section class="widget">
								<h3>Categories</h3>
								<ul class="list-unstyled category-list">
									<li><a href="#"><span class="icon fa fa-paw"></span> Pet Grooming</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> Pet Daycare</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> Pet Adoption</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> Dog Training</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> Pet Clinic</a></li>
								</ul>
							</section>
							<section class="widget">
								<h3>Latest Posts</h3>
								<ul class="list-unstyled feature-list feature2">
									<li>
										<div class="img-holder">
											<a href="single-blog.html"><img class="img-responsive" src="https://via.placeholder.com/70x70" alt="image description"></a>
										</div>
										<div class="txt-holder">
											<h3><a href="single-blog.html">Many desktop publishing web page editors</a></h3>
											<time class="time" datetime="2018-02-03 20:00">2 months ago</time>
										</div>
									</li>
									<li>
										<div class="img-holder">
											<a href="single-blog.html"><img class="img-responsive" src="https://via.placeholder.com/70x70" alt="image"></a>
										</div>
										<div class="txt-holder">
											<h3><a href="single-blog.html">Various versions have evols over the years</a></h3>
											<time class="time" datetime="2018-02-03 20:00">1 Day ago</time>
										</div>
									</li>
									<li>
										<div class="img-holder">
											<a href="single-blog.html"><img class="img-responsive" src="https://via.placeholder.com/70x70" alt="image"></a>
										</div>
										<div class="txt-holder">
											<h3><a href="single-blog.html">Lorem Ipsum is therefore always free</a></h3>
											<time class="time" datetime="2018-02-03 20:00">5 mins ago</time>
										</div>
									</li>
								</ul>
							</section>
							<section class="widget">
								<h3>Archives</h3>
								<ul class="list-unstyled category-list">
									<li><a href="#"><span class="icon fa fa-paw"></span> January 2018</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> February 2018</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> March 2018</a></li>
									<li><a href="#"><span class="icon fa fa-paw"></span> April 2018</a></li>
								</ul>
							</section>
						</aside>
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