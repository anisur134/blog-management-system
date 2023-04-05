@extends('frontend.master')

@section('body')
<div class="container">
    <div class="row">
      <!-- Contact form -->
      <section id="contact-form" class="mt50">
        <div class="col-md-7">
  
          
        
          <form class="clearfix mt50" method="post" action="{{route('add-user')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><span class="required">*</span> Name</label>
                  <input name="user_name" type="text" class="form-control" value="">
                </div>
              </div>
            </div>
           
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><span class="required">*</span> Email Address</label>
                <input name="user_email" type="text" class="form-control" onblur="emailCheck(this.value)">
                <span id="prin" class="text-success"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><span class="required">*</span> Password</label>
                  <input name="user_password" type="password" class="form-control" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"> Phone Number</label>
                  <input name="user_phone" type="text" class="form-control" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><span class="required">*</span>Photo</label>
                  <input type="file" name="user_image" class="form-control">
                </div>
              </div>
            </div>
            <br>
            <button type="submit" class="btn  btn-lg btn-primary" id="regBtn">Regisater Now!</button>
          </form>
  
  
  
  
        </div>
      </section>
    </div>
  </div>
  <script>

    function emailCheck(email){

       //alert('testing the email');

    //   var xmlHttp=new XMLHttpRequest();
    //   var serverPage='http://127.0.0.1:8000/email-check/'+email;

    //         xmlHttp.open('GET',serverPage);
    //         xmlHttp.onreadystatechange=function(){

    //           if(xmlHttp.readyState==4 && xmlHttp.status==200){
                       
               

    //             document.getElementById('res').innerHTML=xmlHttp.responseText;
    //             if(xmlHttp.responseText=='email address is exist'){
    //               document.getElementById('regBtn').disabled=true;
    //             }else{
    //               document.getElementById('regBtn').disabled=false;
    //             }

    //           }
    //         }

    //         xmlHttp.send();




    $.ajax({
url:'http://127.0.0.1:8000/email-check/'+email,
method:'GET',
data:{email:email},
dataType:'JSON',
success:function(res){
        //alert(res);
  document.getElementById('prin').innerHTML=res;
if(res=='email address is exist'){
document.getElementById('regBtn').disabled=true;
}else{
document.getElementById('regBtn').disabled=false;
}

        


}

});





     }




  </script>
  @endsection