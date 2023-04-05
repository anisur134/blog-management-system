<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'blog_title',
        'blog_short_desc',
        'blog_long_desc',
        'blog_image',
        'publication_stauts',
    ];
    private function Imageupload($img){
           
            $imgName=$img->getClientOriginalName();
            $directory='blog_img/';
            $imgUrl=$directory.$imgName;
            $img->move($directory,$imgName);
            return $imgUrl;
           

           
       

}
    public function addNewBlog($request){

       $blog=new Blog();
        $blog->category_id=$request->category_id;
        $blog->blog_title=$request->blog_title;
        $blog->blog_short_desc=$request->blog_short_desc;
        $blog->blog_long_desc=$request->blog_long_desc;
        $blog->blog_image=$this->Imageupload($request->file('blog_image'));
        $blog->publication_stauts=$request->publication_status;
  
          $blog->save();
          
          
    }
       

    public function UpdateBlog($request){
        $blog=Blog::find($request->id);
        $blockImg=$request->file('blog_image');
        if($blockImg){
           
            unlink($blog->blog_image);
            $imgpath=$this->Imageupload($blockImg);

        }
      
        //  $blog=new Blog();
         $blog->category_id=$request->category_id;
        $blog->blog_title=$request->blog_title;
        $blog->blog_short_desc=$request->blog_short_desc;
        $blog->blog_long_desc=$request->blog_long_desc;
        if(isset($imgpath)){

               $blog->blog_image=$imgpath;

               }
        $blog->publication_stauts=$request->publication_status;
        $blog->save();
       
          

  
}
}
