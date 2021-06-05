

@extends('layout')
@section('main-content')

<!-- signup form -->
    <div class="row" style="background-image: url(https://images.unsplash.com/photo-1594085951586-67c71f896e9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80); background-repeat: no-repeat; background-size: cover;" >
      
      
        <div class="col-md-5 mx-auto my-5 px-0">
            <form action="{{url('user_verf_otp__form')}}" method="post"  style=" border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey; "  class="p-5 ">
            @csrf
            
            <p class="ml-5 " style="color: white;">Verification link has been sent to your email. Verify and Login<a class="text-center" style="color: white;" href=""> </a></p>
                 
                  
                
                  <p class="ml-5 " style="color: white;">Didn't get Verification Link ? <a class="text-center" style="color: white;" href="{{url('sign_up')}}"> <strong style="color: blue;">Click here to SignUp</strong>  </a></p>
                  
                  
                  
                  <p  class=" my-5">
                 <a href="{{url('login')}}" class=" btn btn-light btn-outline-primary form-control ">Login Here</a>
                
                  </p>
                  
            
            </form>
        </div>


    </div>
<!-- signup form -->

@endsection
