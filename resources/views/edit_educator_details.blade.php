

@extends('layout')
@section('main-content')
<!-- signup form -->
    <div class="row" style="background-image: url(https://images.unsplash.com/photo-1594085951586-67c71f896e9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80); background-repeat: no-repeat; background-size: cover; "  >
       
   
       
       
        <div class="col-md-5 mx-auto px-0">
 @if(Session::has('validatorError'))
      <div class="alert alert-danger">
      <ul class="list-group">
      <li class="list-group-item">{{Session::get('validatorError')}}</li>
      </ul>
      </div>
      @endif
            <form action="{{url('update_educator_signup_form')}}" enctype="multipart/form-data"   method="post"  style="  border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey; "  class="p-5 ">
            @csrf
            
                <h3 style="border-bottom: 1px solid white; color: white;" class="text-center p-2">Edit SignUp Details Of Educator</h3>
               
               
               
               
                <div class="my-5" style="display: flex; box-sizing: border-box;">
                  
                    
                    <input style=" background: transparent; border-radius: 15px 45px; "  value="{{$editData->id}}" name="id"  type="hidden" placeholder=" Enter Your Name" class="form-control bg-light" >
                  </div>
               
               
               
               
               
               
               
               
                <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; "  value="{{$editData->username}}" name="username"  type="text" placeholder=" Enter Your Name" class="form-control bg-light" >
                  </div>
                <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;" class="fas fa-envelope mr-1 mt-2"></i>
                    <input style=" background: transparent; border-radius: 15px 45px; " value="{{$editData->email}}" name="email" type="email" placeholder=" Enter Your Email" class="form-control bg-light">
                  </div>
                  <div class="my-5" style="display:flex">
                    <i style="color: white;" class="fas fa-key mr-1 mt-2 "></i>
                    <input style=" background: transparent; border-radius: 15px 45px; " value="{{$editData->password}}"  name="password" type="password" placeholder="Choose A Password" class="form-control bg-light">
            
                  </div>

                  <label style="color:white; " for="">Upload Profile Image</label>
                  <div class="my-5" style="display:flex">
                   
                    <i style="color: white;"  class="fas fa-user-circle  mr-1 mt-2"></i>
                    <input style=" background: transparent; border-radius: 15px 45px; " value="{{$editData->pro_img}}" name="pro_img" type="file" placeholder="Upload Profile Image" class="form-control bg-light"  >
            
                  </div>
                  
                  <input type="checkbox"  name="checkbox" value="true" ><span class="ml-2"  style="color: white;" > I agreed to the terms and
                    conditions.</span>
                    <p class=" my-5 ">   <input type="submit" value="Update"  class="btn btn-primary btn-outline-light   form-control  "></p>
                  <h3 style="color: white; text-align: center;  " class="my-5">OR Sign Up with</h3>
             <div class="my-3" style="display: flex; justify-content: space-around; font-size: large; border: none; color: white;">
              <a href=""> <i  style="font-size: larger;color:	#4267B2;  " class="fab fa-facebook"></i></a> 
             <a href=""> <i  style="font-size: larger;  color:#8a3ab9;" class="fab fa-instagram"></i></a>
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
<!-- signup form -->

@endsection
