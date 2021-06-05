@extends('layout')
@section('main-content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">


                <h3>Search everything</h3>
                <form action=" {{ route ('web.search') }} " method="GET">



                    <div class="form-group">
                        <label for="">Enter Keyword</label>
                        <input type="text" class="form-control " name="query" placeholder="Search here.................">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>

                </form>

                <br>
                <br>
                <hr>
                <br>

                <h5>Search Results.................</h5>
               
            
               
                @if(isset( $searchcourses))

        
               
                <div class="row">

              
                    @if(count($searchcourses) > 0)
              
                    @foreach($searchcourses as $d)

                    <!-- div block -->
               
                   
                    <div class="col-md-3 p-3">

<!-- for dynamic id -->
                    @foreach($data as $data1)
                        <a id="a1" style="text-decoration: none;" href="{{url('buy_on_click',$data1['id'])}}">
                    @endforeach
                    
<!-- for dynamic id -->


<!-- without dynamic id -->

<!-- <a id="a1" style="text-decoration: none;" href="{{url('buy_on_click')}}"> -->
<!-- without dynamic id -->

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




            </div>
        </div>
    </div>
</body>

</html>




@endSection