@extends('layout')
@section('main-content')






<div class="row p-5">


<div class="col-sm-5 ">

<strong class="text-primary"> <a href="{{url('home1')}}">BACK TO HOME</a> </strong>

</div>

</div>





<div class="row ">


<div class="col-sm-5 mx-auto p-5">
<strong class="text-primary p-3">Search Results of latest courses</strong>


</div>

</div>


<div class="row">







@foreach($data as $d)


<div class="col-sm-3 p-3">
<a id="a1" style="text-decoration: none;" href="{{url('buy_on_click',$d['id'])}}">
    <div id="courserat5" style="border: 1px solid grey;border-radius: 15px;">
      <img style="height: 100%; width: 100%;border-radius: 15px 15px 0px 0px; " src="{{ asset('thumnail_img/' . $d->thumnail_img) }}" alt="image missing because(offline) img src is private pc">

      <div class="p-3">
        <p class="text-muted">{{$d->title}}</p>
        <p>{{$d->fullcoursename}}</p>

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


















@endSection