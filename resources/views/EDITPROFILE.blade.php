@extends('layout')
@section('main-content')


        <!--Banner  and Search bar CHOOSE from RAnge Of courses row start-->
        <div class="row " style="background-color: #1E90FF;">
            <div class="col-md-3 ">

            </div>
            <div class="col-md-6 ">

                <h3 class="text-center my-5" style="color: white;">Choose From A Range Of <strong>Online
                        Courses</strong>
                </h3>


<!-- for pagination start  -->

<form action="{{ route ('web.search') }}" method="GET">







<div class="input-group mb-5">
  <input type="text" name="query" placeholder="what are the courses you would like to search?" style="border-radius: 15px 0px 0px 15px;" class="form-control  ">
  <div class="input-group-append">
    <span style="border-radius: 0px 15px 15px 0px; color: white;" class="input-group-text bg-info ">

      <button id="b1" class="btn btn-sm p-0 text-light" type="submit">SEARCH</button>
    </span>

  </div>
</div>





</form>

@if(isset( $searchcourses))

  <div class="row">


      @if(count($searchcourses) > 0)
      @foreach($searchcourses as $d)

      <!-- div block -->
      <div class="col-md-3 p-3">
          <a style="text-decoration: none;" href="{{url('buy_on_click')}}">
              <div id="courserat5" style="border: 1px solid grey;border-radius: 15px;">
                  <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px; " src="{{ asset('thumnail_img/' . $d->thumnail_img) }}" alt="image missing because(offline) img src is private pc">

                  <div class="p-3">
                      <p class="text-muted">{{$d->title}}</p>
                      <h3>{{$d->fullcoursename}}</h3>

                      <div style="position: relative;">
                          <div>
                              <p style="color: yellow;"><i class="far fa-star"> </i>
                                  <i class="far fa-star"> </i>
                                  <i class="far fa-star"> </i>
                                  <i class="far fa-star"> </i>
                                  <i class="far fa-star"> </i>
                              </p>
                          </div>
                          <div style="position: absolute; top: 1%; right: 10%;">
                              <small style="border-radius: 50%;" class="border border-outline-danger p-1">{{$d->price}} ₹</small>
                          </div>

                      </div>
                      <div style="position: relative;">

                          <div class="text-muted">
                              <small> <i class="fas fa-book-open  ml-1"></i> {{$d->lessons}}Lessons</small>
                          </div>
                          <div style="position: absolute; top: 1%; right: 10%;">
                              <small class="text-muted"> <i class="fas fa-users"></i> {{$d->seats}} seats</small>

                          </div>
                      </div>
                  </div>

              </div>
          </a>


      </div>
      <!-- div block -->
      @endforeach
      @else
      <div>

          OOps ! No Result found !

      </div>
      @endif
      </div>

      <div class="pagination-block">


          {{ $searchcourses->links('layouts.paginationlinks') }}
      </div>
      @endif



<!-- pagination ends -->


            </div>
            <div class="col-md-3">

            </div>




        </div>
        <!--Banner  and Search bar CHOOSE from RAnge Of courses row ENDS-->
<!--edit profiles start-->
<div class="row" style="margin-top: 1%;">

    <div  class="col-md-2 bg-dark " style="border-radius: 15px;">
    <img class="ml-5" style="height: auto; width: 35%; border-radius: 50%; border: 1px solid white; " src="{{asset('pro_img/'.Session::get('pro_img'))}}" alt="">
    </div>
    <div class="col-md-8" style="display: flex; justify-content: space-around;">
        <a id="personalInfo1" class=" text-light p-2" style="border-radius: 50%; background-color: blue;" href="javascript:void(0)">1</a>
          <a href="javascript:void(0)" id="educationalInfo2" class=" text-light p-2" style="border-radius: 50%; background-color: blue;">2</a>
   <a href="javascript:void(0)"id="professionalInfo3" class=" text-light p-2" style="border-radius: 50%; background-color: blue;">3</a>
   
    </div>
    <div class="col-md-2">

    </div>

</div>

<div class="row">

    <div class="col-md-2 bg-dark text-light text-center" style="border-radius: 15px;">
    {{Session::get('username')}}
    </div>
    <div class="col-md-8" style="display: flex; justify-content: space-around;">
      <a href="javascript:void(0)" id="personalInfo2" class=" text-dark p-1">Personal Info</a>
      <a href="javascript:void(0)" id="educationalInfo3" class=" text-dark p-1">Educational Info</a>
      <a href="javascript:void(0)" id="professionalInfo4"  class=" text-dark p-1"> Professional Info</a>

    </div>
    <div class="col-md-2">

    </div>

</div>


<!--edit profiles ends-->
<!--display name forms start-->
<div id="personalInfoBlock" class="row p-1 ">

<div class="col-md-2 bg-dark " style="border-radius: 15px;">

<h5 style="border: 1px solid white;  border-radius:15px ; background-color:white" class="my-1 p-5"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit"></i>Edit Profile</a></h5>

<h6 class="my-1 p-3" ><a href="{{url('home1')}}"><i class="fas fa-home mr-1"></i> Home</a></h6>

<h6 class="my-1 p-3"><a href="{{url('mycourses')}}"><i class="fas fa-chalkboard-teacher mr-1"></i> My Courses</a></h6>

<h6 class="my-1 p-3"><a href="{{url('myprofile')}}"><i class="far fa-user mr-1"></i> My Profile</a></h6>

<h6 class="my-1 p-3"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit mr-1"></i>Edit Profile</a></h6>

<h6 class="my-1 p-3"><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a></h6>

</div>

<div class="col-md-8">
 <form method="get"  action="" class="bg-light text-center p-5 ">




    <h3 class="text-center">Edit Your Personal Details Here</h3>
        <p>
        <label>Name
        <input type="text" name="student_name"  class="form-control" required>
        </label> 
        </p>
        
        <p>
        <label>Contact Number
        <input type="tel" name="phone_number" class="form-control">
        </label>
        </p>
        
        <p>
        <label>Email 
        <input type="email" name="email_address"  class="form-control">
        </label>
        </p>
        
        <p>
        <label>Date Of Birth
        <input type="datetime-local" name="dob"  class="form-control" required>
        </label>
        </p>
        
        <p>
        
        <select id="selectcountry" name="select_country">
        <option value="" selected="selected">Select Country</option>
        <option value="india" >India</option>
        <option value="usa" >USA</option>
        <option value="european countries" > European COuntry</option>
        <option value="others" >Others</option>
        </select>
        
        </p>
        

        
        <p ><button class="btn btn-light btn-outline-info"> Save Changes </button></p>
        
        </form>



</div>

<div class="col-md-2">


</div>
    
</div>

<!--display name forms start-->


<!--2nd form start-->
<div id="educationalInfoBlock" class="row">

    <div class="col-md-2 bg-dark" >
    <h5 style="border: 1px solid white;  border-radius:15px ; background-color:white" class="my-1 p-5"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit"></i>Edit Profile</a></h5>
<h6 class="my-1 p-5" ><a href="{{url('home1')}}"><i class="fas fa-home"></i> Home</a></h6>

<h6 class="my-1 p-5"><a href="{{url('mycourses')}}"><i class="fas fa-chalkboard-teacher"></i> My Courses</a></h6>

<h6 class="my-1 p-5"><a href="{{url('myprofile')}}"><i class="far fa-user"></i> My Profile</a></h6>

<h6 class="my-1 p-5"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit"></i>Edit Profile</a></h6>

<h6 class="my-1 p-5"><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></h6>

    
    </div>
    
    <div class="col-md-8">
     <form method="get"  action="" class="bg-light text-center p-5">
    

        <h3 class="text-center">Edit Your Educational Details Here</h3>
            <p>
            <label>Name Of College
            <input type="text" name="college_name"  class="form-control" required>
            </label> 
            </p>
            
            <p>
            <label>Contact Number
            <input type="tel" name="phone_number" class="form-control">
            </label>
            </p>
            
            <p>
            <label>Email 
            <input type="email" name="email_address"  class="form-control">
            </label>
            </p>
            
    
            
            <p>
                
                <select id="passing" name="passing">
                <option value="" selected="selected">Year of passing </option>
                <option value="2020" >2020</option>
                <option value="2021" >2021</option>
                <option value="2019" >2019</option>
                <option value="others" >Others</option>
                </select>
               
                </p>
                
                
               
                <p>
                     
                    <select id="Qualifications" name="Qualifications">
                    <option value="" selected="selected">Qualifications</option>
                    <option value="Engineering" >Engineering</option>
                    <option value="Science" >Science</option>
                    <option value="Humanities" >Humanities</option>
                    <option value="others" >Other</option>
                    </select>
                    
                    </p>
            
            
            
    
            
            <p>
            
            <select id="Marks" name="Marks">
            <option value="" selected="selected">Select Graduation Marks</option>
            <option value=" 75%" >Above 75%</option>
            <option value="60-75%" >Between 60-75%</option>
            <option value="33-60%" > Between 33-60%</option>
            <option value="others" >NA</option>
            </select>
            
            </p>
           
            
    
            
            <p ><button class="btn btn-light btn-outline-info"> Save Changes </button></p>
            
            </form>
    
    
    
    </div>
    
    <div class="col-md-2">
    
    
    </div>
        
    </div>
<!--2nd form end-->

<!--3rd form start-->
<div id="professionalInfoBlock" class="row text-center">

    <div class="col-md-2 bg-dark">
    <h5 style="border: 1px solid white;  border-radius:15px ; background-color:white" class="my-1 p-5"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit"></i>Edit Profile</a></h5> 
<h6 class="my-1 p-5" ><a href="{{url('home1')}}"><i class="fas fa-home"></i> Home</a></h6>

<h6 class="my-1 p-5"><a href="{{url('mycourses')}}"><i class="fas fa-chalkboard-teacher"></i> My Courses</a></h6>

<h6 class="my-1 p-5"><a href="{{url('myprofile')}}"><i class="far fa-user"></i> My Profile</a></h6>

<h6 class="my-1 p-5"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit"></i>Edit Profile</a></h6>

<h6 class="my-1 p-5"><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></h6>

    
    </div>
    
    <div class="col-md-8">
     <form method="get"  action="" class="bg-light p-5 ">
        <h3 class="text-center">Edit Your Professional Details Here</h3>
            <p>
            <label> Current Organization 
            <input type="text" name="organization_name"  class="form-control" required>
            </label> 
            </p>
            
            <p>
            <label> Designation
            <input type="text" name="Designation" class="form-control">
            </label>
            </p>
            
            <p>
            <label>Experience  
            <input type="text" name="Experience"  class="form-control">
            </label>
            </p>
            
    
           
            <p>
                
                <select id="interest" name="interest">
                <option value="" selected="selected">Select courses you are interested.</option>
                <option value="economics" >Economics</option>
                <option value="programing" >Programing</option>
                <option value="engineering" > Engineering</option>
                <option value="others" >Others</option>
                </select>
               
                </p>
                
                
                
                <p>
                     
                    <select id="aboutme" name="about_me">
                    <option value="" selected="selected">About me</option>
                    <option value="student" >Student</option>
                    <option value="wp" >Working Professional</option>
                    <option value="tracher" > Teacher</option>
                    <option value="others" >Other</option>
                    </select>
                    
                    </p>
            
            
    
           
            <p>
            
            <select id="selectcountry" name="select_country">
            <option value="" selected="selected">Select Country</option>
            <option value="india" >India</option>
            <option value="usa" >USA</option>
            <option value="european countries" > European COuntry</option>
            <option value="others" >Others</option>
            </select>
            
            </p>
            
            <p>
            <label>Skills
            <input type="text" name="skill" required list="Skills"  class="form-control">
            </label>
            
            <datalist id="skils">
            <option value="Software & IT">
            <option value="Science & Engineering">
            <option value="Humanities">
            </datalist>
            </p>
            
    
            <label> Message to Vidya Infinity(Praveen Kumar Bisht)</label>
            <p>
           
            <textarea name="comments" maxlength="500"></textarea>
            
            </p>
            
            <p ><button class="btn btn-light btn-outline-info"> Submit </button></p>
            
            </form>
    
    
    
    </div>
    
    <div class="col-md-2">
    
    
    </div>
        
    </div>
<!--3rd form ends-->

<!--jquery start-->
<script>

$('#personalInfoBlock').show()
$('#educationalInfoBlock').hide()
$('#professionalInfoBlock').hide()

$('#personalInfo1').hover(function(){

    
$('#personalInfoBlock').slideDown(2000)
$('#personalInfo2').css('background','lightgrey')
$('#educationalInfo3').css('background','lightgreen')  
$('#professionalInfo4').css('background','lightgreen')
$('#educationalInfoBlock').hide()
$('#professionalInfoBlock').hide()



})



$('#educationalInfo2').hover(function(){

    $('#educationalInfoBlock').slideDown(2000)
    $('#personalInfo2').css('background','lightgreen')
$('#educationalInfo3').css('background','lightgrey')  
$('#professionalInfo4').css('background','lightgreen') 
$('#personalInfoBlock').hide()
$('#professionalInfoBlock').hide()



})



$('#professionalInfo3').hover(function(){
   $('#professionalInfoBlock').slideDown(2000)
   $('#personalInfo2').css('background','lightgreen')
$('#educationalInfo3').css('background','lightgreen')  
$('#professionalInfo4').css('background','lightgrey')
$('#educationalInfoBlock').hide()   
$('#personalInfoBlock').hide()



})


</script>
   


<!--jquery ends-->



       @endsection