<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Layout</title>
    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-free-5.15.3-web/css/all.min.css')}}">
<script src="{{asset('jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
  <style>



    /* hover navbar underline start */
  
    
  .nav-item{
  
  color: brown;
  padding: 20px;
  text-decoration: none;
  transition: 0.3s;
  margin: 0.7px;
  
  position: relative;
  }
 
  .nav-item:before{
  
  content:"";
  position: absolute;
  bottom: -7px;
  left:0;
  width: 100%;
  height: 3px;
  background-color: white;
  border-radius: 9px 8px 0 0;
  opacity: 0;
  transition: 0.3s;
  }
  
  .nav-item:not(is-active):hover:before{
  opacity: 1;
  bottom: 0;
  }
  
  </style>
</head>
<body>
    <!--container starrt from here-->
    <div class="container-fluid ">
      
        <!--row 1starts from here-->
        <div class="row "  style="background-color: #1E90FF;">
            <div class="col-md-2 ">
                <!--bloc for navbar margin-->
            </div>
            <div class="col-md-8 ">
                <!--navbar 1 starts from here-->
                <nav class="navbar navbar-expand-md px-0  ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;" class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a style="color: white;" href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i
                                    class="fas fa-envelope-square mr-2"></i>vidya@edu.com</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white;" href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link"><i style="color: white;"
                                    class="fas fa-phone  mr-2"></i>8122345678</a>
                        </li>
                      





                        @if(Session::has('educator_id'))
                        <li class="nav-item">
                  <a href="{{url('logout')}}" class="nav-link"><button
                          class="btn btn-light btn-outline-primary"><i class="fas fa-sign-out-alt"></i></button></a>
              </li>
              <li class="nav-item dropdown">
                            <a href="" data-toggle="dropdown"
                                class="btn btn-light btn-outline-primary  nav-link dropdown-toggle "> 
                                <img  style="height: auto; width: 20%; border-radius: 50%; border: 1px solid white; " src="{{asset('educator_profile_image/'.Session::get('pro_img'))}}" alt="">
                                
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
                  <a href="{{url('logout')}}" class="nav-link"><i class="fas fa-sign-out-alt text-light"></i></a>
              </li>
              <li class="nav-item dropdown">
                            <a href="" data-toggle="dropdown"
                                class="text-light  nav-link dropdown-toggle "><i class="far fa-user "> {{Session::get('username')}}</i></a>
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
            <div class="col-md-2 ">
                <!--bloc for navbar margin-->
            </div>


        </div>
        <!--row 1 ends from here-->
        <!--2nd row starts from here-->
        <div class="row "  style="background-color: #1E90FF;" >
            <div class="col-md-2 ">

            </div>
            <div class="col-md-8 ">
                <nav class="navbar navbar-expand-md px-0 ">
                    <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" style="color: white;" class="navbar-brand">Vidya Infinity</a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                        <a href="{{url('home1')}}" style="color: white;"  id="homeId" class="nav-link ">Home</a>
                
                          </li>


                       <!--dropdown EVENTS start-->
               <li class="nav-item dropdown">
                  <a href="" style="color: white;" data-toggle="dropdown" id="eventsId" class="nav-link dropdown-toggle">Events</a>
                  <div id="eventsDdmId" class="dropdown-menu ">
                    <a href="{{url('singleevents')}}" class="dropdown-item">Single Events </a>
                    <a href="{{url('eventcalender')}}" class="dropdown-item">Events Calender</a>
                    <a href="{{url('game')}}" class="dropdown-item">Play Game</a>
                


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
                <li class="nav-item">
                    <a href="{{url('search')}}" style="color: white;" class="nav-link"><i class="fas fa-search"></i></a>
                </li>
                <!--li  TAG for course and contact ENDS-->
                        
                       
                    </ul>
                    
                </nav>
            </div>
            <div class="col-md-2 ">

            </div>


        </div>

        <!--2nd row ends from here-->





<!-- this is main content section -->
@yield('main-content')

<!-- this is main content section end-->


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
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">History & Mission</a> </li>
              <li >   <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Administration</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Community</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Around the World</a></li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> News Network</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Visitor Information</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Social Media</a> </li>
              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Social Media</a> </li>
              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">  Campus Directories</a></li>
             
             
              <li >
                <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> Employment</a>   </li>
            </ul>
          </div>

          <div class="col-md-3">


            <ul style="list-style-type: none;">
              <li>
                <h3>Addmissions</h3>
              </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Undergraduate</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;"> By School</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Process</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Visitor Information</a> </li>
              <li > <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">For Prospective Parents</a> </li>
            </ul>

          </div>

          <div class="col-md-3">
            <ul style="list-style-type: none;">
              <li>
                <h3>Research</h3>
              </li>


              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Applied Physics Laboratory</a> </li>
              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Research Projects Administration</a> </li>
              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Funding Opportunities</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Undergraduate Research</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Resources</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Health & Medicine</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Social Sciences, Humanities & Arts</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Natural Sciences, Engineering & Tech</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Global Research</a> </li>

              <li >  <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="text-muted" style="text-decoration: none;">Technology Transfer</a> </li>











            
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
            <a href="https://praveenkumarbisht.blogspot.com/2019/05/twask-2019-jngec-sunder-nagar.html" class="nav-link text-muted" style="color: white;">
              <i class="far fa-copyright"></i>
              2021 Vidya Infinity.All Copyrights
              Rights Reserved </a>
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