@extends('admin.master')
@section('body_content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Category</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <h2 class="text-success text-center">{{Session::get('message')}}</h2>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            
                            <th>Category Name</th>
                           
                            <th>Category Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                     @foreach($categories as $category)
                     
                            <tr>
                                <td>{{$i++}}</td>
                                
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_description}}</td>
                               
                                <td>{{$category->publication_status}}</td>
                                <td>
                        <a href="{{route('edit-category',$category->id)}}" class="btn btn-xs btn-warning">Edit</a>
                        <a href="" id="{{$category->id}}" class="delete-btn">Delete</a>
                                 <form id="Categorydel{{$category->id}}" action="{{route('delete-category')}}" method="post">
                                  @csrf
                                     <input type="hidden" value="{{$category->id}}" name="id"  />
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

 



@endsection