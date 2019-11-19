@extends('layout.master')
@section('head')
<style type="text/css" media="screen">
	.main_title2 h2 {
	    color: #222222;
	    font-size: 18px;
	    font-family: "Roboto", sans-serif;
	    font-weight: 500;
	    line-height: 40px;
	    padding-left: 15px;
	    margin-bottom: 0px;
	    background-color: #dfcad1;
}
</style>
@endsection
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
								<img class="img-fluid" src="img/post/{{$current_post->thumbnail}}" alt="" style="width: 400px; height: 250px;">
							</div>
							<div class="media-body">
								<div class="choice_text">
									<div class="date">
										<a class="gad_btn" href="#">{{$current_post->category}}</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$current_post->date}}</a>
										<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$current_post->view_count}}</a>
									</div>
									<a href="{{route('articles.detail',$current_post->slug)}}"><h4>{{$current_post->title}}</h4></a>
									<p>{{$current_post->short_des}}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				@foreach($category_posts as  $category_post)
				@foreach($category_post as $key => $posts)
				<div class="wedding_megazin mt-100">
					<div class="main_title2">
						<h2>{{$key}}</h2>
					</div>
					<div class="row">
						@foreach($posts as $post)
						<div class="col-sm-6">
							<div class="choice_item">
								<img class="img-fluid" src="img/post/{{$post->thumbnail}}" alt="">
								<div class="choice_text">
									<div class="date">
										<a class="gad_btn" href="#">{{$post->category}}</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->date}}</a>
										<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$post->view_count}}</a>
									</div>
									<a href="{{route('articles.detail',$post->slug)}}"><h4>{{$post->title}}</h4></a>
									<p>{{$post->short_des}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endforeach
				@endforeach
			</div>
			<div class="col-lg-4">
				<div class="right_sidebar">
					<aside class="r_widgets news_widgets">
						<div class="main_title2">
							<h2>Most Popular News</h2>
						</div>
						@foreach($popular_posts as $popular_post)
						<div class="choice_item">
							<img class="img-fluid" src="img/post/{{$popular_post->thumbnail}}" alt="">
							<div class="choice_text">
								<div class="date">
									<a class="gad_btn" href="#">{{$popular_post->category}}</a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$popular_post->date}}</a>
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$popular_post->view_count}}</a>
								</div>
								<a href="{{route('articles.detail',$popular_post->slug)}}"><h4>{{$popular_post->title}}</h4></a>
								<p>{{$popular_post->short_des}}</p>
							</div>
						</div>
						@endforeach
					</aside>
				</div>
			</div>
		</div>
	</div><br><br>
</section>
<!--================End News Area =================-->

@endsection



