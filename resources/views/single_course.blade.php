@extends('layout')
@section('main-content')
<!--single course start-->
<div class="row">
    <div class="col-md-12 text-center my-5">
<h3><a href="{{url('single_course')}}" style="text-decoration: none; color: black;">Single Course</a></h3>
<p><a href="{{url('home1')}}" style="text-decoration: none; color: black;">Home></a><a href="{{url('single_course')}}" style="text-decoration: none; color: black;">Single Course</a></p>


    </div>

</div>

<!--single course start-->

<!--image start-->

<div class="row">
    <div class="col-md-2">

    </div>

    <div class="col-md-8">
<img style="width: 100%; height: auto;" src="https://livewp.site/html/smartedu/img/course/course_01.jpg" alt="">
<p class="my-3"><i style="color: yellow;" class="fas fa-star"></i>
    <i style="color: yellow;" class="fas fa-star"></i>
    <i style="color: yellow;" class="fas fa-star"></i>
    <i style="color: yellow;" class="fas fa-star"></i>
    <i style="color: yellow;" class="fas fa-star"></i>
</p>
<p class="text-muted"><span>Design</span> <span> <i class="fas fa-book mr-2 ml-1"></i> 50 Lessons</span>  <span> <i class="fas fa-users  mr-2 ml-1"></i> 25 Seats</span></p>
  
<h3 class="my-5">Graphic Design    <span class="p-1" style="float: right; border-radius: 20px ; border: 1px solid grey;">$250</span>   </h3>
<p><button class="btn btn-light btn-outline-info p-2 mr-5">OVERVIEW</button>
    <button class="btn btn-light btn-outline-info p-2  mr-5 ">CARRICULAM</button>
    <button class="btn btn-light btn-outline-info p-2">TEACHERS</button>

</p>

<p class="text-muted my-5">Graphic design is the process of visual communication and problem-solving using one or more of typography, photography and illustration. The field is considered a subset of visual communication and communication design, but sometimes the term "graphic design" is used synonymously. Graphic designers create and combine symbols, images and text to form visual representations of ideas and messages. They use typography, visual arts and page layout techniques to create visual compositions. Common uses of graphic design include corporate design (logos and branding), editorial design (magazines, newspapers and books), wayfinding or environmental design, advertising, web design, communication design, product packaging.

    A graphic design project may involve the stylization and presentation of existing text and either preexisting imagery or images developed by the graphic designer. Elements can be incorporated in both traditional and digital form, which involves the use of visual arts, typography, and page layout techniques. Graphic designers organize pages and optionally add graphic elements. Graphic designers can commission photographers or illustrators to create original pieces. Designers use digital tools, often referred to as interactive design, or multimedia design. Designers need communication skills to convince an audience and sell their designs.The "process school" is concerned with communication; it highlights the channels and media through which messages are transmitted and by which senders and receivers encode and decode these message. The semiotic school treats a message as a construction of signs which through interaction with receivers, produces meaning; communication as an agent.
</p>
<p ><button class="btn btn-light btn-outline-info p-2" >Buy Course</button></p>

</div>
    <div class="col-md-2">

    </div>

</div>
<!--image end-->






<!--Leave a comment-->



<div class="row">

    <div class="col-md-2 my-5">

    </div>
    <div class="col-md-8 bg-light my-5">
 <h3>Leave a comment</h3>

 <input type="text" placeholder="name" class="form-control p-2 my-2">
 <input type="email" placeholder="email" class="form-control p-2 my-2">
 <input type="text" placeholder="website" class="form-control p-2 my-2">
 <input type="text " placeholder="Message" class="form-control p-2 my-2">
 <input type="submit" value="Post Comment" class="btn btn-light btn-outline-info p-2 my-2">
    </div>
    <div class="col-md-2 my-5">

    </div>

</div>



<!--Leave a comment-->
















@endsection