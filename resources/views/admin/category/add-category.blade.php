@extends('admin.master')
@section('body_content')
    <div class="row">
        <div class="col-md-12">
            
              <div class="well">
            
                <form action="{{route('new-category')}}" method="POST" class="form-horizontal mt-2">
                  @csrf
                  <div class="form-group">
                    <label class="col-md-3 control-label">Category Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="category_name" placeholder="Enter Category name">
                    </div>
                </div>
                <!--DISABLE-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Category Description</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="category_description" placeholder="Enter Category name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Category Publication</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio"  name="publication_status" value="1">Published</label>
                        <label><input type="radio"  name="publication_status" value="0">UnPublished</label>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary btn-block">Add Category</button>
                    </div>
                  </div>
                  
                </form>
              </div>
            
          </div>
          <!-- Basic with Icons -->
    </div>
@endsection