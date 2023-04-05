<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function NewCategory(Request $request){

        // DB::table('categories')->insert([
        //   'category_name'           =>     $request->category_name,
        //   'category_description'    =>    $request->category_description,
        //   'publication_status'      =>     $request->publication_status,
      
        // ]);
           //Category::SaveaddNewCategory($request);

        $category=new Category();
        $category->SaveaddNewCategory($request);
        
        return redirect('/manage-category')->with('message','Category Add Succefully');
        
       
    }

    public function CategoryView(){

           $categories=Category::all();

        return view('admin.category.manage-category',compact('categories'));
    }

    public function EditCategory($id){
         $category_info=Category::find($id);
        return view('admin.category.edit-category',compact('category_info'));
    }
    public function UpdateCategory(Request $request){

        $category=new Category;
        $category->UpdateCategoryInfo($request);
        return redirect('/manage-category')->with('message','Category Update Succefully');
   }

   public function DeleteCategory(Request $request){
    $blog=Blog::where('category_id',$request->id)->first();

    if($blog){

return redirect('/manage-category')->with('message','this category not Delete Succefully cause have some blog this category under');
    }
               $category=Category::find($request->id);
               $category->delete();
               return redirect('/manage-category')->with('message','Category Delete Succefully');
   }
}
