<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_description',
        'publication_status',
    ];

    public function SaveaddNewCategory($request){
          // DB::table('categories')->insert([
        //   'category_name'           =>     $request->category_name,
        //   'category_description'    =>    $request->category_description,
        //   'publication_status'      =>     $request->publication_status,
      
        // ]);
        $category=new Category();
        $category->category_name           =     $request->category_name;
        $category->category_description    =   $request->category_description;
        $category->publication_status      =    $request->publication_status;
        $category->save();
    }

public function UpdateCategoryInfo($request){
          // DB::table('categories')->insert([
        //   'category_name'           =>     $request->category_name,
        //   'category_description'    =>    $request->category_description,
        //   'publication_status'      =>     $request->publication_status,
      
        // ]);

        $category=Category::find($request->id);
        $category->category_name           =     $request->category_name;
        $category->category_description    =   $request->category_description;
        $category->publication_status      =    $request->publication_status;
        $category->save();
    }
}
