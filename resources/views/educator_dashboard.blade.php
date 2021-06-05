


@extends('educator_dashboard_layout')
@section('main-content')


@if(Session::has('educator_id'))

<!--my profile details start-->
<div class="row p-1">

    <div class="col-md-2 bg-dark text-center" style="border-radius: 15px;" >

        <h5 style="border: 1px solid white;  border-radius:15px ; background-color:white" class="my-1 p-5"><a style="font-size: small;" href="{{url('myprofile')}}"><i class="far fa-user"></i>{{Session::get('username')}}</a></h5>
        <h6 class=" p-3"><a href="{{url('educator_dashboard')}}"><i class="far fa-bell mr-1"></i> New Notifications</a></h6>

        <h6 class=" p-3"><a href="{{url('admin_module')}}"><i class="far fa-user"></i> Students</a></h6>
        <h6 class=" p-3"><a href="{{url('admin_module')}}"><i class="far fa-user"></i> All Students</a></h6>
        <h6 class=" p-3"><a href="{{url('admin_module')}}"><i class="fas fa-user-edit"></i>Add Students</a></h6>
        <h6 class=" p-3"><a href="{{url('admin_module')}}"><i class="fas fa-user-edit"></i> Edit Students</a></h6>
        <h6 class=" p-3"><a href="{{url('admin_module')}}"><i class="fas fa-chalkboard-teacher"></i>About Students</a></h6>


        <h6 class=" p-3"><a href="{{url('courses')}}"><i class="far fa-user"></i> Courses</a></h6>
        <h6 class=" p-3"><a href="{{url('courses')}}"><i class="fas fa-user-edit"></i>All Courses</a></h6>
        <h6 class=" p-3"><a href="{{url('educator_add_courses')}}"><i class="fas fa-address-card"></i> Add Courses</a></h6>
        <h6 class=" p-3"><a href="{{url('single_course')}}"><i class="fas fa-user-edit"></i> Edit Courses</a></h6>
        <h6 class=" p-3"><a href="{{url('single_course')}}"><i class="fas fa-chalkboard-teacher"></i>About Courses</a></h6>

    </div>

    <div class="col-md-10">

        <div class="row p-5" style="display: flex; justify-content: space-around;">

            <div class="col-md-2">
                <!--div1-->

           <div class="row p-2 text-light" style="background-color: blue; border-radius: 15px;">
                    <div class="col-md-4 text-center mt-5">
                        <i style="border-radius: 15px;" class="far fa-user"></i>
                    </div>
                    <div class="col-md-8">
                        <p>Total Students</p>
                        <p> <a style="text-decoration: none;" class="text-light" href=""> 44444</a> </p>
                        <div class="progress">
                            <div class="progress-bar w-50 progress-bar-stripped progress-bar-animated">
                            </div>
                        </div>
                        <p> <a style="text-decoration: none;" class="text-light" href="">80</a> % increasse in <a style="text-decoration: none;" class="text-light" href=""> 40</a> days.</p>
                    </div>
                </div>

                <!--div1-->

            </div>

            <div class="col-md-2">

              <!--div1-->

                <div class="row p-2 text-light" style="background-color: darkblue; border-radius: 15px;">
                    <div class="col-md-4 text-center mt-5">
                        <i style="border-radius: 15px;" class="far fa-user"></i>
                    </div>
                    <div class="col-md-8">
                        <p>New Students</p>
                        <p> <a style="text-decoration: none;" class="text-light" href=""> 44444</a> </p>
                        <div class="progress">
                            <div class="progress-bar w-50 progress-bar-stripped progress-bar-animated">
                            </div>
                        </div>
                        <p> <a style="text-decoration: none;" class="text-light" href="">80</a> % increasse in <a style="text-decoration: none;" class="text-light" href=""> 40</a> days.</p>
                    </div>
                </div>

                <!--div1-->
            </div>
            <div class="col-md-2">
                <!--div1-->

                <div class="row p-2 text-light" style="background-color: brown; border-radius: 15px;">
                    <div class="col-md-4 text-center mt-5">
                        <i style="border-radius: 15px;" class="far fa-user"></i>
                    </div>
                    <div class="col-md-8">
                        <p>Total sell Course</p>
                        <p> <a style="text-decoration: none;" class="text-light" href=""> 44444</a> </p>
                        <div class="progress">
                            <div class="progress-bar w-50 progress-bar-stripped progress-bar-animated">
                            </div>
                        </div>
                        <p> <a style="text-decoration: none;" class="text-light" href="">80</a> % increasse in <a style="text-decoration: none;" class="text-light" href=""> 40</a> days.</p>
                    </div>
                </div>

                <!--div1-->

            </div>

            <div class="col-md-2">
                <!--div1-->

                <div class="row p-2 text-light" style="background-color: darkred; border-radius: 15px;">
                    <div class="col-md-4 text-center mt-5">
                        <i style="border-radius: 15px;" class="far fa-user"></i>
                    </div>
                    <div class="col-md-8">
                        <p>Fees Collection</p>
                        <p> <a style="text-decoration: none;" class="text-light" href=""> 444</a> $</p>
                        <div class="progress">
                            <div class="progress-bar w-50 progress-bar-stripped progress-bar-animated">
                            </div>
                        </div>
                        <p> <a style="text-decoration: none;" class="text-light" href="">80</a> % increasse in <a style="text-decoration: none;" class="text-light" href=""> 40</a> days.</p>
                    </div>
                </div>

                <!--div1-->
            </div>

        </div>

        <!--2nd row-->

        <div class="row p-5" style="display: flex; justify-content: space-around;">





            <div class="col-md-3">
                <!--div1-->



                <!--anatomy start-->
                <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;">
                    <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://media.geeksforgeeks.org/img-practice/banner/dsa-self-paced-thumbnail.png" alt="">

                    <div class="p-3">
                        <p class="text-muted">Complete Interview Prepration</p>
                        <p> Java|C++|DSA</p>

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
                                <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 45 students </small>
                            </div>
                            <div style="position: absolute; top: 1%; right: 10%;">
                                <small class="text-muted"> <i class="fas fa-users"></i> online classes</small>

                            </div>
                        </div>
                        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Read More</button></p>

                    </div>

                </div>
                <!--anatomy ends-->





                <!--div1-->

            </div>


            <div class="col-md-3">

                <!--div1-->


                <!--anatomy start-->
                <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;">
                    <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://www.engineersedge.com/graphics/mathematics.png" alt="">

                    <div class="p-3">
                        <p class="text-muted">Complete Geometry</p>
                        <p> Mathematics</p>

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
                                <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 45 students </small>
                            </div>
                            <div style="position: absolute; top: 1%; right: 10%;">
                                <small class="text-muted"> <i class="fas fa-users"></i> online classes</small>

                            </div>
                        </div>
                        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Read More</button></p>

                    </div>

                </div>
                <!--anatomy ends-->






                <!--div1-->

            </div>


            <div class="col-md-3">
                <!--div1-->




                <!--anatomy start-->
                <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;">
                    <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="https://images5.alphacoders.com/560/thumbbig-560461.jpg" alt="">

                    <div class="p-3">
                        <p class="text-muted">Complete Morden History</p>
                        <p> Morden History</p>

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
                                <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> 45 students </small>
                            </div>
                            <div style="position: absolute; top: 1%; right: 10%;">
                                <small class="text-muted"> <i class="fas fa-users"></i> online classes</small>

                            </div>
                        </div>
                        <p class="text-center my-3 "><button class="btn btn-light btn-outline-info">Read More</button></p>

                    </div>

                </div>
                <!--anatomy ends-->

                <!--div1-->

            </div>


        </div>

        <!--2nd row-->

<!-- students details form -->

<div class="row">





    <div class="col-md-10 mx-auto my-5 px-0">

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    
                    <th>Email</th>
                    <th>Profile  Image </th>
                    



                    <th>  DATE OF ADMIT</th>
                    
                    <th> 	STATUS</th>
                    <th>SUBJECT </th>
                    <th>	FEES </th>
                 	
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>
               

            @foreach($data as $d)

                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->email}}</td>
                   
                    <td>{{$d->pro_img}}</td>
                    <td>*</td>
                    <td>*##checkin</td>
                    <td>*</td>
                    <td>*###120$</td>
                    <td>
                        <a href="{{url('edit_signup_details',$d['id'])}}" class="btn btn-light btn-outline-info my-1">Edit</a>
                        <a href="{{url('delete_signup_details',$d['id'])}}" class="btn btn-light btn-outline-info my-1">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>
<!-- students details form -->

    </div>

</div>



<!--my profile details ends-->


@else

@include('404')

 @endif


@endsection



































