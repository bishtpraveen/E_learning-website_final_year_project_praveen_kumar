@extends('layout')
@section('main-content')

<!--courses Start-->
<div class="row">
    <div class="col-md-12 text-center my-5">
         <h3><a href="{{url('courses')}}" style="text-decoration: none; color: black;">COURSES</a></h3>
        <p><a href="{{url('home1')}}" style="text-decoration: none; color: black;">Home></a> <a href="{{url('courses')}}" style="text-decoration: none; color: black;"> Courses</a></p>
        

    </div>

</div>

<!--courses end-->

<!--All economy languages Start-->


<div class="row">
    <div class="col-md-12 text-center my-5">
<span class="mr-3 ">All</span>
<span class="mr-3  ">Economy</span>
<span class="mr-3 ">Languages</span>

<span class="mr-3 ">Design</span>

<span class="mr-3 ">Biology</span>

<span class="mr-3 ">History</span>

<span class="mr-3 ">Mathematics</span>

<span>Technologies</span>

  
    </div>

</div>



<!--All economy languages Design... end-->



    <!-- ROW1 courses,price,star rating ROW start from here-->
    <div class="row">

        <div class="col-md-2">
        </div>
  
        <div class="col-md-8">
          <div class="row" style="display: flex; justify-content: space-around;">
  
  
  
  
          @foreach($data as $d)

          <div class="col-md-3 p-3">
          <a id="a1" style="text-decoration: none;" href="{{url('buy_on_click',$d['id'])}}">
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

          @endforeach
<!--   
            <div class="col-md-3 ">
              <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;"
                  src="https://debrabell.com/wp-content/uploads/2017/03/Physiology.jpg" alt="">
  
                <div class="p-3">
                  <p class="text-muted">Biology</p>
                  <h3>Anatomy Course</h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
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
            </div>
   -->
  
  
  
  
  
  
  
<!--   
            <div class="col-md-3 ">
              <div id="courserat3" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;"
                  src="https://www.engineersedge.com/graphics/mathematics.png" alt="">
  
                <div class="p-3">
                  <p class="text-muted">Mathematics</p>
                  <h3>Geometry Course</h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
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
            </div>
   -->
  
  
  
  
<!--   
            <div class="col-md-3 ">
              <div id="courserat4" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;"
                  src="https://www.homelane.com/blog/wp-content/uploads/2020/05/shutterstock_766185586.jpg" alt="">
  
                <div class="p-3">
                  <p class="text-muted">Design</p>
                  <h3>Interior Design</h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
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
            </div> -->
  
  
  
  
          </div>
  
  
  
        </div>
  
  
        <div class="col-md-2 ">
  
        </div>
  
      </div>
      <!-- ROW1 courses,price,star rating ROW1 END-->
  
      <!-- ROW2 courses,price,star rating ROW2 start from here-->
      <!-- <div class="row  ">
  
        <div class="col-md-2 ">
        </div>
  
        <div class="col-md-8 my-2">
          <div class="row" style="display: flex; justify-content: space-around;">
  
  
  
            <div class="col-md-3 ">
              <div id="courserat5" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px; "
                  src="https://images5.alphacoders.com/560/thumbbig-560461.jpg"
                  alt="image missing because(offline) img src is private pc">
  
                <div class="p-3">
                  <p class="text-muted">History</p>
                  <h3>World History (Ancient)</h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small style="border-radius: 50%;" class="border border-outline-danger p-1">$70</small>
                    </div>
  
                  </div>
                  <div style="position: relative;">
  
                    <div class="text-muted">
                      <small> <i class="fas fa-book-open  ml-1"></i> 23 lessons </small>
                    </div>
                    <div style="position: absolute; top: 1%; right: 10%;">
                      <small class="text-muted"> <i class="fas fa-users"></i> 36 seats</small>
  
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
  
  
  
  
            <div class="col-md-3 ">
              <div id="courserat6" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;"
                  src="https://www.digiquestacademy.edu.in/wp-content/uploads/2019/10/Graphic-Designing1.jpg" alt="">
  
                <div class="p-3">
                  <p class="text-muted">Design</p>
                  <h3>Graphic Design</h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
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
            </div>
  
  
  
  
  
  
  
  
            <div class="col-md-3 ">
              <div id="courserat7" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;"
                  src="https://www.aaditritechnology.com/blog/wp-content/uploads/2018/01/Wordpress-Website-Development.jpg"
                  alt="">
  
                <div class="p-3">
                  <p class="text-muted">Technology</p>
                  <h3>Word Press Technology</h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
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
            </div>
  
  
  
  
  
            <div class="col-md-3 ">
              <div id="courserat8" style="border: 1px solid grey;border-radius: 15px;">
                <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px;"
                  src="https://media.istockphoto.com/vectors/language-school-vector-id1084949366?k=6&m=1084949366&s=612x612&w=0&h=Ntk58bVJASoIAV5JlAbpGNA3kLi65OerpeySKWLX7qM="
                  alt="">
  
                <div class="p-3">
                  <p class="text-muted">Language</p>
                  <h3>English Basic Language </h3>
  
                  <div style="position: relative;">
                    <div>
                      <p><i class="far fa-star"> </i></p>
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
            </div>
  
  
  
  
          </div>
  
  
  
        </div>
  
  
        <div class="col-md-2 ">
  
        </div>
  
      </div> -->
      <!-- ROW2 courses,price,star rating ROW2 END-->
  
      <!--1 2 3 > START-->
      <div class="row ">
  
        <div class="col-md-12 my-5">
          <div class="text-center">
            <span><a style="border: 1px solid black; border-radius: 50%; text-decoration: none;" class="bg-light p-1" href="{{url('gallery')}}">1</a></span>
      <span><a style="border: 1px solid black; border-radius: 50%; text-decoration: none;" class="bg-light p-1" href="{{url('single_course')}}">2</a></span>
      <span><a style="border: 1px solid black; border-radius: 50%; text-decoration: none;" class="bg-light p-1" href="{{url('our_mission')}}">3</a></span>
      <span><a style="border: 1px solid black; border-radius: 50%; text-decoration: none;" class="bg-light p-1" href="{{url('our_team')}}">></a></span>
        
          </div>
  
        </div>
  
      </div>
  
  
      <!--1 2 3 > END-->
@endsection