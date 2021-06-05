@extends('layout')
@section('main-content')
<!--2nd row ends from here-->



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

<!-- user details name and courses start -->

<div class="row p-1 ">
    <div class="col-md-2  bg-dark" style="border-radius: 15px;">

        <h5 style="border: 1px solid white;  border-radius:15px ; background-color:white" class="my-5 p-5"><a href="{{url('mycourses')}}"><i class="fas fa-chalkboard-teacher"></i> My Courses</a></h5>

        <h6 class="my-1 p-3"><a href="{{url('home1')}}"><i class="fas fa-home mr-1"></i> Home</a></h6>

        <h6 class="my-1 p-3"><a href="{{url('mycourses')}}"><i class="fas fa-chalkboard-teacher mr-1"></i> My Courses</a></h6>

        <h6 class="my-1 p-3"><a href="{{url('myprofile')}}"><i class="far fa-user mr-1"></i> My Profile</a></h6>

        <h6 class="my-1 p-3"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit mr-1"></i>Edit Profile</a></h6>

        <h6 class="my-1 p-3"><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a></h6>

    </div>


    <div class="col-md-8 my-5">
        <div class="row">

            <div class="col-md-2">
                <img style="height: 100%; width: 100%; border-radius: 50%; border: 10px solid white;" src="{{asset('pro_img/'.Session::get('pro_img'))}}" alt="">
            </div>

            <div class="col-md-2">


                <p><strong><a href="javascript:void(0)">{{Session::get('username')}}</a></strong></p>
                <p> <a href="javascript:void(0)">{{Session::get('email')}}</a></p>


            </div>

            <div class="col-md-2">

            </div>

            <div class="col-md-2">
                <p> <i style="color: blue;" class="fas fa-book-reader"></i></p>
                <p>2</p>
                <p>Courses</p>

            </div>

            <div class="col-md-2">
                <p><i style="color: blue;" class="fas fa-bolt"></i></p>
                <p>0</p>
                <p>Problems</p>
            </div>
            <div class="col-md-2">
                <p><i style="color: blue;" class="far fa-sun"></i></p>
                <p>0</p>
                <p>Points</p>
            </div>

        </div>

        <!-- enrolled registered and free courses NAVBAR start -->
        <div class="row bg-light">

            <div class="col-md-12">

                <nav class="navbar navbar-expand-md ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" id="enrolledC" class="nav-link"> <strong> Enrolled Courses</strong></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" id="registeredC" class="nav-link"> <strong>Registered Courses</strong> </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" id="freeC" class="nav-link"> <strong> Free Courses</strong> </a>
                        </li>
                    </ul>

                </nav>

            </div>


        </div>




        <!-- enrolled registered and free courses  NAVBAR end -->

        <!-- enrolled registered and free courses  next block start -->

        <div class="row ">

            <div class="col-md-12 my-5">

                <div class="row" id="enrolledCblock">
                    <div class="col-md-6">
                        <img style="height: 100%; width: 100%;" src="https://media.geeksforgeeks.org/img-practice/banner/dsa-self-paced-thumbnail.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>Data Structures & algorithms</p>
                        <p class="text-muted">Online Batch 12 tracks</p>
                        <p>

                            <button class="btn btn-light btn-outline-info">Continue Learning</button>
                        </p>
                    </div>
                </div>


                <div class="row" id="registeredCblock">
                    <div class="col-md-6">
                        <img style="height: 100%; width: 100%;" src="https://d6vdma9166ldh.cloudfront.net/media/images/4594dcf8-a8c5-4fa7-a6d4-bab2c9081041.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>Data Science</p>
                        <p class="text-muted">Online Batch 10 tracks</p>
                        <p>
                            <button class="btn btn-light btn-outline-info">Pay Now </button>
                        </p>
                    </div>



                     <div class="row p-5">
                        <div class="col-md-12 mx-auto">
                            <table class="table  table-hover">

                                <thead>
                                    <tr>
                                        <th>Course ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Course Name</th>
                                        <th>Course Amount</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($rdata as $d)

                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->username}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->courses}}</td>
                                        <td>{{$d->amount}}</td>
                                        <td>
                                            <a href="{{url('delete_rcourse',$d['id'])}}" class="btn btn-light btn-outline-info my-1">Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <td colspan="4" class="text-center"> <strong>Total Fee</strong> </td>
                                    <td id="td">
                                        {{$sum=0}}
                                        @foreach($rdata as $d)
                                        {{$sum += $d->amount}}
                                        @endforeach

                                    </td> 

                                 <script>
                                        $('#td').hide();
                                    </script> -->
                                     <td>{{$sum}}</td>

                                    <td>
                                        <a href="" class="btn btn-light btn-outline-info my-1"> Pay</a>
                                    </td>

                                </tfoot>

                            </table>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ml-auto">


                            <h3>Paytm option</h3>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
                                <label class="custom-control-label" for="customRadio1">Paytm</label>
                            </div>

                            <form action="{{url('make_payment')}}" method="post">

                                @csrf


                                <input type="hidden" value="{{$sum}}" id="total_amount_input" name="total_amount">
                                <input type="submit" value="Pay Now" class="btn btn-success">

                            </form>





                        </div>

                    </div> 

































                </div>


                <div class="row" id="freeCblock">
                    <div class="col-md-6">
                        <img style="height: 100%; width: 100%;" src="https://linuxconfig.org/images/00-learn-python-fundamentals.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>Fundamentals of Python</p>
                        <p class="text-muted">Online Batch 5 tracks</p>
                        <p>

                            <button class="btn btn-light btn-outline-info">Continue Learning</button>
                        </p>
                    </div>
                </div>







            </div>




        </div>
        <!-- enrolled registered and free courses  next block ends-->



    </div>



    <div class="col-md-2 my-5">

    </div>


</div>
<!-- user details name and courses end -->

<!--jquery start-->


<script>
    $('#enrolledCblock').show()
    $('#enrolledC').css('color', 'green')
    $('#registeredCblock').hide()
    $('#freeCblock').hide()


    $('#enrolledC').hover(function() {
        $('#enrolledC').css('color', 'green')
        $('#registeredC').css('color', 'blue')
        $('#freeC').css('color', 'blue')
        $('#enrolledCblock').slideDown()
        $('#registeredCblock').hide()
        $('#freeCblock').hide()
    })
    $('#registeredC').hover(function() {
        $('#registeredC').css('color', 'green')
        $('#enrolledC').css('color', 'blue')
        $('#freeC').css('color', 'blue')
        $('#registeredCblock').slideDown()
        $('#enrolledCblock').hide()
        $('#freeCblock').hide()

    })
    $('#freeC').hover(function() {
        $('#freeC').css('color', 'green')
        $('#registeredC').css('color', 'blue')
        $('#enrolledC').css('color', 'blue')
        $('#freeCblock').slideDown()
        $('#enrolledCblock').hide()
        $('#registeredCblock').hide()

    })
</script>


<!--jquery end-->



@endsection