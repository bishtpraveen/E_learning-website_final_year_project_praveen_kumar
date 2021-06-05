
@extends('educator_dashboard_layout')
@section('main-content')


@if(Session::has('educator_id'))




<div class="row">


<div class="col-md-2">

</div>

<div class="col-md-8 px-0 mx-auto">



<form action="{{url('educator_add_courses_form')}}" enctype="multipart/form-data"   method="post"  style="  border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey; "  class="p-5 my-5 bg-secondary ">
            @csrf
            
                <h3 style="border-bottom: 1px solid white; color: white;" class="text-center p-2">Register Your Course</h3>


                <label style="color:white; " for="">Upload Course Thumbnail Image</label>
                  <div class="my-5" style="display:flex">
                   
                    <i style="color: white;"  class="fas fa-user-circle  mr-1 mt-2"></i>
                    <input style=" background: transparent; border-radius: 15px 45px; " name="thumnail_img" type="file" placeholder="Upload Profile Image" class="form-control bg-light"  >
            
                  </div>



                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="title"  type="text" placeholder=" Enter Title of Your Course" class="form-control bg-light" >
                  </div>


                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="fullcoursename"  type="text" placeholder=" Enter Full name of course" class="form-control bg-light" >
                  </div>



                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="rating"  type="text" placeholder=" Enter Rating of course" class="form-control bg-light" >
                  </div>




                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="price"  type="text" placeholder=" Enter course Price" class="form-control bg-light" >
                  </div>




                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="lessons"  type="text" placeholder=" Enter number of lessons" class="form-control bg-light" >
                  </div>



                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="seats"  type="text" placeholder=" Enter number of seats available" class="form-control bg-light" >
                  </div>
  
                  



                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="overview"  type="text" placeholder=" Enter Course Overview" class="form-control bg-light" >
                  </div>


                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="features"  type="text" placeholder=" Enter Course Features" class="form-control bg-light" >
                  </div>


                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="learn"  type="text" placeholder=" Enter What You Will Learn" class="form-control bg-light" >
                  </div>

                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="content"  type="text" placeholder=" Enter Course Content" class="form-control bg-light" >
                  </div>



                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="faq"  type="text" placeholder=" Enter  one FAQ as per your experience " class="form-control bg-light" >
                  </div>


                  

                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="faq1"  type="text" placeholder=" Enter faq1,What is the duration of the course?" class="form-control bg-light" >
                  </div>

                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="faq2"  type="text" placeholder=" Enter faq2,Is there a sample video to see how are the course videos?" class="form-control bg-light" >
                  </div>

                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="faq3"  type="text" placeholder=" Enter faq3,What is the Validity of this course?" class="form-control bg-light" >
                  </div>

                  <div class="my-5" style="display: flex; box-sizing: border-box;">
                    <i style="color: white;"  class="fas fa-user mr-1 mt-2"></i>
                    
                    <input style=" background: transparent; border-radius: 15px 45px; " name="email"  type="email" placeholder=" email " class="form-control bg-light" >
                  </div>





                  
                  <input type="checkbox"  name="checkbox" value="true" ><span class="ml-2"  style="color: white;" > I agreed to the terms and conditions.</span>
                    <p class=" my-5 ">   <input type="submit" value="Upload"  class="btn btn-primary btn-outline-light   form-control  "></p>
                
            
            
            </form>


</div>

<div class="col-md-2">

</div>


</div>










@else

@include('404')

 @endif


@endsection
