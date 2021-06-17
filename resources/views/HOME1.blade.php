<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home 1</title>
  <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-free-5.15.3-web/css/all.min.css')}}">
  <script src="{{asset('jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>

  <style>
    /* hover effect on sep 13 14 15 block START */
    #sep13:hover {
      box-shadow: 0px 0px 15px grey;

    }

    #sep14:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #sep15:hover {
      box-shadow: 0px 0px 15px grey;
    }

    /* hover effect on sep 13 14 15 block ENDs */
    /* hover effect with OPACITY sep 24 block START */
    #sep24img1:hover {
      opacity: 50%;

    }

    #sep24img2:hover {
      opacity: 50%;
    }

    /* hover effect with OPACITY sep 24 block Ends */

    /* course rating and price hover ROW1 START  */
    #courserat1:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #courserat2:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #courserat3:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #courserat4:hover {
      box-shadow: 0px 0px 15px grey;
    }

    /* course rating and price hover ROW1 END  */
    /* course rating and price hover ROW2 START  */
    #courserat5:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #courserat6:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #courserat7:hover {
      box-shadow: 0px 0px 15px grey;
    }

    #courserat8:hover {
      box-shadow: 0px 0px 15px grey;
    }

    /* course rating and price hover ROW2 END  */


    /*styling of coures boxes start*/
    #economy1:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;


    }

    #languages1:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;
    }

    #history1:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;

    }

    #biology1:hover {

      box-shadow: 0px 0px 15px blue;
      color: skyblue;
    }

    #musicP1:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;
    }

    #design1:hover {

      box-shadow: 0px 0px 15px blue;
      color: skyblue;

    }

    #economy2:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;

    }

    #languages2:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;
    }

    #history2:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;

    }

    #biology2:hover {

      box-shadow: 0px 0px 15px blue;
      color: skyblue;
    }

    #musicP2:hover {
      box-shadow: 0px 0px 15px blue;
      color: skyblue;
    }

    #economy3:hover {

      box-shadow: 0px 0px 15px blue;
      color: skyblue;

    }



    /*styling of coures boxes end*/

    /* hover navbar underline start */


    .nav-item {

      color: brown;
      padding: 20px;
      text-decoration: none;
      transition: 0.3s;
      margin: 0.7px;

      position: relative;
    }

    .nav-item:before {

      content: "";
      position: absolute;
      bottom: -7px;
      left: 0;
      width: 100%;
      height: 3px;
      background-color: white;
      border-radius: 9px 8px 0 0;
      opacity: 0;
      transition: 0.3s;
    }

    .nav-item:not(is-active):hover:before {
      opacity: 1;
      bottom: 0;
    }
  </style>

</head>

<body>

  <!--container starts from here-->
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-12" style="background-image:
    url(https://img.etimg.com/thumb/msid-77937584,width-1200,height-900,imgsize-148807,resizemode-8,quality-100/industry/services/education/view-heres-why-india-needs-to-be-future-ready-in-online-education.jpg);
   background-size: cover; background-attachment:local;  ">

        <!--  to remove bg image and replace with this code <div class="col-md-12" style="background-color: #1E90FF; "> -->


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





        @if(Session::has('error'))
        <div class="row">

          <div class="col-md-2">
          </div>


          <div class="col-md-6 mx-auto px-0">


            <div class="alert alert-danger text-center">
              {{Session::get('error')}}
            </div>

          </div>


          <div class="col-md-2">
          </div>
        </div>
        @endif

        <!--row 1starts from here-->
        <div class="row">

          <div class="col-md-2 ">
            <!--bloc for navbar margin-->
          </div>
          <div class="col-md-8 ">
            <!--navbar 1 starts from here-->
            <nav class="navbar navbar-expand-md px-0 ">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link"><i style="color: white;" class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-google-plus-g"></i></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a style="color: white;" href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i class="fas fa-envelope-square mr-2"></i>vidya@edu.com</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fas fa-phone  mr-2"></i>8122345678</a>
                </li>








                @if(Session::has('educator_id'))
                <li class="nav-item">
                  <a href="{{url('logout')}}" class="nav-link"><button class="btn btn-light btn-outline-primary"><i class="fas fa-sign-out-alt"></i></button></a>
                </li>
                <li class="nav-item dropdown">
                  <a href="" data-toggle="dropdown" class="btn btn-light btn-outline-primary  nav-link dropdown-toggle ">
                    <img style="height: auto; width: 7%; border-radius: 50%; border: 1px solid white; " src="{{asset('educator_profile_image/'.Session::get('pro_img'))}}" alt="">

                    {{Session::get('username')}}</i></a>
                  <div class="dropdown-menu">
                    <a href="{{url('educator_dashboard')}}" class="dropdown-item">Dashboard</a>

                    <a href="{{url('logout')}}" class="dropdown-item">Logout</a>
                  </div>
                </li>









                @elseif(!Session::has('email'))
                <li class="nav-item">
                  <a href="{{url('login')}}" class="nav-link text-light"><i class="fas fa-sign-in-alt mr-1 "></i>Login</a>
              </li>
              <li class="nav-item">
                  <a href="{{url('sign_up')}}" class="nav-link text-light"><i class="fas fa-user-plus mr-1"></i>SignUp</a>
              </li>


                @else
                <li class="nav-item">
                  <a href="{{url('logout')}}" class="nav-link"><button class="btn btn-light btn-outline-primary"><i class="fas fa-sign-out-alt"></i></button></a>
                </li>
                <li class="nav-item dropdown">
                  <a href="" data-toggle="dropdown" class="btn btn-light btn-outline-primary  nav-link dropdown-toggle "><i class="far fa-user"> {{Session::get('username')}}</i></a>
                  <div class="dropdown-menu">
                    <a href="{{url('mycourses')}}" class="dropdown-item">My Courses</a>
                    <a href="{{url('myprofile')}}" class="dropdown-item">My Profile</a>
                    <a href="{{url('editprofile')}}" class="dropdown-item">Edit Profile</a>
                    <a href="{{url('logout')}}" class="dropdown-item">Logout</a>




                  </div>
                </li>
                @endif
              </ul>
            </nav>

            <!--navbar 1 starts from here-->
          </div>
          <div class="col-md-2">
            <!--bloc for navbar margin-->
          </div>


        </div>
        <!--row 1 ends from here-->
        <!--2nd row starts from here-->
        <div class="row">
          <div class="col-md-2 ">

          </div>
          <div class="col-md-8 ">
            <nav class="navbar navbar-expand-md px-0">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" style="color: white;" class="navbar-brand">Vidya Infinity</a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a href="{{url('home1')}}" style="color: white;" id="homeId" class="nav-link ">Home</a>

                </li>



                <!--dropdown EVENTS start-->
                <li class="nav-item dropdown">
                  <a href="" style="color: white;" data-toggle="dropdown" id="eventsId" class="nav-link dropdown-toggle">Events</a>
                  <div id="eventsDdmId" class="dropdown-menu ">
                  <a href="{{url('game')}}" class="dropdown-item">Play Game</a>
                
                    <a href="{{url('singleevents')}}" class="dropdown-item">Single Events </a>
                    <a href="{{url('eventcalender')}}" class="dropdown-item">Events Calender</a>


                  </div>
                </li>
                <!--dropdown EVENTS ends-->

                <!--dropdown PAGES start-->
                <li class="nav-item dropdown">
                  <a href="" style="color: white;" data-toggle="dropdown" id="pagesId" class="nav-link dropdown-toggle">Pages</a>
                  <div id="pagesDdmId" class="dropdown-menu">
                    <a href="{{url('our_mission')}}" class="dropdown-item">Our Mission</a>
                    <a href="{{url('process')}}" class="dropdown-item">Process</a>
                    <a href="{{url('about')}}" class="dropdown-item">About</a>
                    <a href="{{url('become_a_teacher')}}" class="dropdown-item">Become A Teacher</a>
                    <a href="{{url('for_buisness')}}" class="dropdown-item">For Buisness</a>
                    <a href="{{url('services')}}" class="dropdown-item">Services</a>
                    <a href="{{url('our_team')}}" class="dropdown-item">Our Team</a>
                    <a href="{{url('single_team')}}" class="dropdown-item">Single Team</a>

                    <a href="{{url('error')}}" class="dropdown-item">404</a>
                    <a href="{{url('single_course')}}" class="dropdown-item">Single Course</a>
                    <a href="{{url('topography')}}" class="dropdown-item">Topography</a>
                    <a href="{{url('comming_soon')}}" class="dropdown-item">Coming Soon</a>
                    <a href="{{url('gallery')}}" class="dropdown-item">Gallery</a>





                  </div>
                </li>
                <!--dropdown PAGES ends-->


                <!--dropdown NEWS start-->
                <li class="nav-item dropdown">
                  <a href="" style="color: white;" data-toggle="dropdown" id="newsId" class="nav-link dropdown-toggle"> News</a>
                  <div id="newsDdmId" class="dropdown-menu ">
                    <a href="{{url('full_width_listing')}}" class="dropdown-item">Full Width Listing </a>
                    <a href="{{url('with_right_sidebar')}}" class="dropdown-item">With Right Sidebar</a>
                    <a href="{{url('with_left_sidebar')}}" class="dropdown-item">With Left Sidebar</a>

                    <a href="{{url('full_width_listing')}}" class="dropdown-item">Blog Post</a>



                  </div>
                </li>
                <!--dropdown NEWS ends-->

                <!-- li TAG for course and contact START-->

                <li class="nav-item">
                  <a href="{{url('courses')}}" class="nav-link" style="color: white;">Courses</a>
                </li>

                <li class="nav-item">
                  <a href="{{url('contacts')}}" class="nav-link" style="color: white;">Contact</a>
                </li>
                <!--li  TAG for course and contact ENDS-->
              </ul>
            </nav>
          </div>
          <div class="col-md-2 ">

          </div>


        </div>

        <!--2nd row ends from here-->



        <!--Banner  and Search bar CHOOSE from RAnge Of courses row start-->
        <div class="row ">
          <div class="col-md-3 ">

          </div>
          <div class="col-md-6 ">

            <h3 class="text-center my-5" style="color: white;">Choose From A Range Of <strong>Online Courses</strong>
            </h3>




            <!-- for pagination start  -->

            <!-- <form action="{{ route ('web.search') }}" method="GET">







              <div class="input-group mb-5">
                <input type="text" name="query" placeholder="what are the courses you would like to search?" style="border-radius: 15px 0px 0px 15px;" class="form-control  ">
                <div class="input-group-append">
                  <span style="border-radius: 0px 15px 15px 0px; color: white;" class="input-group-text bg-info ">

                    <button id="b1" class="btn btn-sm p-0 text-light" type="submit">SEARCH</button>
                  </span>

                </div>
              </div>





            </form> -->

            <!-- @if(isset( $searchcourses)) -->

            <!-- <div class="row"> -->

            <!-- 
                    @if(count($searchcourses) > 0)
                    @foreach($searchcourses as $d) -->

            <!-- div block -->
            <!-- <div class="col-md-3 p-3">
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


                    </div> -->
            <!-- div block
                    @endforeach
                    @else -->
            <!-- <div>

                        OOps ! No Result found !

                    </div> -->
            <!-- @endif -->
            <!-- </div>

                    <div class="pagination-block"> -->


            <!-- {{ $searchcourses->links('layouts.paginationlinks') }} -->
            <!-- </div> -->
            <!-- @endif -->



            <!-- pagination ends -->





            <form action="/search_home1">



              <div class="input-group mb-5">
                <input type="text" name="query" id="search" placeholder="what are the courses you would like to search?" style="border-radius: 15px 0px 0px 15px;" class="form-control search-box ">
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
        <!--Banner and Search bar CHOOSE from RAnge Of courses row end-->

        <!--Carousel row start-->

        <div class="row  p-5 ">

          <div class="col-md-2">

          </div>

          <div class="col-md-8 " style="border-radius: 100px;">
            <div class="owl-carousel owl-theme">
              @foreach($data as $d)

              <div class="col-md-12 p-3">






                <a id="a1" style="text-decoration: none;" href="{{url('buy_on_click',$d['id'])}}">

                  <script>
                    $('#a1').click(function() {

                      $('#fullcoursename').css('color', 'red');
                    });
                  </script>





                  <div id="courserat5" style="border: 1px solid grey;border-radius: 15px;">
                    <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px; " src="{{ asset('thumnail_img/' . $d->thumnail_img) }}" alt="image missing because(offline) img src is private pc">

                    <div class="p-3 bg-light">
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
                loop: true,
                margin: 10,
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
                    items: 3
                  }
                }
              })
            </script>

          </div>

          <div class="col-md-2">

          </div>

        </div>


        <!--Carousel row End-->

      </div>


    </div>


    <!--Welcome to VI 2 block row starts from here-->

    <div class="row">
      <div class="col-md-2 bg-light">

      </div>
      <div class="col-md-5 bg-light">
        <h3 class=" mt-5"> Welcome to Vidya Infinity </h3>
        <p>Vidya Indinity is a platform to learn online with top eduactors in different feilds.
          The aim of vidya infinity is to educate the people and make them skilled.
          There are coffee shops, sports, restaurants and a multitude of great study spots. Whether you are a
          prospective student or already taking classes, feel free to explore and see what makes "the campus on the
          hill" so special.

        </p>
        <p>- John S. Hogvaer, Founder</p>
      </div>
      <div class="col-md-5 px-0">
        <img style="height: 100%; width: 100%;" src="https://www.chotot.com/kinhnghiem/wp-content/uploads/2018/12/viec-lam-online-1.jpg" alt="">

      </div>

    </div>
    <!--Welcome to VI 2 block row ends  here-->

    <!--start of r0w 1- 8boxes-->
    <div class="row p-5  ">
      <div class="col-md-2 ">
      </div>
      <!--8 col block start-->
      <div class="col-md-8" style="display: flex; justify-content: space-between;">
        <div class="col-md-4">

          <div class="row">

            <div class="col-md-2">
              <i style="color: blue;" class="fas fa-cloud-upload-alt"></i>
            </div>

            <div class="col-md-10">
              <h3>Cloud Library</h3>
              <p class="text-muted">
                Download the lectures in cloud space and watch anytime
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="row">

            <div class="col-md-2">

              <i style="color: blue;" class="fas fa-certificate"></i>
            </div>

            <div class="col-md-10">
              <h3>Certifications</h3>
              <p class="text-muted">
                Download certificate after compeletion of the course
              </p>
            </div>


          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i style="color: blue;" class="far fa-play-circle"></i>
            </div>
            <div class="col-md-10">
              <h3>Video Lessons</h3>
              <p class="text-muted">
                Recorded and live video lessons as per your choice
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--8 col block end-->
      <div class="col-md-2">
      </div>
    </div>
    <!--end of r0w1 8boxes-->
    <!--start of r0w 2- 8boxes-->

    <div class="row p-5  ">
      <div class="col-md-2 ">
      </div>
      <!--8 col block start-->
      <div class="col-md-8" style="display: flex; justify-content: space-between;">
        <div class="col-md-4">

          <div class="row">

            <div class="col-md-2">
              <i style="color: blue;" class="fas fa-dumbbell"></i>
            </div>

            <div class="col-md-10">
              <h3>Train Your Brain</h3>
              <p class="text-muted">
                Learn with the best teachers in the world
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="row">

            <div class="col-md-2">
              <i style="color: blue;" class="fas fa-pencil-ruler"></i>
            </div>

            <div class="col-md-10">
              <h3>Master the skill</h3>
              <p class="text-muted">
                Get rating after solving different problems
              </p>
            </div>


          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i style="color: blue;" class="fas fa-user-graduate"></i>
            </div>
            <div class="col-md-10">
              <h3>Graduate The Best</h3>
              <p class="text-muted">
                Become part of worlds cutting edge firms after graduating
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--8 col block end-->
      <div class="col-md-2">
      </div>
    </div>

    <!--end of r0w2 8boxes-->

    <!--Trusted by600+ students row start-->
    <div class="row" style="background-image: url(https://college-hunt.com/wp-content/uploads/2018/08/campus-life-1080x675.jpg);
    background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
      <div class="col-md-2 ">

      </div>
      <div class="col-md-8 text-center  ">
        <h3 class="my-5 " style="color: white;">Trusted by over <strong>6000+</strong> students</h3>
        <p style="color: white;">We have fully qualified and experienced teacher to teach from different
          backgrounds</p>
        <button class="btn btn-light  btn-outline-primary my-5" style="border-radius: 15px;">  <a style="text-decoration: none;" href="{{url('sign_up')}}">Get Started</a>  </button>

      </div>
      <div class="col-md-2 ">

      </div>

    </div>

    <!--Trusted by600+ students row end-->

    <!--our popular courses div r0w start-->

    <div class="row my-5">
      <div class="col-md-2 ">

      </div>
      <div class="col-md-8 ">
        <h1 style="text-align: center;">
          Our Popular courses
        </h1>
        <p style="text-align: center;">
          We belive in quality education and skil development to meet the industry level demand in the
          market.Worlds best selling courses.
        </p>
      </div>
      <div class="col-md-2 ">

      </div>


    </div>

    <!--our popular courses div r0w end-->




    <!-- ROW1 courses,price,star rating ROW start from here-->
    <!-- <div class="row">

      <div class="col-md-2">
      </div>

      <div class="col-md-8">
        <div class="row" style="display: flex; justify-content: space-around;">




          <div class="col-md-3 ">

            <a style="text-decoration: none;" href="{{url('buy_on_click')}}">
              <div id="courserat1" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;" src="https://media.geeksforgeeks.org/img-practice/banner/dsa-self-paced-thumbnail.png" alt="">

                <div class="p-3">
                  <p class="text-muted">Interview Prepration</p>
                  <h3>JAVA | DS | ALGO</h3>

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
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1">$150</small>
                    </div>

                  </div>
                  <div style="position: relative;">

                    <div class="text-muted">
                      <small> <i class="fas fa-book-open  ml-1"></i> 14 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 25 seats</small>

                    </div>
                  </div>
                </div>

              </div>



            </a>

          </div>












          <div class="col-md-3 ">


            <a style="text-decoration: none;" href="{{url('buy_on_click')}}">

              <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;">
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
                </div>

              </div>

            </a>



          </div>










          <div class="col-md-3 ">




            <a style="text-decoration: none;" href="{{url('buy_on_click')}}">
              <div id="courserat3" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;" src="https://www.engineersedge.com/graphics/mathematics.png" alt="">

                <div class="p-3">
                  <p class="text-muted">Mathematics</p>
                  <h3>Geometry Course</h3>

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
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1">$180</small>
                    </div>

                  </div>
                  <div style="position: relative;">

                    <div class="text-muted">
                      <small> <i class="fas fa-book-open  ml-1"></i> 21 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 56 seats</small>

                    </div>
                  </div>
                </div>

              </div>
            </a>





          </div>






          <div class="col-md-3 ">

            <a style="text-decoration: none;" href="{{url('buy_on_click')}}">
              <div id="courserat4" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;" src="https://www.homelane.com/blog/wp-content/uploads/2020/05/shutterstock_766185586.jpg" alt="">

                <div class="p-3">
                  <p class="text-muted">Design</p>
                  <h3>Interior Design</h3>

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
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1">$210</small>
                    </div>

                  </div>
                  <div style="position: relative;">

                    <div class="text-muted">
                      <small> <i class="fas fa-book-open  ml-1"></i> 17 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 15 seats</small>

                    </div>
                  </div>
                </div>

              </div>

            </a>


          </div>




        </div>



      </div>


      <div class="col-md-2 ">

      </div>

    </div> -->
    <!-- ROW1 courses,price,star rating ROW1 END-->

    <!-- ROW2 courses,price,star rating ROW2 start from here-->
    <div class="row  ">

      <div class="col-md-2 ">
      </div>

      <div class="col-md-8 my-2">
        <div class="row" style="display: flex; justify-content: space-around;">


          @foreach($data as $d)

          <div class="col-md-3 p-3">






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

          <!-- 
          <div class="col-md-3 ">

            <a style="text-decoration: none;" href="{{url('single_course')}}">
              <div id="courserat6" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;" src="https://www.digiquestacademy.edu.in/wp-content/uploads/2019/10/Graphic-Designing1.jpg" alt="">

                <div class="p-3">
                  <p class="text-muted">Design</p>
                  <h3>Graphic Design</h3>

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
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1">$250</small>
                    </div>

                  </div>
                  <div style="position: relative;">

                    <div class="text-muted">
                      <small> <i class="fas fa-book-open  ml-1"></i> 50 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 25 seats</small>

                    </div>
                  </div>
                </div>

              </div>

            </a>
          </div> -->







          <!-- 
          <div class="col-md-3 ">

            <a style="text-decoration: none;" href="{{url('buy_on_click')}}">

              <div id="courserat7" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;" src="https://www.aaditritechnology.com/blog/wp-content/uploads/2018/01/Wordpress-Website-Development.jpg" alt="">

                <div class="p-3">
                  <p class="text-muted">Technology</p>
                  <h3>Word Press Technology</h3>

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
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1">$180</small>
                    </div>

                  </div>
                  <div style="position: relative;">

                    <div class="text-muted">
                      <small> <i class="fas fa-book-open  ml-1"></i> 21 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 56 seats</small>

                    </div>
                  </div>
                </div>

              </div>

            </a>


          </div> -->




          <!-- 
          <div class="col-md-3 ">



            <a style="text-decoration: none;" href="{{url('buy_on_click')}}">
              <div id="courserat8" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;" src="https://media.istockphoto.com/vectors/language-school-vector-id1084949366?k=6&m=1084949366&s=612x612&w=0&h=Ntk58bVJASoIAV5JlAbpGNA3kLi65OerpeySKWLX7qM=" alt="">

                <div class="p-3">
                  <p class="text-muted">Language</p>
                  <h3>English Basic Language </h3>

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
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1"> $115</small>
                    </div>

                  </div>
                  <div style="position: relative; ">

                    <div class="text-muted">
                      <small> <i class="fas fa-book-open ml-1"></i> 47 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 35 seats</small>

                    </div>
                  </div>
                </div>

              </div>
            </a>





          </div> -->




        </div>



      </div>


      <div class="col-md-2 ">

      </div>

    </div>
    <!-- ROW2 courses,price,star rating ROW2 END-->


    <!--See More button START-->
    <div class="row ">

      <div class="col-md-12 my-5">
        <div class="text-center">
          <button class="'btn btn-light btn-outline-primary  p-2 " style="border-radius: 15px;"> <a style="text-decoration: none;" href="{{url('courses')}}"> See More</a></button>
        </div>

      </div>

    </div>


    <!--See More button END-->







    <!--div block ROW div start for what makes us different-->



    <div class="row my-5">
      <div class="col-md-6 px-0">
        <img style="width: 100%; height: 100%; " src="http://www.msjcca.co.uk/wp-content/uploads/2012/07/what-makes-us-diff-pic.jpg" alt="">

      </div>
      <div class="col-md-6 px-0 bg-light">
        <h3 class="text-center my-4">What Make Us <strong> Different? </strong></h3>
        <p class="text-left ml-5"><i id="circleD1" style="color: grey;" class="fas fa-chevron-circle-down mr-2"></i>Campus
          Life</p>
        <p class=" mr-2 ml-5" id="campusLtxt">Vidya Infinity is the most trusted online
          education platform across the
          globe and is growing exponentially</p>




        <p class="text-left ml-5"><i id="circleD2" style="color: grey;" class="fas fa-chevron-circle-down mr-2"></i>
          Perfect Programs</p>
        <p class=" mr-2 ml-5" id="perfectPtxt">Vidya Infinity is the most trusted online
          education platform across the
          globe and is growing exponentially</p>



        <p class="text-left ml-5"><i id="circleD3" style="color: grey;" class="fas fa-chevron-circle-down mr-2"></i>Classic
          College Experience</p>
        <p class=" mr-2 ml-5" id="collegeEtxt">Vidya Infinity is the most trusted online
          education platform across the
          globe and is growing exponentially</p>



        <p class="text-left ml-5"><i id="circleD4" style="color: grey;" class="fas fa-chevron-circle-down mr-2"></i>Hands
          on Reseach</p>
        <p class=" mr-2 ml-5" id="handsOrtxt">Vidya Infinity is the most trusted online
          education platform across the
          globe and is growing exponentially</p>


      </div>

    </div>
    <!--jQuery START for What make us different-->
    <script>
      $('#campusLtxt').hide();
      $('#circleD1').hover(function() {
        $('#campusLtxt').slideToggle();
        $('#circleD1').css('color', 'skyblue');
        $('#circleD2').css('color', 'grey');
        $('#circleD3').css('color', 'grey');
        $('#circleD4').css('color', 'grey');
        $('#perfectPtxt').hide();
        $('#collegeEtxt').hide();
        $('#handsOrtxt').hide();

      });



      $('#perfectPtxt').hide();
      $('#circleD2').hover(function() {
        $('#perfectPtxt').slideToggle();
        $('#circleD2').css('color', 'skyblue');
        $('#circleD1').css('color', 'grey');
        $('#circleD3').css('color', 'grey');
        $('#circleD4').css('color', 'grey');
        $('#campusLtxt').hide();
        $('#collegeEtxt').hide();
        $('#handsOrtxt').hide();
      });




      $('#collegeEtxt').hide();
      $('#circleD3').hover(function() {
        $('#collegeEtxt').slideToggle();
        $('#circleD3').css('color', 'skyblue');
        $('#circleD2').css('color', 'grey');
        $('#circleD1').css('color', 'grey');
        $('#circleD4').css('color', 'grey');
        $('#campusLtxt').hide();
        $('#perfectPtxt').hide();
        $('#handsOrtxt').hide();
      });



      $('#handsOrtxt').hide();
      $('#circleD4').hover(function() {
        $('#handsOrtxt').slideToggle();
        $('#circleD4').css('color', 'skyblue');
        $('#circleD2').css('color', 'grey');
        $('#circleD3').css('color', 'grey');
        $('#circleD1').css('color', 'grey');
        $('#campusLtxt').hide();
        $('#perfectPtxt').hide();
        $('#collegeEtxt').hide();
      });
    </script>
    <!--jQuery ENDs for What make us different-->
    <!--div block ROW div Ends for what makes us different-->
    <!--News row block start -->
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <h3 class="my-3 text-center">News & <strong>Events </strong></h3>
        <p class="text-center text-muted">Online webinars for career guidance and skill improvement will be
          conducting every week and alternative friday. We have management faculty from top B schools in the country,
          our technical faculties have the best industry level Experience to guide students. </p>
      </div>
      <div class="col-md-3">

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
        <p style="color: skyblue;"> <a href="{{url('singleevents')}}" style="text-decoration:none"> Read More > </a> </p>

      </div>
      <div class="col-md-3 ">

        <img id="sep24img2" style="height: 70%; width: 100%;border-radius: 15px;" src="https://www.chotot.com/kinhnghiem/wp-content/uploads/2018/12/viec-lam-online-1.jpg" alt="">
        <p class="my-1 text-muted">24 september 2017</p>
        <p>New Courses for 2021</p>
        <p style="color: skyblue;"><a href="{{url('eventcalender')}}" style="text-decoration:none"> Read More > </a></p>

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
            <p style="color: skyblue;"><a href="{{url('eventcalender')}}" style="text-decoration:none"> View Event> </a></p>
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
            <p style="color: skyblue;"><a href="{{url('eventcalender')}}" style="text-decoration:none"> View Event> </a></p>
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
            <p style="color: skyblue;"><a href="{{url('eventcalender')}}" style="text-decoration:none"> View Event> </a></p>
          </div>

        </div>


      </div>
      <div class="col-md-1 ">

      </div>

    </div>
    <!--3 div with two images block row End-->
    <!--2nd last div start row-->

    <div class="row">
      <div class="col-md-2 bg-dark">

      </div>
      <div class="col-md-8 bg-dark">

        <div id="2ndlast" style="color: white; " class=" bg-dark">

          <div class="row my-5">
            <div class="col-md-3">

              <ul style="list-style-type: none;">
                <li>
                  <h3>Vidya Education</h3>
                </li>
                <li>Location:</li>
                <li class="text-muted">Chandigarh</li>
                <li>Office Hours:</li>
                <li class="text-muted">8:00am - 5:00pm</li>
                <li>Telephone:</li>
                <li class="text-muted">826-696-8370</li>
                <li>Email:</li>
                <li class="text-muted">vidyainfinityedu@edu.com</li>
              </ul>
            </div>
            <div class="col-md-3">

              <ul style="list-style-type: none;">
                <li>
                  <h3>Explore More</h3>
                </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">History & Mission</a> </li>
                <li> <a href=https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Administration</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Community</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Around the World</a></li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> News Network</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Visitor Information</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Social Media</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Social Media</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Campus Directories</a></li>


                <li>
                  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Employment</a>
                </li>
              </ul>
            </div>

            <div class="col-md-3">


              <ul style="list-style-type: none;">
                <li>
                  <h3>Addmissions</h3>
                </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Undergraduate</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> By School</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Process</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Visitor Information</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">For Prospective Parents</a> </li>
              </ul>

            </div>

            <div class="col-md-3">
              <ul style="list-style-type: none;">
                <li>
                  <h3>Research</h3>
                </li>


                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Applied Physics Laboratory</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Research Projects Administration</a> </li>
                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Funding Opportunities</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Undergraduate Research</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Resources</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Health & Medicine</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Social Sciences, Humanities & Arts</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Natural Sciences, Engineering & Tech</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Global Research</a> </li>

                <li> <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Technology Transfer</a> </li>












              </ul>

            </div>


          </div>


        </div>

      </div>
      <div class="col-md-2 bg-dark">

      </div>

    </div>
    <!--2nd last div end row-->
    <!--last navbar start-->
    <div class="row border border-outline-light">
      <div class="col-md-2 bg-dark">

      </div>
      <div class="col-md-8 bg-dark">
        <nav class="navbar navbar-expand-md bg-dark">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link text-muted" style="color: white;">
                <i class="far fa-copyright"></i>
                2021 Vidya Infinity.All Copyrights
                Rights Reserved</a>
            </li>
          </ul>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link  text-muted"><i style="color: white;" class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link  text-muted"><i style="color: white;" class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link  text-muted"><i style="color: white;" class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link  text-muted"><i style="color: white;" class="fab fa-google-plus-g"></i></a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link text-muted" style="color: white;">Privacy Policy </a>
            </li>
            <li class="nav-itm">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link text-muted" style="color: white;">|</a>
            </li>
            <li class="nav-itm">
              <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link text-muted" style="color: white;">Terms of Use</a>
            </li>
          </ul>

        </nav>

      </div>
      <div class="col-md-2 bg-dark">

      </div>

    </div>

    <!--last navbar ends-->




  </div>
  <!--container ends here-->
</body>

</html>