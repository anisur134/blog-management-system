@extends('admin.master')
@section('body_content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Comment</h1>
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
                            
                            <th>visitor Name</th>
                           
                            <th>Comment</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                     @foreach($comments as $comment)
                     
                            <tr>
                                <td>{{$i++}}</td>
                                
                                <td>{{$comment->user_name}}</td>
                                <td>{{$comment->comment}}</td>
                               
                                <td>{{$comment->publication_status==1? 'published':'unpublished'}}</td>
                                <td>
                            @if($comment->publication_status==0)
                        <a href="{{route('edit-unpublish',$comment->id)}}" class="btn btn-xs btn-warning">unpublished</a> 
                        @else
                         <a href="{{route('edit-publish',$comment->id)}}" class="btn btn-xs btn-warning">published</a>
                               @endif  
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