@extends('layout')
@section('main-content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Search courses into database</title>
</head>
<body>
  <div class="container">
  
  
  
  <div class="row">
  
  
  
  <div class="col-md-12 mx-auto">
  
  <table class="table table-hover table-bordered" >
  <thead>
  
  <tr>
  <th>id</th>
  <th>course_id</th>
  <th>course_name</th>
  <th>course_fee</th>
  <th>course_teacher</th>
  <th>course_review</th>
  <th>course_details</th>
  <th> signUp now</th>

  </tr>
  
  </thead>

  <tbody>
@foreach ($data as $v)
  <tr>
  <td>{{$v->id}}</td>
  <td>{{$v->course_id}}</td>
  <td>{{$v->course_name}}</td>
  <td>{{$v->course_fee}}</td>
  <td>{{$v->course_teacher}}</td>
  <td>{{$v->course_review}}</td>
  <td>{{$v->course_details}}</td>
  <td> <button class="btn btn-primary">{{$v->signUp}}</button>        </td>

  </tr>
  @endforeach








  </tbody>
  </table>
  
  </div>
  
  </div></div>  
</body>
</html>


@endSection