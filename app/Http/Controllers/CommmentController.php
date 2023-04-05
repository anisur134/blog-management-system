<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommmentController extends Controller
{
    public function NewComment(Request $request){
          
        $comment=new Comment();
        $comment->visitor_id=$request->visitor_id;
        $comment->blog_id=$request->blog_id;
        $comment->comment=$request->comment;
        $comment->save();

    return redirect('/blog-details/'.$request->blog_id)->with('message','comment post is successfully');

    }

    public function ManageComment(){
           
           
             return view('admin.comment.manage-comment',[

                'comments'=>DB::table('comments')
                ->join('visitors','comments.visitor_id','=','visitors.id')  
                ->select('comments.*','visitors.user_name') 
               ->orderBy('comments.id','asc')
                ->get()

             ]);

    }

    public function ManageUnpublish($id){

    $publish=Comment::findOrFail($id);
    if($publish->publication_status==0){
      
        $publish->publication_status=1;
        $publish->save();
    }

    return redirect('/manage-comment')->with('message','comment update is successfully');


    }

    public function ManagePublish($id){
        $unpublish=Comment::findOrFail($id);
        if($unpublish->publication_status==1){
      
            $unpublish->publication_status=0;
            $unpublish->save();
        }

  return redirect('/manage-comment')->with('message','comment update is successfully');
        
    }
}
