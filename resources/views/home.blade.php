@extends('layout.master')
@section('content')
 <!--================News Area =================-->
<section class="news_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="main_title2">
					<h2>Latest News</h2>
				</div>
				<div class="latest_news">
					@foreach($current_posts as $current_post)
						<div class="media">
							<div class="d-flex">
								<img class="img-fluid" src="{{$current_post->thumbnail}}" alt="">
							</div>
							<div class="media-body">
								<div class="choice_text">
									<div class="date">
										<a class="gad_btn" href="#">{{$current_post->category}}</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$current_post->date}}</a>
										<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$current_post->view_count}}</a>
									</div>
									<a href="news-details.html"><h4>{{$current_post->title}}</h4></a>
									<p>{{$current_post->short_des}}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="tavel_food mt-100">
					<div class="main_title2">
						<h2>Travel and food</h2>
					</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="row choice_small_inner">
									<div class="col-lg-6 col-sm-6">
										<div class="choice_item small">
										<img class="img-fluid" src="img/blog/popular-post/pp-4.jpg" alt="">
										<div class="choice_text">
											<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
											<div class="date">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
												<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
											</div>
										</div>
									</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="choice_item small">
										<img class="img-fluid" src="img/blog/popular-post/pp-5.jpg" alt="">
										<div class="choice_text">
											<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
											<div class="date">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
												<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
											</div>
										</div>
									</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="choice_item small">
										<img class="img-fluid" src="img/blog/popular-post/pp-6.jpg" alt="">
										<div class="choice_text">
											<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
											<div class="date">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
												<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
											</div>
										</div>
									</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="choice_item small">
										<img class="img-fluid" src="img/blog/popular-post/pp-7.jpg" alt="">
										<div class="choice_text">
											<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
											<div class="date">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
												<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="choice_item">
								<img class="img-fluid" src="img/blog/popular-post/pp-8.jpg" alt="">
								<div class="choice_text">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<a href="news-details.html"><h4>Dealing With Technical Support with 10 Useful Tips</h4></a>
									<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
								</div>
							</div>
							</div>
						</div>
				</div>
				<div class="wedding_megazin mt-100">
					<div class="main_title2">
						<h2>Wedding adventure</h2>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="choice_item">
								<img class="img-fluid" src="img/blog/popular-post/pp-9.jpg" alt="">
								<div class="choice_text">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
									<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="choice_item">
								<img class="img-fluid" src="img/blog/popular-post/pp-10.jpg" alt="">
								<div class="choice_text">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
									<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="choice_item small">
								<img class="img-fluid" src="img/blog/popular-post/pp-11.jpg" alt="">
								<div class="choice_text">
									<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
									<div class="date">
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="choice_item small">
								<img class="img-fluid" src="img/blog/popular-post/pp-12.jpg" alt="">
								<div class="choice_text">
									<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
									<div class="date">
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="choice_item small">
								<img class="img-fluid" src="img/blog/popular-post/pp-13.jpg" alt="">
								<div class="choice_text">
									<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
									<div class="date">
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="choice_item small">
								<img class="img-fluid" src="img/blog/popular-post/pp-14.jpg" alt="">
								<div class="choice_text">
									<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
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
			<div class="col-lg-4">
				<div class="right_sidebar">
					<aside class="r_widgets news_widgets">
						<div class="main_title2">
							<h2>Most Popular News</h2>
						</div>
						<div class="choice_item">
							<img class="img-fluid" src="img/blog/popular-post/pp-1.jpg" alt="">
							<div class="choice_text">
								<div class="date">
									<a class="gad_btn" href="#">Gadgets</a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
								<a href="news-details.html"><h4>Dealing With Technical Support with 10 Useful Tips</h4></a>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
							</div>
						</div>
							<div class="news_slider owl-carousel">
								<div class="item">
									<div class="choice_item">
									<img src="img/blog/popular-post/pp-2.jpg" alt="">
									<div class="choice_text">
										<a href="news-details.html"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
									</div>
								</div>
								</div>
								<div class="item">
									<div class="choice_item">
									<img src="img/blog/popular-post/pp-3.jpg" alt="">
									<div class="choice_text">
										<a href="news-details.html"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
									</div>
								</div>
								</div>
								<div class="item">
									<div class="choice_item">
									<img src="img/blog/popular-post/pp-2.jpg" alt="">
									<div class="choice_text">
										<a href="news-details.html"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
									</div>
								</div>
								</div>
								<div class="item">
									<div class="choice_item">
									<img src="img/blog/popular-post/pp-3.jpg" alt="">
									<div class="choice_text">
										<a href="news-details.html"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
									</div>
								</div>
								</div>
								<div class="item">
									<div class="choice_item">
									<img src="img/blog/popular-post/pp-2.jpg" alt="">
									<div class="choice_text">
										<a href="news-details.html"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
									</div>
								</div>
								</div>
								<div class="item">
									<div class="choice_item">
									<img src="img/blog/popular-post/pp-3.jpg" alt="">
									<div class="choice_text">
										<a href="news-details.html"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
										</div>
									</div>
								</div>
								</div>
							</div>
					</aside>
					<aside class="r_widgets add_widgets text-center">
						<img class="img-fluid" src="img/blog/add-1.jpg" alt="">
					</aside>
					<aside class="r_widgets social_widgets">
						<div class="main_title2">
							<h2>Social Networks</h2>
						</div>
						<ul class="list">
							<li><a href="#"><i class="fa fa-facebook"></i> 983Likes <span>Like our page</span></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> 983Followers <span>Follow Us</span></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i> 9835Subscriber <span>Subscribe</span></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i> 59874Subscriber <span>Subscribe</span></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> 36958Followers <span>Follow Us</span></a></li>
							<li><a href="#"><i class="fa fa-rss"></i>RSS Subscribe <span>Subscribe</span></a></li>
						</ul>
					</aside>
					<aside class="r_widgets newsleter_widgets">
						<div class="main_title2">
							<h2>Newsletter</h2>
						</div>
						<div class="nsl_inner">
							<i class="fa fa-envelope"></i>
							<h4>Subscribe to our Newsletter</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua adipisicing</p>
							<div class="form-group d-flex flex-row">
								<div class="input-group">
									<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
								</div>
								<a href="#" class="bbtns">Subcribe</a>
							</div>	
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End News Area =================-->

<!--================Product List Area =================-->
<section class="product_list_area p_100">
	<div class="container">
		<div class="row product_list_inner">
			<div class="col-lg-4">
				<div class="main_title2">
					<h2>Best Product Deals</h2>
				</div>
				<div class="product_list">
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-1.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Video Games Playing With Imagination That surprise you</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-2.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>A Discount Toner Cartridge Is Better Than Ever And You Will Save</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-3.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Microsoft Patch Management For Home Users</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-4.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Asus Laptops Are Still Part Of The Dell Family</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="main_title2">
					<h2>Tech Culture</h2>
				</div>
				<div class="product_list">
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-5.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Will The Democrats Be Able To Reverse The Online Gambling Ban</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-6.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>For Women Only Your Computer Usage Could Cost You Your Job</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-7.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Converter Ipod Video Taking Portable Video Viewing To A Whole Level</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-8.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
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
			<div class="col-lg-4">
				<div class="main_title2">
					<h2>Brilliant Ideas</h2>
				</div>
				<div class="product_list">
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-9.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Las Vegas How To Have Non Gambling Related Fun</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-10.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Website Hosting Reviews Free The Best Resource For Website</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-11.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>Compatible Inkjet Cartridge Which One Will You Choose</h4></a>
								<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="d-flex">
							<img src="img/product/product-12.jpg" alt="">
						</div>
						<div class="media-body">
							<div class="choice_text">
								<a href="#"><h4>How To Protect Your Computer Wery Useful Tips</h4></a>
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
	</div>
</section>
<!--================End Product List Area =================-->
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
	$.ajax({
        type: 'get',
        url: "{{route('article.index')}}",
        success: function(response){
        	console.log(response)
        }
    });
});
</script>
@endsection