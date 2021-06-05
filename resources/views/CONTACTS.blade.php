
@extends('layout')
@section('main-content')
<!--contacts start-->

<div class="row">
    <div class="col-md-12 text-center my-5">
<h3><a href="{{url('contacts')}}" style="text-decoration: none; color: black;">Contacts</a></h3>
<p><a href="{{url('home1')}}" style="text-decoration: none; color: black;">Home></a><a href="{{url('contacts')}}" style="text-decoration: none; color: black;">Contacts</a></p>


    </div>

</div>







@if(Session::has('success'))
        <div class="row">

          <div class="col-md-2">
          </div>


          <div class="col-md-6 mx-auto px-0">


            <div class="alert alert-success text-center">
              {{Session::get('success')}}
            </div>

          </div>


          <div class="col-md-2">
          </div>
        </div>
        @endif
















<!--contacts end-->
<!--Google map start-->

<div class="row">

    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14069.248590904854!2d76.88829318056112!3d31.530416754162353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3905199b7ac797a3%3A0x94e8fb0b8f87d989!2sSundar%20Nagar%2C%20Himachal%20Pradesh!5e0!3m2!1sen!2sin!4v1617124766477!5m2!1sen!2sin"
         width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-md-2">

    </div>
</div>
<!--Google map end-->
<!--Grt in Touch and icons block start-->
<div class="row ">
    <div class="col-md-2 my-5">

    </div>
    <div class="col-md-4 my-5 ">
<h3>Get in <strong>Touch</strong> </h3>
<p class="text-muted">We have worls-class, flexible support via live chat, email and hone.
     We guarantee that you’ll be able to have any issue resolved within 24 hours. You van contact support immediately here.
    </p>
    <p class="text-muted"> <span style="font-size: large; color: white;">Adress: </span> Praveen JNGEC Sundernagar, Mandi (Himanchal Pradesh)</p>
    <p class="text-muted"><span style="font-size: large; color: white;">Email: </span>  vidyainfinity@edu.com</p>
    <p class="text-muted">
        <span style="font-size: large; color: white;"> Phones:  </span> 
       
       <p class="ml-5"> +1 352 254 1547</p>
        <p class="ml-5">+1 352 254 1548</p>
        </p>
        <p>  <span style="font-size: large;">Find Us ON   </span> 
            
            <i style="border-radius: 50%; color: white; background-color: blue; " class="fab fa-facebook-f p-2 ml-5 mr-2"></i>
            <i style="border-radius: 50%;color: white; background-color: skyblue; " class="fab fa-twitter p-2 mr-2"></i>
            <i style="border-radius: 50%; color: white; background-color: red; " class="fab fa-google-plus-g p-2 mr-2"></i>
            <i style="border-radius: 50%; color: white; background-color: pink; " class="fab fa-pinterest-square p-2 mr-2"></i>
        </p>

    </div>
    <div class="col-md-4 my-5">


<form action="{{url('contact_form')}}" method="post">
@csrf

    <div style="display: flex; justify-content: space-between;">

        



            <input style="border-radius: 15px; border: 1px solid grey;" class="p-2 mr-2 form-control" type="text" placeholder="Name*">
        
        
        

            <input class="p-2 ml-2 form-control" style="border-radius: 15px; border: 1px solid grey;" type="text" placeholder="Email*">
        
       
    </div>
    
    <input class="p-5 my-5 w-100 form-control" style="border-radius: 15px;border: 1px solid grey;" type="text" placeholder="Message..." >
    <input class="p-2 my-1 bg-light w-50 form-control" type="submit" placeholder="SEND MESSAGE" style="border-radius: 15px;color: skyblue; border: 1px solid skyblue;  " >



    </form>

    </div>
    <div class="col-md-2 my-5">

    </div>

</div>





<!--Grt in Touch and icons block end-->
@endsection