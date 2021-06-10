@extends('layout')
@section('main-content')




<!--Banner  and Search bar CHOOSE from RAnge Of courses row start-->
<div class="row " style="background-color: #1E90FF;">
  <div class="col-md-3 ">

  </div>
  <div class="col-md-6 ">

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


    <h3 class="text-center my-5" style="color: white;">Choose From A Range Of <strong>Online Courses</strong>
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

    @if(isset( $searchcourses))

    <table id="t1" class="table table-hover table-bordered table-primary ">
      <thead class="thead-dark">

        <tr>
          <th>id</th>
          <th>course_id</th>
          <th>course_name</th>
          <th>course_fee</th>
          <th>course_teacher</th>
          <th>course_review</th>
          <th>course_details</th>
          <th>SignUp Now</th>

        </tr>

      </thead>

      <tbody>
        @if(count($searchcourses) > 0)
        @foreach($searchcourses as $c)
        <tr>
          <td>{{ $c->id}}</td>
          <td>{{ $c->course_id}}</td>
          <td>{{ $c->course_name}}</td>
          <td>{{ $c->course_fee}}</td>
          <td>{{ $c->course_teacher}}</td>
          <td>{{ $c->course_review}}</td>
          <td>{{ $c->course_details}}</td>
          <td> <button class="btn btn-primary"> {{ $c->sign_up}} </button> </td>

        </tr>
        @endforeach

        @else
        <tr>
          <td>Result not found</td>
        </tr>

        @endif

      </tbody>
    </table>


    <div style="float: right;" class="pagination-block  ">


      {{ $searchcourses->links('layouts.paginationlinks') }}
    </div>
    @endif

  </div>
  <div class="col-md-3">

  </div>




</div>
<!--Banner and Search bar CHOOSE from RAnge Of courses row end-->
<!--Your Future starts here and you can learn anything START-->

<div class="row p-5 " style="background-image:
        url(https://img.etimg.com/thumb/msid-77937584,width-1200,height-900,imgsize-148807,resizemode-8,quality-100/industry/services/education/view-heres-why-india-needs-to-be-future-ready-in-online-education.jpg);
        background-size: cover; background-attachment:local; position: relative; background: #1E90FF ">

  <div class="col-md-3 p-5 my-5">

  </div>
  <div class="col-md-6 text-center p-5 my-5 " style="color: white;">

    <p>YOUR FUTURE START HERE</p>
    <h3>You Can Learn Anything</h3>
    <p>We have a first rate academic program, a fully qualified and very well educated teaching staff,
      bright and comfortable classrooms, a very effective and enthusiastic student support staff.
    </p>
    <div class="text-center p-5">
      <button class="btn btn-light btn-outline-info" style="border-radius: 15px;">START NOW</button>
      <button class="btn btn-light btn-outline-info" style="border-radius: 15px;">LEARN MORE</button>
    </div>

    <!--Creative Thinking Problem Solving Role studt play START-->
    <div class="row " style="position: absolute; top: 80%;">

      <div class="col-md-12 bg-light p-2" style="border-radius: 15px; box-shadow: 0px 0px 5px gray;">
        <div class="row">
          <div class="col-md-4">
            <p><i class="fas fa-chalkboard-teacher" style="color: blue;"></i></p>
            <h3 style="color: black;">Creative Thinking</h3>
            <p class="text-muted">Creative thinking can be stimulated both by an unstructured process such as brainstorming.</p>
          </div>
          <div class="col-md-4" style="border-left: 1px solid gray; border-right: 1px solid gray;">
            <p><i class="fas fa-feather-alt" style="color: blue;"></i></p>
            <h3 style="color: black;">Problem Solving</h3>
            <p class="text-muted">Learn new approaches to problem solving, gain insights and develope breakthrough idea.</p>
          </div>
          <div class="col-md-4">
            <p><i class="fas fa-gamepad" style="color: blue;"></i></p>
            <h3 style="color: black;">Role Play Study</h3>
            <p class="text-muted">The idea is to enable students to experience what it may be like to see different problems.</p>
          </div>

        </div>
      </div>

    </div>
    <!--Creative Thinking Problem Solving Role studt play END-->

  </div>

  <div class="col-md-3 p-5 my-5">

  </div>
</div>
<!--Your Future starts here and you can learn anything END-->

<!--Most popular courses div r0w start-->

<div class="row my-5">
  <div class="col-md-2 my-5 ">

  </div>
  <div class="col-md-8 my-5">
    <h1 style="text-align: center;">
      Most Popular courses
    </h1>
    <p style="text-align: center;">
      We belive in quality education and skil development to meet the industry level demand in the
      market.Worlds best selling courses.
    </p>
  </div>
  <div class="col-md-2 my-5 ">

  </div>


</div>

<!--Most popular courses div r0w end-->




<!-- ROW1 courses,price,star rating ROW start from here-->
<!--Carousel row start-->

<div class="row  p-5 ">

  <div class="col-md-2">

  </div>

  <div class="col-md-8 " style="border-radius: 100px;">
    <div class="owl-carousel owl-theme">
      @foreach($data as $d)

      <div class="col-md-8 p-3">






        <a id="a1" style="text-decoration: none;" href="{{url('buy_on_click',$d['id'])}}">

          <script>
            $('#a1').click(function() {

              $('#fullcoursename').css('color', 'red');
            });
          </script>





          <div id="courserat5" style="border: 1px solid grey;border-radius: 15px;">
            <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px; " src="{{ asset('thumnail_img/' . $d->thumnail_img) }}" alt="image missing because(offline) img src is private pc">

            <div class="p-3">
              <p class="text-muted">{{$d->title}}</p>
              <small> {{$d->fullcoursename}} </small>


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

      @endforeach

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        margin: 20,
        nav: false,
        dots: false,

        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 1
          }
        }
      })
    </script>
  </div>

  <div class="col-md-2">

  </div>

</div>


<!--Carousel row End-->
<!-- ROW1 courses,price,star rating ROW1 END-->



<!--See More button START-->
<div class="row ">

  <div class="col-md-12 my-5">
    <div class="text-center">
      <button class="'btn btn-light btn-outline-primary  p-2 " style="border-radius: 15px;"> <a href="{{url('courses')}}">See More</a> </button>
    </div>

  </div>

</div>


<!--See More button END-->

<!--choose your plan start-->
<div class="row p-5">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <h3 class="text-center">Choose Your Plan</h3>
    <p class="text-center">Set a plan, start learning and unlock your potencial. Vidya Infinity have
      different plans for students and working professionals</p>
  </div>
  <div class="col-md-3">

  </div>

</div>

<!--choose your plan end-->
<!--select plan 3 section start-->
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">


    <div class="row p-5" style="display: flex; justify-content: space-around;">




      <!--beginner package block start-->

      <div class="col-md-3" style=" border-radius: 15px; box-shadow: 0px 0px 5px grey;">
        <div class=" row bg-light p-3" style="border-radius: 15px 15px 0px 0px;">
          <p>BEGGINER PACKAGE
          </p>
          <p class="text-center" style="color: skyblue;"> <sup>$</sup> 129.90 /mounth</p>
        </div>

        <div class="text-center text-muted">
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>SEO Strategy Course</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>HTML5 & CSS Video Course
          </p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>English Learning Course</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>Business & Internal Course
          </p>
          <p><i style="color: skyblue;" class="far fa-times-circle mr-2"></i>Interior Design</p>
          <p><i style="color: skyblue;" class="far fa-times-circle mr-2"></i>Geometry Course</p>
        </div>

        <div class="text-center p-3">
          <button class="btn btn-light btn-outline-info" style="border-radius: 15px;">Select
            Plan</button>
        </div>
      </div>

      <!--beginner package block End-->




      <!--Buisness package block start-->

      <div class="col-md-3" style=" border-radius: 15px; box-shadow: 0px 0px 5px grey;">
        <div class=" row  p-3" style="border-radius: 15px 15px 0px 0px; background: linear-gradient( white 0.0001%,grey 99%)">
          <p>BUSINESS PACKAGE
          </p>
          <p class="text-center" style="color: skyblue;"> <sup>$</sup> 229.90 /mounth</p>
        </div>

        <div class="text-center text-muted">
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>SEO Strategy Course</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>HTML5 & CSS Video Course
          </p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>English Learning Course</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>Business & Internal Course
          </p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i></i>Interior Design</p>
          <p><i style="color: skyblue;" class="far fa-times-circle mr-2"></i>Geometry Course</p>
        </div>

        <div class="text-center p-3">
          <button class="btn btn-light btn-outline-info" style="border-radius: 15px;">Select
            Plan</button>
        </div>
      </div>
      <!--Buisness package block end-->


      <!--Ultimate package block start-->
      <div class="col-md-3" style=" border-radius: 15px; box-shadow: 0px 0px 5px grey;">
        <div class=" row bg-light p-3" style="border-radius: 15px 15px 0px 0px;">
          <p>ULTIMATE PACKAGE
          </p>
          <p class="text-center" style="color: skyblue;"> <sup>$</sup> 329.90 /mounth</p>
        </div>

        <div class="text-center text-muted">
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>SEO Strategy Course</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>HTML5 & CSS Video Course
          </p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>English Learning Course</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>Business & Internal Course
          </p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>Interior Design</p>
          <p><i style="color: skyblue;" class="fas fa-angle-down mr-2"></i>Geometry Course</p>
        </div>

        <div class="text-center p-3">
          <button class="btn btn-light btn-outline-info" style="border-radius: 15px;">Select
            Plan</button>
        </div>
      </div>

      <!--Ultimate package block end-->


    </div>





  </div>
  <div class="col-md-2">

  </div>

</div>
<!--select plan 3 section end-->
<!--how it works and video block start-->

<div class="row px-0">
  <div class="col-md-6 px-0 bg-info">
    <video controls width="100%" poster="https://www.homelane.com/blog/wp-content/uploads/2020/05/shutterstock_766185586.jpg" src="../../Pictures/Video Projects/videoplayback.mp4"></video>
  </div>
  <div class="col-md-4 bg-light">
    <h3 class="my-5">How it Works?</h3>
    <strong>Register in 30 seconds</strong>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
    <strong>Choose Your Perfect Course</strong>
    <p class="text-muted">Proin viverra id est et mattis. Donec tempor rutrum semper. Nulla tristique condimentum aliquam.</p>
    <strong>Learn When You are Comfortable</strong>
    <p class="text-muted">Suspendisse rutrum mattis massa sed faucibus. Aenean at erat erat. Morbi accumsan turpis non nisl semper.</p>

  </div>
  <div class="col-md-2 bg-light">

  </div>

</div>

<!--how it works and video block end-->
<!--applications are now open Start-->

<div class="row bg-info p-5 ">
  <div class="col-md-2 p-5 my-5">

  </div>
  <div class="col-md-8 text-center p-5 my-5" style="color: white;">
    <h3>Applications are Now Open</h3>
    <p>We’re now taking enrolments for Semester 1 — 2021.
      Smart education graduates are 40% more likely to find ongoing work in their chosen profession.</p>
    <div>
      <button class="btn btn-light btn-outline-info" style="border-radius: 15px;"> GET STARTED</button>
    </div>

  </div>
  <div class="col-md-2 my-5 p-5">

  </div>
</div>

<!--applications are now open END-->
<!--our teachers start-->
<div class="row">
  <div class="col-md-3 my-5 ">

  </div>
  <div class="col-md-6 text-center my-5">
    <h3>Our Professional Teachers</h3>
    <p class="text-muted">Suspendisse sodales arcu velit, non pretium massa accumsan non. Proin accumsan placerat mauris sit amet condimentum.
      Morbi luctus risus tincidunt urna hendrerit mollis.
    </p>
  </div>
  <div class="col-md-3 my-5">

  </div>

</div>

<!--our teachers end-->
<!--3  teachers images start-->
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-4">
        <img style="width: 100%; height:  50vh; border-radius: 15px;" src="http://math.jacobs-university.de/petrat/photo.jpg" alt="">
        <h3>Samuel Williams</h3>
        <p>Professor of Mathematics</p>
      </div>
      <div class="col-md-4">
        <img style="width: 100%; height:  50vh;border-radius: 15px;" src="https://www.bu.edu/sociology/files/2020/02/Ashley-Mears-357x636.png" alt="">
        <h3>Karren Johnson</h3>
        <p>Professor of Biology</p>
      </div>
      <div class="col-md-4">
        <img style="width: 100%; height: 50vh;border-radius: 15px;" src="https://i.pinimg.com/564x/41/ce/f1/41cef1cd99e159688a254cc0ecb6aa6a.jpg" alt="">
        <h3>Marisa Tailor</h3>
        <p>Teacher of Geometry</p>
      </div>

    </div>

  </div>
  <div class="col-md-2">

  </div>

</div>

<!--3  teachers images END-->


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




<!--News row block start -->
<div class="row ">
  <div class="col-md-3">

  </div>
  <div class="col-md-6 ">
    <h3 class="my-3 text-center">News & <strong>Events </strong></h3>
    <p class="text-center text-muted">Online webinars for career guidance and skill improvement will be
      conducting every week and alternative friday. We have management faculty from top B schools in the country,
      our technical faculties have the best industry level Experience to guide students. </p>
  </div>
  <div class="col-md-3 ">

  </div>

</div>

<!--News row block end -->
<!--3 div with two images block row start-->
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-3 ">

    <img id="sep24img1" style="height: 70%; width: 100%; border-radius: 15px;" src="https://anneknock.files.wordpress.com/2011/09/learn-your-way.jpg?w=300&h=199" alt="">
    <p class="my-1 text-muted">24 september 2017</p>
    <p>Why students love study</p>
    <p style="color: skyblue;">Read More ></p>

  </div>
  <div class="col-md-3 ">

    <img id="sep24img2" style="height: 70%; width: 100%;border-radius: 15px;" src="https://www.chotot.com/kinhnghiem/wp-content/uploads/2018/12/viec-lam-online-1.jpg" alt="">
    <p class="my-1 text-muted">24 september 2017</p>
    <p>New Courses for 2021</p>
    <p style="color: skyblue;">Read More ></p>

  </div>
  <div class="col-md-3 my-5">
    <div id="sep13" class="row  my-1 " style="border-radius: 15px;">
      <div class="col-md-2">
        <h3 style="color: skyblue;">13 </h3>
        <h3>SEP</h3>
      </div>
      <div class="col-md-10">
        <p>Cientific Results Conference</p>
        <p class="text-muted">Proin accumsan placerat mauris sit amet condimentum.</p>
        <p style="color: skyblue;">View Event ></p>
      </div>

    </div>
    <div id="sep14" class="row  my-1" style="border-radius: 15px;">
      <div class="col-md-2">
        <h3 style="color: skyblue;">14 </h3>
        <h3>SEP</h3>
      </div>
      <div class="col-md-10">
        <p>Boost Your Teamworking Skills</p>
        <p class="text-muted">Proin accumsan placerat mauris sit amet condimentum.</p>
        <p style="color: skyblue;">View Event ></p>
      </div>

    </div>
    <div id="sep15" class="row my-1" style="border-radius: 15px;">
      <div class="col-md-2">
        <h3 style="color: skyblue;">15 </h3>
        <h3>SEP</h3>
      </div>
      <div class="col-md-10">
        <p>Campus Tour 2017</p>
        <p class="text-muted">Proin accumsan placerat mauris sit amet condimentum.</p>
        <p style="color: skyblue;">View Event ></p>
      </div>

    </div>


  </div>
  <div class="col-md-1 ">

  </div>

</div>
<!--3 div with two images block row End-->
@endsection