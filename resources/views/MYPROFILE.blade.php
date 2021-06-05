
@extends('layout')
@section('main-content')






<!-- gooogle chart 1 start -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Daily Topics', 'minutes'],
      ['1 April 2021 (Data Types)', 12.2],
      ['2 April 2021 (strings)', 9.1],
      ['3 April 2021 (collections)', 12.2],
      ['4 April 2021 (heap)', 22.9],
      ['5 April 2021 (stack)', 0.9],
      ['6 April 2021 (queue)', 36.6],
      ['7 April 2021 (dp)', 9.1],
      ['8 April 2021 (class)', 30.5],
      ['9 April 2021 (objects)', 6.1],
      ['10 April 2021 (methods)', 2.7],
      ['11 April 2021 (time complexity)', 0.9],
      ['12 April 2021 (maths)', 2.7],
      ['13 April 2021 (variables)', 27.1],
      ['14 April 2021 (loops)', 3.4],
      ['15 April 2021 (computer networks)', 5.5],
      ['16 April 2021 (digital electronics)', 21.0],
      ['17 April 2021 (analog electronics)', 7.9],
      ['18 April 2021 (dsp)', 1.2],
      ['19 April 2021 (signal and systems)', 4.6],
      ['20 April 2021 (emt)', 1.5],
      ['21 April 2021 (radar)', 7.9],
      ['22 April 2021 (micro electronics)', 2.0],
      ['23 April 2021 (vlsi)', 45.7],
      ['24 April 2021 (optics)', 12.2],
      ['25 April 2021 (data science)', 30.5],
      ['26 April 2021 (python)', 15.2],
      ['27 April 2021 (java)', 30.5],
      ['28 April 2021 (php)', 1.8]]);

    var options = {
      title: 'Watch Hours daily - Track Your Progress ',
      legend: { position: 'none' },
    };

    var chart = new google.visualization.Histogram(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>


<!-- gooogle chart 1 ends -->



<!--2nd CHART START-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Problems', 'Hours per Day'],
          ['array',     11],
          ['graph',      2],
          ['dynamic programing',  2],
          ['heap', 2],
          ['queue',    7]
        ]);

        var options = {
          title: 'Daily problems solved'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<!--2nd CHART ends-->

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

<!--my profile details start-->


<div class="row p-1">


    <div class="col-md-2 bg-dark" style="border-radius: 15px;">


    <h5 style="border: 1px solid white;  border-radius:15px ; background-color:white" class="my-1 p-5"><a href="{{url('myprofile')}}"><i class="far fa-user"></i> My Profile</a></h5>
 
<h6 class="my-1 p-3" ><a href="{{url('home1')}}"><i class="fas fa-home mr-1"></i> Home</a></h6>

<h6 class="my-1 p-3"><a href="{{url('mycourses')}}"><i class="fas fa-chalkboard-teacher mr-1"></i> My Courses</a></h6>

<h6 class="my-1 p-3"><a href="{{url('myprofile')}}"><i class="far fa-user mr-1"></i> My Profile</a></h6>

<h6 class="my-1 p-3"><a href="{{url('editprofile')}}"><i class="fas fa-user-edit mr-1"></i>Edit Profile</a></h6>

<h6 class="my-1 p-3"><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a></h6>

    </div>

<div class="col-md-8 ">

<div class="row  my-5">

<div class="col-md-6  bg-light">
<p>Name</p>
<p>Institution</p>
<p>Courses Attend</p>
<p>Email Id</p>
 </div>
<div class="col-md-6 bg-light">
<p>{{Session::get('username')}}</p>
<p>JNGEC Sundernagar</p>
<p>Data Structures & Algorithms</p>
<p>{{Session::get('email')}}</p>
 </div>

</div>


<!--two graph section start-->


<div class="row  my-5">

   
    <div class="col-md-6 my-5 bg-light">
<p class="text-center">Watch Hours</p>
<p  class="text-center" >500 hours Completed</p>

<div id="chart_div" style="width: auto; height: auto;"></div>



    </div>
    <div class="col-md-6 my-5 bg-light">
<p class="text-center">Problem Solved</p>
<p class="text-center">200</p>
<div id="piechart" style="width: auto; height: auto;"></div>

    </div>

   


</div>




<!--two graph section ends-->

</div>


    

    <div class="col-md-2">

    </div>



</div>



<!--my profile details ends-->






@endsection