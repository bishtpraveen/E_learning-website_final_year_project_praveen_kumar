@extends('educator_dashboard_layout')
@section('main-content')

@if(Session::has('educator_id'))

<div class="row">

    <div class="col-md-2">


    </div>


    <div class="col-md-8">



    @if(session::has('success'))



<div class="alert alert-success">{{Session::get('success')}}</div>


@endif








        <!--2nd row-->

        <div class="row p-5" style="display: flex; justify-content: space-around;">



        @foreach($data as $d)

            <div class="col-md-3 px-0 my-5">

                <!--div1-->
               

                <!--anatomy start-->
                <div id="courserat2" style="border: 1px solid grey;border-radius: 15px;" class="my-3">
                    <img style="height: 100%; width: 100%; border-radius: 15px 15px 0px 0px;" src="{{ asset('thumnail_img/' . $d->thumnail_img) }}" alt="">

                    <div class="p-3">
                        <p class="text-muted">{{$d->title}}</p>
                        <p>{{$d->fullcoursename}}</p>

                        <div style="position: relative;">
                            <div>
                                <p style="color: yellow; font-size:small"><i class="far fa-star"> </i>
                                    <i class="far fa-star"> </i>
                                    <i class="far fa-star"> </i>
                                    <i class="far fa-star"> </i>
                                    <i class="far fa-star"> </i>
                                </p>
                            </div>
                            <div style="position: absolute; top: 1%; right: 10%;">
                                <small style="border-radius: 50%;" class="border border-outline-danger p-1">{{$d->price}}$</small>
                            </div>

                        </div>
                        <div style="position: relative;">

                            <div>
                                <small class="text-muted"> <i class="fas fa-book-open  ml-1"></i> {{$d->lessons}} Seats</small>
                            </div>
                            <div style="position: absolute; top: 1%; right: 10%;">
                                <small class="text-muted "> <i class="fas fa-users  "></i> {{$d->seats}} Lessons</small>

                            </div>
                        </div>
                        <p class="text-center my-3 "> <a href="buy_on_click"><button class="btn btn-light btn-outline-info">Read More</button></a> </p>

                    </div>

                </div>
                <!--anatomy ends-->
         







                <!--div1-->

            </div>

            @endforeach


        </div>

        <!--2nd row-->





















    </div>


    <div class="col-md-2">


    </div>


</div>













@else

@include('404')

@endif


@endsection