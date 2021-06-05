@extends('layout')
@section('main-content')


@if(Session::has('id'))

<!--Banner  and Search bar CHOOSE from RAnge Of courses row start-->
<div class="row " style="background-color: #1E90FF;">
  <div class="col-md-3 ">

  </div>
  <div class="col-md-6 ">

    <h3 class="text-center my-5" style="color: white;">Choose From A Range Of <strong>Online
        Courses</strong>
    </h3>

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

  </div>
  <div class="col-md-3">

  </div>




</div>
<!--Banner  and Search bar CHOOSE from RAnge Of courses row ENDS-->




<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">

    @if($errors->any())
    <div class="alert alert-danger">
      <ul class="list-group">
        @foreach($errors->all() as $e)
        <li class="list-group-item">
          {{$e}}
        </li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <div class="col-md-2">
  </div>

</div>









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
















<!--Complete Interview Prepration Start -->

<div class="row">


  <div class="col-md-2">

  </div>

  <div class="col-md-8">


    <div class="row my-5">
      <div class="col-md-8 p-5 bg-primary text-light" style="border-radius: 15px; box-shadow: 0px 0px 20px grey;">
       
        <h3>

       


       
     
 
        {{  $id->title  }}
         
         
          </h3>
    
        <p id="fullcoursename">   {{  $id->fullcoursename  }} </p>
        <script>
        

        
        
        </script>
        <p> <i class="fas fa-users mr-2"></i> Pre-final/Final year students & Working Professionals </p>
        <p class="text-center p-2">

          <a id="btn" class="btn btn-light btn-outline-info" href="javascript:void(0)">SignUp or Register Now</a>



        </p>

      </div>





      <div class="col-md-4 bg-light" style="border-radius: 15px;">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/etMLpwFtQqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>

    </div>

  </div>

  <div class="col-md-2">

  </div>

</div>





<!--Complete Interview Prepration Ends -->







<!--Leave a comment-->



<!--Leave a comment-->





<form action="{{url('rform')}}" method="post">
  @csrf

  <div class="row" id="rForm">
    <div class="col-md-2 my-5">
    </div>

    <div class="col-md-8 bg-light my-5">
      <h3>Register here</h3>

      <input type="text" placeholder="Enter Your Registered Name" value="{{Session::get('username')}}" name="rusername" class="form-control p-2 my-2" readonly>
      <input type="email" placeholder="Enter Your Registered Email" value="{{Session::get('email')}}" name="remail" class="form-control p-2 my-2" readonly>



      <input type="text" placeholder="{{  $id->title  }}" value="{{  $id->title  }}" name="rcourses" class="form-control p-2 my-2" readonly>
     
      <input type="text" placeholder="{{  $id->price  }}" value="{{  $id->price  }}" name="ramount" class="form-control p-2 my-2" readonly>
     
      




     

      <input type="submit" value="Add to Cart" class="btn btn-light btn-outline-info p-2 my-2">
    </div>
    <div class="col-md-2 my-5">

    </div>

  </div>





  <script>
    $('#rForm').hide();
    $('#btn').click(function() {
      $('#rForm').toggle(5);

    });
  </script>










</form>








<!--Leave a comment-->






<!--Leave a comment-->

























<!--course overview and signUp  start-->

<div class="row">


  <div class="col-md-2">

  </div>


  <div class="col-md-5">

    <!--Course overview start-->
    <div class="row p-5 bg-light my-5" style="border-radius: 15px; box-shadow: 0px 0px 20px grey;">

      <h3>Course Overview <i style="color: #1E90FF;" class="fas fa-chalkboard-teacher ml-auto"></i></h3>
      <p class="text-muted">Want to cover all the important concepts and topics required for the interviews? Looking to get
        placement ready before the
        interviews begin? If yes, then we have the perfect tool for you. With our complete interview
        preparation course, you’ll get access to
        precise content required for placement preparation, nothing less, nothing more. Your 4 years of
        learning compressed into an extensive
        course of 6 months!
      </p>

      <p class="text-muted">This course specifically designed to help the pre-final/final year students and working
        professionals land their dream
        job.
      </p>
      <p class="text-muted">
        Preparing for placements requires smart learning as some subjects hold more weightage than the
        others.


      </p>
      <p class="text-muted">
        Be it product-based companies (like Amazon, Microsoft, Adobe, etc), startups (like Ola, Swiggy,
        Zomato, etc) or service-based
        companies (like TCS, Infosys, Cognizant, etc), this program is here to make you land the job you
        want!
      </p>
    </div>

    <!--Course overview ends-->


    <!--Course Features start-->
    <div class="row p-5 bg-light my-5" style="border-radius: 15px; box-shadow: 0px 0px 20px grey;">

      <h3>Course Features <i style="color: #1E90FF;" class="fas fa-star"></i></h3>
      <p class="text-muted">
      <ul>

        <li>200+ algorithmic coding problems</li>
        <li>Lifetime access to the Course</li>
        <li>Track-based learning</li>
        <li>Weekly assessment tests</li>
        <li>Premium Lecture videos by Mr. Praveen Kumara Bisht (CEO & Founder, Vidya Infinity) and other
          industry experts</li>
        <li>Subject-wise Theoretical content by subject experts</li>
        <li>Objective Questions compiled by subject experts</li>


      </ul>

      </p>
    </div>

    <!--Course Features ends-->



    <!--what you will learn start-->
    <div class="row p-5 bg-light my-5" style="border-radius: 15px; box-shadow: 0px 0px 20px grey;">

      <h3> What You Will Learn
        <i style="color: #1E90FF;" class="fas fa-chalkboard-teacher ml-auto"></i>
      </h3>
      <p class="text-muted">
      <ul>

        <li>Begin with the basics! Learn about the programming languages, C++ & Java</li>
        <li>Learn the concepts of Object-Oriented Programming (OOPs)</li>
        <li>Best in industry DSA learning experience, from basic to advanced</li>
        <li>Learn the often asked concepts of Object-Oriented Analysis and Design</li>
        <li> Also, learn about other important CS subjects like OS, CN, DBMS, etc</li>
        <li>Subject-wise Theoretical content by subject experts</li>
        <li> Learn about the frequently asked interview questions</li>

      </ul>

      </p>
    </div>

    <!--What you will learn ends-->



    <!--Course Contnt start-->
    <div class="row p-5 bg-light my-5" style="border-radius: 15px; box-shadow: 0px 0px 20px grey;">

      <h3> Course Content

        <i style="color: #1E90FF;" class="fas fa-table ml-auto"></i>
      </h3>

      <ol>
        <li> <i id="plus1" style="color:#1E90FF ;" class="fas fa-plus mr-2"></i>Programming Languages</li>
        <p id="plus1C" class="text-muted">

          C++ : Introduction and Basic I/O, Variables, Different Errors, Operators, Loops, Arrays, String, Functions, Pointers,

          Java : Introduction and Basic I/O, Variables , Operators, Loops, Exception Handling, Arrays, String ,

        </p>
        <li> <i id="plus2" style="color:#1E90FF ;" class="fas fa-plus mr-2"></i>Object Oriented Programming</li>
        <p id="plus2C" class="text-muted">Classes and Objects
          Access Modifier
          Friend and Virtual functions in C++

          static, final, this and super keywords and Interfaces in Java
        </p>
        <li> <i id="plus3" style="color:#1E90FF ;" class="fas fa-plus mr-2"></i>Data Structures ( Basics )</li>
        <p id="plus3C" class="text-muted">Inheritance and Polymorphism : Overloading and Overriding

          Abstraction and Encapsulation</p>


      </ol>


    </div>


    <!--jquery start-->
    <script>
      $('#plus1C').show();
      $('#plus1').click(function() {
        $('#plus1').css('color', 'grey')
        $('#plus2').css('color', '#1E90FF ')
        $('#plus3').css('color', '#1E90FF ')
        $('#plus1C').toggle();
        $('#plus2C').hide();
        $('#plus3C').hide();
      });

      $('#plus2C').hide();
      $('#plus2').click(function() {
        $('#plus2C').toggle();
        $('#plus2').css('color', 'grey')
        $('#plus1').css('color', '#1E90FF')
        $('#plus3').css('color', '#1E90FF')

        $('#plus1C').hide();
        $('#plus3C').hide();
      });

      $('#plus3C').hide();
      $('#plus3').click(function() {
        $('#plus3C').toggle();
        $('#plus3').css('color', 'grey')
        $('#plus1').css('color', '#1E90FF')
        $('#plus2').css('color', '#1E90FF')


        $('#plus1C').hide();
        $('#plus2C').hide();

      });
    </script>




    <!--jquery start-->

    <!--Course content ends-->


    <!--FAQs start-->
    <div class="row p-5 bg-light my-5" style="border-radius: 15px; box-shadow: 0px 0px 20px grey;">

      <h3> FAQs

        <i style="color: #1E90FF;" class="fas fa-question ml-auto"></i>
      </h3>
      <p>
      <ol>
        <li>What is the duration of the course?</li>
        <p class="text-muted">This course comprises more than 150+ hours of video lectures. A dedicated geek can complete the course in 3-4 months of duration.</p>
        <li>Is there a sample video to see how are the course videos?</li>
        <p class="text-muted">Yes. Please see this video</p>
        <li>What is the Validity of this course?</li>
        <p class="text-muted">The Course Content, Videos & practice content comes with lifetime validity.</p>

      </ol>
      </p>
    </div>

    <!--FAQs ends-->


  </div>
  <div class="col-md-3   p-5">

    <!--anatomy start-->
    <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;">
      <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://media.geeksforgeeks.org/img-practice/banner/dsa-self-paced-thumbnail.png" alt="">

      <div class="p-3">
        <p class="text-muted">Complete Interview Prepration</p>
        <h3> Java|C++|DSA</h3>

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
            <small style="border-radius: 50%;" class="border border-outline-danger p-1">$100</small>
          </div>

        </div>
        <div style="position: relative;">

          <div>
            <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 45 lessons </small>
          </div>
          <div style="position: absolute; top: 1%; right: 10%;">
            <small class="text-muted"> <i class="fas fa-users"></i> online classes</small>

          </div>
        </div>
        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">SignUp or Register</button></p>

      </div>

    </div>
    <!--anatomy ends-->

    <!--similar courses 1 start-->
    <div class="my-5" id="courserat2" style="border: 1px solid grey;border-radius: 15px; ">
      <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://debrabell.com/wp-content/uploads/2017/03/Physiology.jpg" alt="">

      <div class="p-3">
        <p class="text-muted">Biology</p>
        <h3>Anatomy Course</h3>

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
            <small style="border-radius: 50%;" class="border border-outline-danger p-1">$90</small>
          </div>

        </div>
        <div style="position: relative;">

          <div>
            <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 10 lessons </small>
          </div>
          <div style="position: absolute; top: 1%; right: 10%;">
            <small class="text-muted"> <i class="fas fa-users"></i> 14 seats</small>

          </div>
        </div>
        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Sign Up Now</button></p>

      </div>

    </div>
    <!--similar courses 1 ends-->

    <!--similar courses 2 start-->
    <div class="my-5" id="courserat2" style="border: 1px solid grey;border-radius: 15px; ">
      <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://debrabell.com/wp-content/uploads/2017/03/Physiology.jpg" alt="">

      <div class="p-3">
        <p class="text-muted">Biology</p>
        <h3>Anatomy Course</h3>

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
            <small style="border-radius: 50%;" class="border border-outline-danger p-1">$90</small>
          </div>

        </div>
        <div style="position: relative;">

          <div>
            <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 10 lessons </small>
          </div>
          <div style="position: absolute; top: 1%; right: 10%;">
            <small class="text-muted"> <i class="fas fa-users"></i> 14 seats</small>

          </div>
        </div>
        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Sign Up Now</button></p>

      </div>

    </div>
    <!--similar courses 2 ends-->
    <!--similar courses 3 start-->
    <div class="my-5" id="courserat2" style="border: 1px solid grey;border-radius: 15px; ">
      <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://debrabell.com/wp-content/uploads/2017/03/Physiology.jpg" alt="">

      <div class="p-3">
        <p class="text-muted">Biology</p>
        <h3>Anatomy Course</h3>

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
            <small style="border-radius: 50%;" class="border border-outline-danger p-1">$90</small>
          </div>

        </div>
        <div style="position: relative;">

          <div>
            <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 10 lessons </small>
          </div>
          <div style="position: absolute; top: 1%; right: 10%;">
            <small class="text-muted"> <i class="fas fa-users"></i> 14 seats</small>

          </div>
        </div>
        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Sign Up Now</button></p>

      </div>

    </div>
    <!--similar courses 3 ends-->
    <!--similar courses 4 start-->
    <div class="my-5" id="courserat2" style="border: 1px solid grey;border-radius: 15px; ">
      <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://debrabell.com/wp-content/uploads/2017/03/Physiology.jpg" alt="">

      <div class="p-3">
        <p class="text-muted">Biology</p>
        <h3>Anatomy Course</h3>

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
            <small style="border-radius: 50%;" class="border border-outline-danger p-1">$90</small>
          </div>

        </div>
        <div style="position: relative;">

          <div>
            <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 10 lessons </small>
          </div>
          <div style="position: absolute; top: 1%; right: 10%;">
            <small class="text-muted"> <i class="fas fa-users"></i> 14 seats</small>

          </div>
        </div>
        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Sign Up Now</button></p>

      </div>

    </div>
    <!--similar courses 4 ends-->







  </div>


  <div class="col-md-2">

  </div>

</div>







<!--course overview and signUp  end-->











<!--Registration start-->

<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8 p-5 my-5 bg-light" style=" border-radius: 15px; box-shadow: 0px 0px 20px grey;">

    <h3>Course Registration</h3>

    <div>

      <p class="p-2" style="border-bottom: 1px  solid grey ;">Active Batches</p>

      <table class="table table-bordered table-hover">
        <thead>
          <tr class="bg-primary">
            <th>Batch</th>
            <th>Date</th>
            <th>Type</th>
            <th>Register</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-muted">
            <td>CIP BATCH 1</td>
            <td>Active</td>
            <td>Online Classes</td>
            <td><button id="btn2" class="btn btn-light btn-outline-info">Sign Up now</button></td>
          </tr>
        </tbody>
      </table>

    </div>


  </div>
  <div class="col-md-2">

  </div>
</div>



<!--Registration ends-->




<!--Leave a comment-->





<form action="{{url('rform')}}" method="post">
  @csrf

  <div class="row" id="rForm2">
    <div class="col-md-2 my-5">
    </div>

    <div class="col-md-8 bg-light my-5">
      <h3>Register here</h3>

      <input type="text" placeholder="Enter Your Registered Name" value="{{Session::get('username')}}" name="rusername" class="form-control p-2 my-2" readonly>
      <input type="email" placeholder="Enter Your Registered Email" value="{{Session::get('email')}}" name="remail" class="form-control p-2 my-2" readonly>


      <input type="text" placeholder="{{  $id->title  }}" value="{{  $id->title  }}" name="rcourses" class="form-control p-2 my-2" readonly>
     
      <input type="text" placeholder="{{  $id->price  }}" value="{{  $id->price  }}" name="ramount" class="form-control p-2 my-2" readonly>
     

      <input type="submit" value="Add to Cart" class="btn btn-light btn-outline-info p-2 my-2">
    </div>
    <div class="col-md-2 my-5">

    </div>

  </div>





  <script>
    $('#rForm2').hide();
    $('#btn2').click(function() {
      $('#rForm2').toggle(5);

    });
  </script>










</form>








<!--Leave a comment-->







<!--students testimonial Heading and Row START-->
<div class="row p-5 bg-light">
  <div class="col-md-3">

  </div>
  <div class="col-md-6 text-center">
    <h3>Students <strong>Testimonials</strong> </h3>
    <p>This is all about testimonials, all about amazing-amazing life after and during this course you will enjoy.</p>
  </div>
  <div class="col-md-3">

  </div>

</div>

<!--students testimonial Heading and Row END-->
<!--carousel start-->
<!--Carousel row start-->

<div class="row bg-light p-5 ">

  <div class="col-md-2">

  </div>

  <div class="col-md-8 " style="border-radius: 100px;">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <!--NEXT 6 iMGs in CAROUSEL start-->
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <div class="item">
        <!--EXPERIMENT START BOX-->
        <div class="bg-light p-3" style="height: 50vh; width: 100%;border-radius: 15px; position: relative;box-shadow: 0px 0px 5px gray;">
          <p class="p-2">Praveen Kumar <span><i style="float: right;color: skyblue;" class="far fa-comment-dots mr-3"></i></span></p>
          <p><small class="text-muted">Graduate Student</small></p>
          <p class="text-muted p-1" style="border-top: 1px solid white;">" This course is really-2 great course. And have helped me professionally to grow and become a industry oriented
            person.
            All teaching faculty is really really great and amazing one of the best in </p>
        </div>

        <img style="position: absolute; top: 0; border-radius: 50%; width: 5%;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">

        <!--EXPERIMENT END BOX-->
      </div>
      <!--NEXT 6 iMGs in CAROUSEL start-->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2000,
        stagePadding: 50,
        dots: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 2
          }
        }
      })
    </script>
  </div>

  <div class="col-md-2">

  </div>

</div>


<!--Carousel row End-->



<!--carousel end-->


@else

@include('404')

@endif




@endsection