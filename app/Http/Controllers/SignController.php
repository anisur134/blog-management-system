<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SignController extends Controller
{
    public function SignUpPage(){

       return view('frontend.user.signup',['categories'=>Category::where('publication_status',1)->get()]);

    }
    public function NewUser(Request $request){

               $visitor=new Visitor();
        
             $visitor->addNewVisitor($request);
              return redirect('/');
        
    }
    // public function emailCheck($email){

    //   $visitr=Visitor::where('user_email',$email)->first();
    //   if($visitr){

    //     echo "email address is exist";

    //   }else{

    //     echo 'email address is not exist';
    //   }


    // }

    public function emailCheck($email){

      $visitr=Visitor::where('user_email',$email)->first();
      if($visitr){

        return json_encode("email address is exist") ;

      }else{

        return json_encode('email address is not exist') ;
      }


    }
    public function LoginPage(){

      return view('frontend.user.sign-in',[ 'categories'=>Category::where('publication_status',1)->get()]);

   }

   public function Signin(Request $request){

    $visitor=Visitor::where('user_email',$request->user_email)->first();
     if($visitor){
          if(password_verify($request->user_password,$visitor->user_password)){

            Session::put('userId',$visitor->id);
                Session::put('userName',$visitor->user_name);
                Session::put('userImg',$visitor->user_image);
                
                       return redirect('/');

          }

          else{

            return redirect('/sign-in')->with('message',"password is invalid ");
                         
          }

     }else{
                                
      return redirect('/sign-in')->with('message', "Email Address is incorrect");
     }
  
   
}

    public function LogoutUser(Request $request){
                    
              Session::forget('userId');
              Session::forget('userName');
              Session::forget('userImg');
              
              return redirect('/');

    }

}
