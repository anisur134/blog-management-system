<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function addBlog(){
        $categories=Category::where('publication_status',1)->get();
        return view('admin.blog.add-blog',compact('categories'));
    }

    public function NewBlog(Request $request){
            
        
             $blog=new Blog();
             $blog->addNewBlog($request);
            
             return redirect('/add-blog')->with('message','Blog Add Succefully');
        
       
    }

    public function BlogView(){
        $blogs=DB::table('blogs')
        ->join('categories','blogs.category_id','=','categories.id')
        ->select('blogs.*','categories.category_name')
        ->get();
        return view('admin.blog.manage-blog',['blogs' =>$blogs]);
    }

    public function EditBlog($id){
       
        return view('admin.blog.edit-blog',[
            'categories' =>Category::where('publication_status',1)->get(),
            'blog' =>Blog::find($id)

        ]);
    }

    public function UpdateBlog(Request $request){
          
        $blog=new Blog();
        $blog->UpdateBlog($request);
        return redirect('/manage-blog')->with('message','Blog Update Succefully');

    }

    public function DeleteBlog(Request $request){
        $blog=Blog::find($request->id);
       unlink($blog->blog_image);
       
        $blog->delete();
        return redirect('/manage-blog')->with('message','Blog Delete Succefully');
}
}
