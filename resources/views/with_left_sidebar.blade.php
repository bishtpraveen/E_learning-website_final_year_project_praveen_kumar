@extends('layout')
@section('main-content')

<!--blog start-->

<div class="row">
    <div class="col-md-12 text-center my-5">
<h3><a href="{{url('full_width_listing')}}" style="text-decoration: none; color: black;">Blog</a></h3>
<p><a href="{{url('home1')}}" style="text-decoration: none; color: black;">Home></a><a href="{{url('full_width_listing')}}" style="text-decoration: none; color: black;">Blog</a></p>


    </div>

</div>

<!--blog end-->
<!--image & our students love studying block start-->
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-3">
        <input type="text" placeholder="Search" class="form-control" >
        <h3 class="my-3">Categories</h3>
        <p> <i class="fas fa-folder mr-3"></i>Student Life (15)</p>
        <p> <i class="fas fa-folder mr-3"></i>Academics (08)</p>
        <p> <i class="fas fa-folder mr-3"></i>Campus Life (17)</p>
        <p> <i class="fas fa-folder mr-3"></i>Research (09)</p>
        <p> <i class="fas fa-folder mr-3"></i>Alumni (25)</p>
        <p> <i class="fas fa-folder mr-3"></i>Admissions (03)</p>
       
        





    </div>
    <div class="col-md-5">

<img style="width: 100%; height: auto;" src="https://livewp.site/html/smartedu/img/blog_post/blog_post_01.jpg" alt="">
<p class="my-3 text-muted">24 September, 2017 *by Katty Simon *Student Life *3 Comments</p>
<h3> <a style="text-decoration: none; color: black;" href=""> Our Students Love Studying</a>
   </h3>
<p class="text-muted">To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became enthusiastic in order not 
    to disappoint the expectations of 
    those who knew her. The subdued smile which, though it did not suit her faded features, always playedround her lips expressed, 
    as in a spoiled child.</p>
    <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
    </div>
   
    <div class="col-md-2">

    </div>

</div>

<!--image & our students love studying block end-->


<!--Your time is limited and virtual high school experience start-->

<div class="row">

    <div class="col-md-2">


    </div>
    <div class="col-md-3">
        <h3 class="p-4">Related Posts</h3>
        <div class="row p-4">
        <div class="col-md-4">
        <img style="width: 100%;height: 100%;" src="https://livewp.site/html/smartedu/img/sidebar_img/related_posts/related_posts_01.jpg" alt="">
        </div>
        <div class="col-md-8">
        <p class="text-muted">24 September, 2017</p>
        <h3><a href="" style="text-decoration: none; color: black;">New Courses for 2018</a></h3>
        </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4">
            <img style="width: 100%;height: 100%;" src="https://livewp.site/html/smartedu/img/sidebar_img/related_posts/related_posts_02.jpg" alt="">
            </div>
            <div class="col-md-8">
            <p class="text-muted">24 September, 2017</p>
            <h3><a href="" style="text-decoration: none; color: black;">The Best Campus Tour</a></h3>
            </div>
            </div>
            <div class="row p-4">
                <div class="col-md-4">
                <img style="width: 100%;height: 100%;" src="https://livewp.site/html/smartedu/img/sidebar_img/related_posts/related_posts_03.jpg" alt="">
                </div>
                <div class="col-md-8">
                <p class="text-muted">24 September, 2017</p>
                <h3><a href="" style="text-decoration: none; color: black;">One Day With Us</a></h3>
                </div>
                </div>
            </div>
    <div class="col-md-5 p-2" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
<h3 class="text-muted"> "Your time is limited, so don't waste it living someone else's life.
     Don't be trapped by dogma - which is living with the results of other people's thinking.</h3>
     <p>— Steve Jobs</p>
     <p class="text-muted">24 September, 2017 *by Katty Simon *Student Life *3 Comments</p>
     <h3><a href=""  style="text-decoration: none; color: black;">A Virtual High School Experience</a></h3>
     <p class="text-muted">To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became enthusiastic 
         in order not to disappoint the expectations of those who knew her.</p>
         <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
    </div>
    
    <div class="col-md-2">


    </div>

</div>



<!--Your time is limited and virtual high school experience end-->
<!--Carousel start-->

<div class="row">
<div class="col-md-2">


</div>
<div class="col-md-3">
    <h3 class="p-4">Tags</h3>
    <a href="" class="btn btn-light btn-outline-info p-2 my-2">Courses </a>
    <a href=""class="btn btn-light btn-outline-info p-2  my-2"> Research </a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2">Alumni</a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2"> Student Life</a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2">Learning</a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2">Study</a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2">Blog</a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2"> Admission</a>
    <a href=""class="btn btn-light btn-outline-info p-2 my-2">Campus</a>
        
    </div>
<div class="col-md-5 p-4">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://livewp.site/html/smartedu/img/blog_post/blog_post_03.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://livewp.site/html/smartedu/img/blog_post/blog_post_04.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://livewp.site/html/smartedu/img/blog_post/blog_post_02.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


</div>

<div class="col-md-2">


</div>
</div>

<!--Carousel ends-->
<!--24 September, 2017 by Katty Simon Student Life 3 Comments THE FIRST 12 YEARS Start-->
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-3">
        <h3 class="p-4">Instagram</h3>
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_02.jpg" alt="">
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_03.jpg" alt="">
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_02.jpg" alt="">
        
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_04.jpg" alt="">
        
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_02.jpg" alt="">
        
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_08.jpg" alt="">
        
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_02.jpg" alt="">
        <img src="https://livewp.site/html/smartedu/img/sidebar_img/instagram/instagram_img_05.jpg" alt="">
        
        
            </div>
    <div class="col-md-5">
<p class="my-3">24 September, 2017 *by Katty Simon *Student Life *3 Comments</p>
<h3><a href=""  style="text-decoration: none; color: black;">The First Twelve Years</a></h3>
<p>To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became enthusiastic in order not to disappoint the expectations of those who knew her. The subdued smile which, 
    though it did not suit her faded features, always playedround her lips expressed, as in a spoiled child.</p>
    <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
    </div>
    
    <div class="col-md-2">

    </div>

</div>



<!--24 September, 2017 by Katty Simon Student Life 3 Comments THE FIRST 12 YEARS Ends-->
<!--2017-18 students applications Start-->
<!--2nd last div start row-->

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-3">
        <h3 class="p-4">Text Widget</h3>
        <p>Our campus is beautiful, complete with towering green trees and brick buildings. There are coffee shops and sports, restaurants 
            and a multitude of great study spots.</p>
            <img style="width: 100%; height: 100%;" src="https://livewp.site/html/smartedu/img/sidebar_img/banner_img.jpg" alt="">
            </div>
    <div class="col-md-5 p-4" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
<p>24 September, 2017 *by Katty Simon *Student Life *3 Comments</p>
<h3><a href=""  style="text-decoration: none; color: black;">2017-18 Student Application</a></h3>
<p>To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became 
    enthusiastic in order not to disappoint the expectations of those who knew her. The subdued smile which, though it 
    did not suit her faded features, always playedround her lips expressed, as in a spoiled child.</p>
    <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
    </div>
   
    <div class="col-md-2">

    </div>

</div>




<!--2nd last div ends row-->
<!--Video start Student Meetings And Games-->
<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-3">

</div>
<div class="col-md-5 p-4">
    <iframe width="100%" height="500vh" src="https://www.youtube.com/embed/m0uYQUnSey8" title="YouTube video player" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p>24 September, 2017 by Katty Simon Student Life 3 Comments</p>
    <h3><a href=""  style="text-decoration: none; color: black;">Student Meetings And Games</a></h3>
    <p>To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became enthusiastic in order not to disappoint the expectations of those who knew her. The subdued smile which,
         though it did not suit her faded features, always playedround her lips expressed, as in a spoiled child.</p>
         <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
</div>

<div class="col-md-2">

</div>
</div>
<!--video ends Student Meetings And Games-->


<!--Vidya Infinity are opennig new courses start-->

<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-3">

</div>
<div class="col-md-5 p-4" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
<h3> <i class="fas fa-link"></i>Smart Education are opennig new courses</h3>
<p><a href="https://www.youtube.com/channel/UC6GWhMw7CbkR9pTfsbm8nWQ">https://www.youtube.com/channel/UC6GWhMw7CbkR9pTfsbm8nWQ</a></p>
<h6>24 September, 2017 by Katty Simon Student Life 3 Comments</h6>
<h3><a  style="text-decoration: none; color: black;" href="">Your Future with Smart Education</a></h3>
<p>To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became enthusiastic
     in order not to disappoint the expectations of those who knew her. The subdued smile which, though it did not suit 
    her faded features, always playedround her lips expressed, as in a spoiled child.</p>
    <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
</div>

<div class="col-md-2">

</div>
</div>

<!--Vidya Infinity are opennig new courses ends-->
<!--The best music for u start-->
<div class="row">

<div class="col-md-2">

</div>
<div class="col-md-3">

</div>
<div class="col-md-5 p-4">
<div class="row">
    <div class="col-md-2">

<img style="width: 100%;" src="https://media-exp1.licdn.com/dms/image/C5103AQGoKqOioZ-CuQ/profile-displayphoto-shrink_400_400/0/1578234676330?e=1625702400&v=beta&t=FOeBunEkXK_4hkqBQVaEMdybVzMIQYjKRR6K5bL0V-k" alt="">
    </div>
    <div class="col-md-10">
<audio style="color: #1E90FF; width: 100%; background-color: #1E90FF;" class="mt-3" src="https://wynk.in/u/VOimG6YPZ" controls></audio>

    </div>


</div>
</div>

<div class="col-md-2">

</div>


</div>

<div class="row">

    <div class="col-md-2">

    </div>
    <div class="col-md-3">

    </div>
    <div class="col-md-5">
        <h6>24 September, 2017 *by Katty Simon *Student Life *3 Comments</h6>
        <h3><a  style="text-decoration: none; color: black;" href="">The Best Music for You Relax</a></h3>
        <p>To be an enthusiast had become her social vocation and, sometimes even when she did not feel like it, she became 
            enthusiastic in order not to disappoint the expectations of those who knew her.</p>
            <p><a style="text-decoration: none;" href="">Read More ></a> <span style="float: right;"> <i style="color: red;" class="fas fa-heart"></i> 255 Likes</span> </p>
    </div>
    
    <div class="col-md-2">

    </div>
</div>


<!--The best music for u ends-->

<!--1 2 3 start-->
<div class="row">

    <div class="col-md-2">

    </div>
    <div class="col-md-3">

    </div>
    <div class="col-md-5 text-center my-5">
<a style="border: 1px solid grey; border-radius: 50%; text-decoration: none;" class="p-1 mr-2" href="">1</a> 
<a style="border: 1px solid grey; border-radius: 50%; text-decoration: none;" class="p-1 mr-2" href="">2</a> 
<a style="border: 1px solid grey; border-radius: 50%; text-decoration: none;" class="p-1 mr-2" href="">3</a>
<a style="border: 1px solid grey; border-radius: 50%; text-decoration: none;" class="p-1 mr-2" href="">></a>
    </div>
   
    <div class="col-md-2">

    </div>

</div>

<!--1 2 3 end-->

@endsection