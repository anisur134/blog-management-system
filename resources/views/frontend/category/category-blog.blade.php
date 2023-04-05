@extends('frontend.master')

@section('body')
   
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder"></h2>
                    <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{asset($blog->blog_image)}}" alt="{{$blog->blog_title}}" />
                    <div class="card-body p-4">
<h5 class="card-title mb-3">{{$blog->blog_title}}</h5>
           <p class="card-text mb-0"><i>{{$blog->blog_short_desc}}</i></p>
                        <p class="card-text mb-0">{{$blog->blog_long_desc}}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary btn-lg px-4" href="{{route('blog-details',['id'=>$blog->id]) }}">Learn More</a>
                                </div>
                </div>
            </div>
           @endforeach
        </div>
        <!-- Call to action-->
        
    </div>
</section>
@endsection