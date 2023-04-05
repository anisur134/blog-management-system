<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'user_email',
        'user_password',
        'user_phone',
        'user_image',

    ];

    private function Imageupload($img){

        $imgName=$img->getClientOriginalName();
        $directory='user_img/';
        $imgUrl=$directory.$imgName;
        $img->move($directory,$imgName);
        return $imgUrl;

}

    public function addNewVisitor($request){
        $visitor=new Visitor();
        $visitor->user_name=$request->user_name;
        $visitor->user_email=$request->user_email;
        $visitor->user_password=bcrypt($request->user_password);
        $visitor->user_phone=$request->user_phone;
        $visitor->user_image=$this->Imageupload($request->file('user_image'));
       
          $visitor->save();
        Session::put('userId',$visitor->id);
        Session::put('userName',$visitor->user_name);
        Session::put('userImg',$visitor->user_image);

        $data=$visitor->toArray();

        Mail::send('frontend.mail.congratulation-mail', $data,function($message) use ($data){

                  $message->to($data['user_email']);
                  $message->subject('Congratulation Subject');

        });


        

    }
}
