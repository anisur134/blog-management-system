@extends('frontend.master')
@section('body')
<div class="container pt-5">
    <div class="row"> 
      
     
      <!-- Contact form -->
      <section id="contact-form" class="mt50">
        <div class="col-md-7">
          <h2 class="text-success text-center">{{Session::get('message')}}</h2>
        <form class="clearfix mt50" method="post" action="{{route('sign-user')}}">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name"><span class="required">*</span> Email Address</label>
                <input name="user_email" type="text" class="form-control" >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name"><span class="required">*</span> Password</label>
                <input name="user_password" type="password" class="form-control">
              </div>
            </div>
          </div>
            <br><br>
            <button type="submit" class="btn  btn-lg btn-primary" name="form_login">Login</button>
            <a href="forget.php">Forget Password?</a>
          </form>
  
  
        </div>
      </section>
    </div>
  </div>

  @endsection