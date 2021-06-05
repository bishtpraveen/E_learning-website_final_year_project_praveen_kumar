



@extends('layout')
@section('main-content')

<!-- login form -->

    <div class="row" style="background-image: url(https://images.unsplash.com/photo-1594085951586-67c71f896e9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80); background-repeat: no-repeat; background-size: cover; " >

        <div class="col-md-5 mx-auto px-0">


        @if(Session::has('error'))
<div class="row">

<div class="col-md-2">
</div>


<div class="col-md-6 mx-auto px-0">


<div class="alert alert-danger">
{{Session::get('error')}}
</div>

</div>


<div class="col-md-2">
</div>
</div>
@endif



    
@if(Session::has('success'))
<div class="row">

<div class="col-md-2">
</div>


<div class="col-md-6 mx-auto px-0">


<div class="alert alert-success text-center">
{{Session::get('success')}}
</div>

</div>


<div class="col-md-2">
</div>
</div>
@endif


<div class="modal" id="forgetPassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey;  background-image: url(https://images.unsplash.com/photo-1594085951586-67c71f896e9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80); background-repeat: no-repeat; background-size: cover; ">
      <div class="modal-header">
        <h5 class="modal-title text-light" >Forget Password ?</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <small class="text-light" >Please fill a valid email to reset password </small>
<div class="container">
  <div class="row">
    <div class="col-md-10 ">
    @csrf
    <p  id="msg"></p>
  <input type="email" id="email" class="form-control">
  <button class="btn  btn-primary my-4 " id="emailCheck">Submit</button>
  
  
    </div>
  </div>
</div>

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$('#emailCheck').click(function(){
let token= $('input[name="_token"]').val()

let enterEmail= $("#email").val();
$.ajax({

  url:"{{url('forgetPasswordEducator')}}",
  type:'post',
  data:{email:enterEmail,_token:token},
  success:function(data){
   if(data==0){

    $('#msg').html('Email is not registered with us')
    $('#msg').css('color','red')
    return false;
   }

   
   $('#msg').html('link is sent to your register email')
    $('#msg').css('color','white')
    return false;
  }
})


})
</script>

        
            <form action="{{url('educator_login_form')}}" method="post"  style="  border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey; "  class="p-5 ">
            @csrf
            
                <h3 style="border-bottom: 1px solid white; color: white;" class="text-center p-2">Login Educator</h3>
                <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;" class="fas fa-envelope mr-1 mt-2"></i>
                    <input style=" background: transparent; border-radius: 15px 45px;" name="username" type="text" placeholder=" Enter Username" class="form-control bg-light" >
                  </div>
                <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;" class="fas fa-envelope mr-1 mt-2"></i>
                    <input style=" background: transparent; border-radius: 15px 45px;" name="email" type="email" placeholder=" Enter Your Email" class="form-control bg-light" >
                  </div>
                  <div class="my-5" style="display:flex">
                    <i style="color: white;" class="fas fa-key mr-1 mt-2 "></i>
                    <input style=" background: transparent; border-radius: 15px 45px; " name="password" type="password" placeholder="Enter Your Password" class="form-control bg-light" >
            
                  </div>
                  
                 
                 
                  <p class="ml-5 " style="color: white;"> Forget Password? <a class="text-center" style="color: white;" href="javascript:void(0)"  data-toggle="modal" data-target='#forgetPassword' >Click Here </a></p>
                  <input type="checkbox"><span class="ml-2" style="color: white;" required> Remember me</span>
                  <p class=" mx-auto my-5">   <input type="submit" value="login" class="btn btn-primary btn-outline-light  form-control  "></p>
               
                  <h3 style="color: white; text-align: center;  " class="my-5">OR Login with</h3>
                  <div class="my-3" style="display: flex; justify-content: space-around; font-size: large; border: none; color: white;">
            
                    <!-- <input type="submit" value="Sign Up" class="form-control bg-light w-100"> -->
            
            
            

            <a href="https://www.facebook.com/profile.php?id=100050210652658"> <i  style="font-size: larger;color:	#4267B2;  " class="fab fa-facebook"></i></a> 
             <a href="https://www.instagram.com/praveenkumarbisht/"> <i  style="font-size: larger;  color:#8a3ab9;" class="fab fa-instagram"></i></a>
             <a href=""> <i  style="font-size: larger; color:#0e76a8; " class="fab fa-linkedin"></i></a>  
             <a href=""> <i  style="font-size: larger;color:	#1DA1F2;  " class="fab fa-twitter-square"></i></a> 
             <a href=""><i  style="font-size: larger; color:#DD4B39;" class="fab fa-google-plus-g"></i></a>    
                   
                   
                   
                    
            
            
                  </div>
            
            
            
              
            
            
            
            
            
            
            
            
            
            
            
            </form>
        </div>



        <div class="col-md-4 mx-auto px-0 text-light">




        <form action="" style="  border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey; "  class="p-5 my-5 ">
        <h3 class="text-center my-5 p-5" > <a class="text-light " style="text-decoration: none;"  href="{{url('home1')}}"> Learn anything </a></h3>
      
<a href="{{url('sign_up')}}" class="btn btn-primary btn-outline-light  form-control  " >SignUp as Learner</a>
<h5 class="text-center  my-5">Already Have Account?</h5>
<h3 class="text-center ">Login here</h3>
<a href="{{url('login')}}" class="btn btn-primary btn-outline-light  form-control " >  Login here </a>
<h5  class="text-primary my-4 ">
<a class="text-primary my-4 bg-light p-2 " style="text-decoration: none;border-radius:15px " href="{{url('home1')}}">Learn More</a>

</h5>
 
        
        </form>
   
        </div>








    </div>

<!-- login form -->

@endsection
        