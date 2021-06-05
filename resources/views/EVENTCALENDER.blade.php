@extends('layout')
@section('main-content')
    <!--Events Home>events Start-->
    <div class="row ">
<div class="col-md-3 my-5">

</div>
<div class="col-md-6 text-center my-5 ">
  <h3><a href="{{url('eventcalender')}}" style="text-decoration: none; color: black;">Events</a></h3>
<p><a href="{{url('home1')}}" style="text-decoration: none; color: black;">Home></a> <a href="{{url('eventcalender')}}" style="text-decoration: none; color: black;">Events Calender</a> </p>
<div>
<input type="text" placeholder="Date Of Event"style="border-radius: 15px;width: 25%; " class=" form-control mx-auto my-1 ">
<input type="text" placeholder="Keyword"style="border-radius: 15px;width: 25%; "class=" form-control mx-auto my-1" >
<button class="btn btn-light btn-outline-info p-2 w-25  form-control mx-auto" style="border-radius: 15px;">SEARCH</button>

</div>

</div>
<div class="col-md-3 my-5">

</div>
    </div>
     <!--Events Home>events End-->
     <!--September 2017 start-->
     <div class="row">
         
     </div>
<!--September 2017 ends-->
<!--table Start-->
<div class="row my-5">
<div class="col-md-2">

</div>
<div class="col-md-8">

    <table class="table">
        <thead>
            <tr>
               
            <p class="text-center p-5 bg-info" style="color: white;">
                 <i class="fas fa-angle-left p-2 mr-5" style="border-radius: 50%; border: 1px solid white;"  >
                </i>September 2017 <i class="fas fa-angle-right p-2 ml-5"style="border-radius: 50%; border: 1px solid white;" ></i></p></tr>
<tr >
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
<th>Saturday</th>
<th>Sunday</th>
</tr>
        </thead>

<tbody>
<tr>
    
    <td>28</td>
    <td>29</td>
    <td>30</td>
    <td>31</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
</tr>
<tr>
    
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
</tr>
<tr>
    
    <td>11</td>
    <td>12
        <p>cintific </p>
        <p> Results</p>
        <p>conference</p>
    </td>
    <td>13</td>
    <td>14</td>
    <td>15
        <p>Boost Your </p>
        <p>Team Working</p>
        <p>Skills</p>
    </td>
    <td>16</td>
    <td>17</td>
</tr>
<tr>
    
    <td>18</td>
    <td>19
        <p>Campus</p>
        <p>Tour</p>
        <p>2021</p>
    </td>
    <td>20</td>
    <td>21</td>
    <td>22</td>
    <td>23</td>
    <td>24</td>
</tr>
<tr>
    
    <td>25</td>
    <td>25</td>
    <td>27</td>
    <td>28</td>
    <td>29</td>
    <td>30</td>
    <td>1</td>
</tr>
</tbody>
<tfoot>

</tfoot>
</table>
</div>
<div class="col-md-2">

</div>

     </div>


<!--table End-->
@endsection