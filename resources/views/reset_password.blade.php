@extends('layout')
@section('main-content')



<div class="row" style="background-image: url(https://images.unsplash.com/photo-1594085951586-67c71f896e9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80); background-repeat: no-repeat; background-size: cover; ">
    <div class="col-md-6 mx-auto my-5">
        <form action="{{url('update_user_password')}}" method="post" style="  border-radius: 15px; border: 1px solid white; box-shadow: 0px 0px 50px grey; " class="p-5 ">
            @csrf
            <input type="hidden" value="{{$token}}" name="passwordToken">
            <div class="my-5" style="display:flex">
                <i style="color: white;" class="fas fa-key mr-1 mt-2 "></i>
                <input type="password" name="new_password" id="pwd" style=" background: transparent; border-radius: 15px 45px;" class="form-control bg-light" placeholder="New Password">
            </div>
            <div class="my-5" style="display:flex">
                <i style="color: white;" class="fas fa-key mr-1 mt-2 "></i>
                <input type="password" name="conf_password" id="cpwd" style=" background: transparent; border-radius: 15px 45px;" class="form-control bg-light" placeholder="Confirm Password">
            </div>
            <h5 style="background-color: light;" id="showErrorPwd"></h5>
            <input class="btn  btn-primary my-4 " value="Update Password" id="pSmt" type="submit">
        </form>
    </div>
</div>

<script>








$('#cpwd').keyup(function(){
    var pwd =$('#pwd').val();
    var cpwd =$('#cpwd').val();
    if(cpwd!=pwd){

        $('#showErrorPwd').html('***password not matching');
        $('#showErrorPwd').css('color','red');
        $('#pSmt').hide();
        return false;
    }
    else{
        $('#showErrorPwd').html('Password match');
        $('#showErrorPwd').css('color','green');
        $('#pSmt').show();
        return true;
    }
});


</script>




@endsection