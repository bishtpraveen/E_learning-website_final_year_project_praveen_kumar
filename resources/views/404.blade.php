@extends('layout')
@section('main-content')

<!--404 start-->

<div class="row">
    <div class="col-md-12 text-center my-5">
<h3><a href="{{url('404')}}" style="text-decoration: none; color: black;">404</a></h3>
<p><a href="{{url('home1')}}" style="text-decoration: none; color: black;">Home></a><a href="{{url('404')}}" style="text-decoration: none; color: black;">404</a></p>


    </div>

</div>

<!--404 end-->


<!--404 body Start-->

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">

        <h1 class="text-center" style="color: #1E90FF;">404</h1>
        <h3 class="text-center text-muted">Oops! Page Not Found!

            </h3>
            <p class="text-center text-muted">Either Something Get Wrong or the Page Doesn't Exist Anymore. Plese Login first to access the page</p>

            <p class="text-center"><a href="{{url('home1')}}" class="btn btn-light btn-outline-info p-3 my-5" > Take me Home</a></p>
    </div>
    <div class="col-md-2">

    </div>

</div>

<!--404 body end-->

@endsection
