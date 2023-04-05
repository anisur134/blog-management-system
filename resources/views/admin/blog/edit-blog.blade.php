@extends('admin.master')
@section('body_content')
    <div class="row">
        <div class="col-md-12">
            
              <div class="well">
            
                <form action="{{route('update-blog')}}" method="POST" class="form-horizontal mt-2" name="BlogEditForm" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" class="form-control" name="id" value="{{$blog->id}}">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Category Name</label>
                    <div class="col-md-9">
                        <select class="form-control" name="category_id">
                            <option selected>select category</option>
                            @foreach($categories as $category)

                             <option value="{{$category->id}}">{{$category->category_name}}</option>

                             @endforeach
                        </select>
                    </div>
                </div>
                <!--DISABLE-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Blog Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="blog_title" value="{{$blog->blog_title}}">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-md-3 control-label">Blog Short Description</label>
                    <div class="col-md-9">
                      <textarea name="blog_short_desc" class="form-control">{{$blog->blog_short_desc}}</textarea>
                    </div>
                </div>
               

                <div class="form-group">
                    <label class="col-md-3 control-label">Blog Long Description</label>
                    <div class="col-md-9">
                        <textarea name="blog_long_desc" class="form-control">{{$blog->blog_long_desc}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Blog Title</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="blog_image">
                        <br/>
                        <img src="{{asset($blog->blog_image)}}"  alt="" height="100" width="112"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Blog Publication</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio" {{$blog->publication_stauts==1?'checked':''}}  name="publication_status" value="1">Published</label>
                        <label><input type="radio" {{$blog->publication_stauts==0?'checked':''}}  name="publication_status" value="0">UnPublished</label>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary btn-block">Add Blog</button>
                    </div>
                  </div>
                  
                </form>
              </div>
            
          </div>
          <!-- Basic with Icons -->
    </div>
    <script>
        document.forms['BlogEditForm'].elements['category_id'].value='{{$blog->category_id}}';
    </script>


@endsection