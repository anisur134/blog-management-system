@extends('frontend.master')

@section('body')
    <div class="container">
 <h2>{{Session::get('message')}}</h2>
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Blog Post
                    <small>{{$blogs->blog_title}}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('/')}}">Home</a>
                    </li>
                    
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <hr>
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM by <a href="#">Start Boostrap</a>
                </p>
                <hr>
                <img src="{{asset($blogs->blog_image)}}" class="img-responsive">
                <hr>
                <p class="lead">{{$blogs->blog_short_desc}}</p>
                <p class="lead">{{$blogs->blog_long_desc}}</p>
                
                
                </p>
                
                <hr>

                <!-- the comment box -->
                @if($visitorId=Session::get('userId'))
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="{{route('newComment')}}" method="post">
                        @csrf
                        <input type="hidden" name="visitor_id" value="{{$visitorId}}" />
                        <input type="hidden" name="blog_id" value="{{$blogs->id}}" />
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                        </div> <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>
              @else
              <div class="card my-4">
              
              <div class="card-body">
                <h5 class="card-title">You have to comment this blog, please you login<a href="{{route('sign-in')}}">Login</a> or sign-up<a href="{{route('sign-up')}}">Sign-Up</a></h5>
              
              </div>
            </div>
                  

              @endif
                <!-- the comments -->
                @foreach($comments as $comment)
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" style="width:60px;height:60px" src="{{asset($comment->user_image)}}" alt="">
                    <div class="media-body">
                      <h5 class="mt-0">{{$comment->user_name}}</h5>
                    <p>{{$comment->comment}}</p>
                    </div>
                  </div>
                @endforeach
               

            </div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Popular Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                @foreach($categories as $blog)
                                <li><a href="{{$blog->category_id}}">{{$blog->category_name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
                </div>
                <!-- /well -->
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection