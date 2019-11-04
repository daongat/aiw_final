<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Force Magazine</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu">
            	<div class="container">
            		<div class="float-left">
						<a href="#" id="today"></a>
					</div>
					<div class="float-right">
						<ul class="list header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
            	</div>
            </div>
            <div class="logo_part">
            	<div class="container">
            		<div class="float-left">
						<a class="logo" href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
					</div>
            	</div>
            </div>
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<div class="container_inner">
							<!-- Brand and toggle get grouped for better mobile display -->
							<a class="navbar-brand logo_h" href="index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav">
									<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li> 
									<li class="nav-item"><a class="nav-link" href="#">Sport</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Health</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Economic</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Policy</a></li>

								</ul>
								<ul class="nav navbar-nav navbar-right ml-auto">
									<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
								</ul>
							</div> 
						</div>
					</div>
				</nav>
			</div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#" id="date"><i class="fa fa-calendar" aria-hidden="true"></i></a>
									</div>
									<h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section><br><br>
        <!--================End Home Banner Area =================-->
		@yield('content')     
        <!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="container">
                <div class="row f_widgets_inner">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget ab_widgets">
                           <img src="{{asset('img/footer-logo.png')}}" alt=""> 
                           <p>Technology and gadgets Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones you’re most comfortable with. It has an iPhone-compatible jack at one end and a microphone module with an Answer/End/Pause button and a female 3.5mm audio jack for connectingheadphones</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="f_title">
                            	<h3>Quick Links</h3>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list">
                                        <li><a href="#">Sitemaps</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Archives</a></li>
                                        <li><a href="#">Advertise</a></li>
                                        <li><a href="#">Ad Choice</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Newsletters</a></li>
                                        <li><a href="#">Feedback</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget m_news_widgets">
                            <div class="f_title">
                            	<h3>Most Viewed News</h3>
                            </div>
                            <div class="m_news">
                            	<div class="media">
                            		<div class="d-flex">
                            			<img src="{{asset('img/product/')}}product-13.jpg" alt="">
                            		</div>
                            		<div class="media-body">
                            			<a href="#"><h4>Converter Ipod Video Taking Portable Video Viewing To A Whole Level</h4></a>
                            			<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
                            		</div>
                            	</div>
                            	<div class="media">
                            		<div class="d-flex">
                            			<img src="{{asset('img/product/product-14.jpg')}}" alt="">
                            		</div>
                            		<div class="media-body">
                            			<a href="#"><h4>Sony Laptops Are Still Part Of The Sony Family</h4></a>
                            			<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>	
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                   	<div class="col-lg-12">
                   		<div class="f_boder"></div>
                   	</div>
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/stellar.js')}}"></script>
        <script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('js/theme.js')}}"></script>

        <script type="text/javascript">
        	var fullDate = new Date();
			var twoDigitMonth = fullDate.getMonth()+"";if(twoDigitMonth.length==1)	twoDigitMonth="0" +twoDigitMonth;
			var twoDigitDate = fullDate.getDate()+"";if(twoDigitDate.length==1)	twoDigitDate="0" +twoDigitDate;
		  	var weekday = new Array(7);
		  	weekday[0] = "Sunday";
		  	weekday[1] = "Monday";
		  	weekday[2] = "Tuesday";
		 	weekday[3] = "Wednesday";
		  	weekday[4] = "Thursday";
		  	weekday[5] = "Friday";
		  	weekday[6] = "Saturday";
		  	var n = weekday[fullDate.getDay()];
			var currentDate = n + " " + twoDigitDate + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
			document.getElementById("today").innerHTML = currentDate;
			document.getElementById("date").innerHTML = currentDate;
        </script>
        @yield('script')
    </body>
</html>