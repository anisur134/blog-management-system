@extends('admin.master')
@section('body_content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Blog</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-success text-center">{{Session::get('message')}}</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Category Name</th>
                            <th>Blog Title</th>
                           
                            <th>Blog Description</th>
                            <th>Status</th>
                            <th>Blog Image</th>
                           
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                             @foreach ($blogs as $blog)
                                 
                           
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$blog->category_name}}</td>
                                <td>{{$blog->blog_title}}</td>
                                <td>{{$blog->blog_long_desc}}</td>
                                <td>{{$blog->publication_stauts==1?'Published':'Unpublished'}}</td>
                                <td><img style="width:100px" src="{{asset($blog->blog_image)}}" /></td>
                                <td>
                                    <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-xs btn-warning">Edit</a>
                                    <a href="" id="{{$blog->id}}" class="deletebtn">Delete</a>
                                    <form id="Blogdel{{$blog->id}}" action="{{route('delete-blog')}}" method="post">
                                     @csrf
                                        <input type="hidden" value="{{$blog->id}}" name="id"  />
                                   </form>
                                </td>
                            </tr>
                        
                             
                         @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>



<script>
   
    </script>

@endsection