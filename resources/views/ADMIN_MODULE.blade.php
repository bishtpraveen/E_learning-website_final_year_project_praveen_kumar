@extends('layout')
@section('main-content')

@if(Session::has('succcess'))
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-6 mx-auto px-0">
        <div class="alert alert-danger">
            {{Session::get('succcess')}}
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
@endif
<!-- signup form -->
<div class="row ">
    <div class="col-md-8 mx-auto my-5 px-0">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Profile Image </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->password}}</td>
                    <td>{{$d->pro_img}}</td>
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
<!-- signup form -->
















@endsection