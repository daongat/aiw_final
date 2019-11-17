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
.comment-form .form-control {
    padding: 8px 20px;
    background: #e5e5f4;
    border: none;
    border-radius: 0px;
    width: 100%;
    font-size: 14px;
    color: #777777;
    font-family: "Open Sans", sans-serif;
    border: 1px solid transparent;
}
</style>
@endsection
@section('content')
<section class="news_area single-post-area p_100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main_blog_details">
          <img class="img-fluid" src="{{$article->thumbnail}}" alt="">
          <a href="#"><h4>{{$article->title}}</h4></a>
          <div class="user_details">
            <div class="float-left">
              <a href="#">{{$article->category}}</a>
            </div>
            <div class="float-right">
              <div class="media">
                <div class="media-body">
                  <h5>{{$article->author}}</h5>
                  <p>{{$article->date}}</p>
                </div>
              </div>
            </div>
          </div>
          <p>{{$article->content}}</p><br>
          @foreach($tags as $tag)
          Tags: <a class="gad_btn" href="{{route('articles.tag', $tag->tag_id)}}">{{$tag->name}}</a>
          @endforeach
          <div class="news_d_footer">
            <div class="news_socail ml-auto">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
              <a href="#"><i class="fa fa-rss"></i></a>
            </div>
          </div>
        </div>
        <div class="comments-area">
            <h4>{{$feedback_count}} Comments</h4>
            @if($feedback_count >0)
              @foreach($feedbacks as $feedback)
              <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{asset('img/blog/c1.jpg')}}" alt="">
                        </div>
                        <div class="desc">
                            <h5><a href="#">{{$feedback->reader_name}}</a></h5>
                            <p class="date">{{$feedback->date}} </p>
                            <p class="comment">
                                {{$feedback->content}}
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                  <button class="btn btn-warning btn-sm edit"  data-id = "{{$feedback->id}}">Edit</button>
                  <button class="btn btn-danger btn-sm delete" data-id = "{{$feedback->id}}">Delete</button>
                </div>
              </div>
              @endforeach
            @endif                                                       
        </div>
        <div class="comment-form">
            <h4>Leave a Comment</h4>
            <form id="createFeedback" method="POST" action="">
                <div class="form-group form-inline">
                  <div class="form-group col-lg-6 col-md-6 name">
                    <input type="text" class="form-control" id="name" value="" placeholder="Enter Name"  required="">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 email">
                    <input type="email" class="form-control" id="email" value="" placeholder="Enter email address"  required="">
                  </div>                    
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control mb-10" rows="5" id="content" value="" name="content" placeholder="Messege" required=""></textarea>
                </div>
                <button type="submit" class="primary-btn submit_btn">Post Comment</button>
            </form>
            <form id="editFeedback" method="POST" action="">
              <input type="hidden" name="" id="edit-id" value="">
                <div class="form-group form-inline">
                  <div class="form-group col-lg-6 col-md-6 name">
                    <input type="text" class="form-control" id="edit-name" value="" placeholder="Enter Name"  required="">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 email">
                    <input type="email" class="form-control" id="edit-email" value="" placeholder="Enter email address"  required="">
                  </div>                    
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="" id="edit-subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control mb-10" rows="5" id="edit-content" value="" name="content" placeholder="Messege" required=""></textarea>
                </div>
                <button type="submit" class="primary-btn submit_btn">Update Comment</button>
            </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="right_sidebar">
          <aside class="r_widgets news_widgets">
            <div class="main_title2">
              <h2>Most Popular News</h2>
            </div>
            @foreach($popular_posts as $popular_post)
            <div class="choice_item">
              <img class="img-fluid" src="{{$popular_post->thumbnail}}" alt="">
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
  </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
  $('#createFeedback').css('display','block');
  $('#editFeedback').css('display', 'none');
});
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});
$(document).on('submit', '#createFeedback', function(e){
  e.preventDefault();
  $.ajax({
    type: 'post',
    url: "{{route('articles.addFeedback', $article->id)}}",
    data: {
      reader_name: $('#name').val(),
      reader_email: $('#email').val(),
      subject: $('#subject').val(),
      content: $('#content').val()
      
    },
    success: function(response){
      location.reload();
      }
    })
});
$('body').on('click', '.delete', function () {
    var id = $(this).attr('data-id')
    var path = "http://localhost/aiw_final/public/api/articles/delete/"+id;

    swal({
        title: "Bạn chắc chắn muốn xóa?",
        text: "Dữ liệu đã xóa không thể khôi phục!",
        icon: "warning",
        buttons: ['Hủy', 'Xóa'],
        dangerMode: true

        // closeOnConfirm: false,
    }).then(function (willDelete) {
        if (willDelete) {
            $.ajax({
                type: "delete",
                url: path,
                success: function success(response) {
                    if (!response.error) {
                        location.reload();
                    }
                },
                error: function error(xhr, ajaxOptions, thrownError) {
                    toastr.error(thrownError);
                }
            });
        } else {
            toastr.info("Thao tác xóa đã bị huỷ bỏ!");
        }
    });
});
$('body').on('click', '.edit', function () {
  $('#createFeedback').css('display','none');
  $('#editFeedback').css('display', 'block');
  var id = $(this).attr('data-id');
  $.ajax({
    type: 'get',
    url: "http://localhost/aiw_final/public/api/articles/edit/"+id,
    success: function(response){
        $('#edit-name').val(response.reader_name);
        $('#edit-email').val(response.reader_email);
        $('#edit-subject').val(response.subject);
        $('#edit-content').val(response.content);
        $('#edit-id').val(response.id)
        }
    });
});
$(document).on('submit', '#editFeedback', function(e){
  e.preventDefault();
  var id = $('#edit-id').val();
  $.ajax({
    type: 'post',
    url: "http://localhost/aiw_final/public/api/articles/update/"+id,
    data: {
      reader_name: $('#edit-name').val(),
      reader_email: $('#edit-email').val(),
      subject: $('#edit-subject').val(),
      content: $('#edit-content').val()
      
    },
    success: function(response){
      location.reload();
      }
    })
});
</script>
@endsection