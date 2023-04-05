<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
      public function index(){
        return view('frontend.home.homes',[
          'blogs'=>Blog::where('publication_stauts',1)->orderBy('id','desc')->get(),
          'categories'=>Category::where('publication_status',1)->get()

        ]);
      }

      public function CategoryBlog($id,$name){
                   
        return view('frontend.category.category-blog',[

          'categories'=>Category::where('publication_status',1)->get(),
          'blogs'=>Blog::where('category_id',$id)->where('publication_stauts',1)->get()

        ]);

      }
      public function BlogDetails($id){

        return view('frontend.blog.blog-details',[

          'categories'=>Category::where('publication_status',1)->get(),
          
          'blogs'=>Blog::find($id),
          'comments'=>DB::table('comments')
                     ->join('visitors','comments.visitor_id','=','visitors.id')  
                     ->select('comments.*','visitors.user_name','visitors.user_image') 
                     ->where('comments.blog_id',$id)
                     ->orderBy('comments.id','desc')
                     ->get()
        ]);

               

      }

}
