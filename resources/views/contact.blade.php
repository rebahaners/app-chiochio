@extends('layouts.main')

@section('primary-layout')
    
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
					<h3>CONTACT US</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact us </li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- Breadcrumb Area End -->
		<!-- Contact Area Start -->
        <div class="contact-us ptb-95">
            <div class="container">
                <div class="row">
					<!-- Contact Form Area Start -->
					<div class="col-lg-6">
						<div class="small-title mb-30">
							<h2>Contact Form</h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum available.</p>
						</div>
						<form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/sabujcha/assets/mail.php" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="contact-form-style mb-20">
										<input name="name" placeholder="Full Name" type="text">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="contact-form-style mb-20">
										<input name="email" placeholder="Email Address" type="email">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="contact-form-style mb-20">
										<input name="subject" placeholder="Subject" type="text">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="contact-form-style">
										<textarea name="message" placeholder="Message"></textarea>
										<button class="submit" type="submit">SEND MESSAGE</button>
									</div>
								</div>
							</div>
						</form>
						<p class="form-messege"></p>
					</div>
					<!-- Contact Form Area End -->
					<!-- Contact Address Strat -->
					<div class="col-lg-6">
						<div class="small-title mb-30">
							<h2>Contact Address</h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum available.</p>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="contact-information mb-30">
									<h4>Our Address</h4>
									<p>House. 9, Road. 12, Widgets. Orled. Sydney. Milaro.</p>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="contact-information contact-mrg mb-30">
									<h4>Phone Number</h4>
									<p>
										<a href="tel:01234567890">01234 567 890</a>
										<a href="tel:01234567891">01234 567 891</a>
									</p>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="contact-information contact-mrg mb-30">
									<h4>Web Address</h4>
									<p>
										<a href="mailto:info@example.com">info@example.com</a>
										<a href="#">www.example.com</a>
									</p>
								</div>
							</div>
						</div>
                    </div>
					<!-- Contact Address Strat -->
					<!-- Google Map Start -->
					<div class="col-md-12">
						<div id="store-location">
							<div class="contact-map pt-80">
								<div id="map"></div>
							</div>
						</div>
					</div>
					<!-- Google Map Start -->
                </div>
            </div>
        </div>
		<!-- Contact Area Start -->
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="wishlist.html">WishList</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="#">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your current address goes to here,120 haka, angladesh</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img alt="" src="assets/img/icon-img/payment.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->
        
@endsection
