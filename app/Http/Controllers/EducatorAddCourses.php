<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\EducatorAddCoursesModel;
class EducatorAddCourses extends Controller
{
    public function educator_add_courses(){

        return view('educator_add_courses');
    }


    public function educator_add_courses_form(Request $request){

    //     echo "<pre>";
    //    print_r($request->all());

        $validator = Validator::make($request->all(),
        [
            'title'=>'required',
            'fullcoursename'=>'required',
            'price'=>'required',
            'lessons'=>'required',
            'seats'=>'required',
            'email'=>'required'

        ]
        );

        if($validator->fails()){

            return $validator->errors();
        }
       $details = new EducatorAddCoursesModel();
    
       $details->thumnail_img      = $request->thumnail_img;

if($request->hasFile('thumnail_img')){
$image       =  $request->file('thumnail_img');
$extension   =  $image->getClientOriginalExtension();
$new_name    =  rand().time().'.'.$extension;
$destination  = public_path('thumnail_img');
$image->move($destination,$new_name);
$details->thumnail_img=$new_name;

    
}







       $details->title               = $request->title;
       $details->fullcoursename     = $request->fullcoursename ;
       $details->rating             = $request->rating ;
       $details->price           = $request->price  ;
       $details->lessons         = $request->lessons  ;
       $details->seats           = $request->seats  ;


       $details->overview           = $request->overview  ;
       $details->features          = $request->features ;
       $details->learn           = $request->learn ;
       $details->content          = $request->content  ;
       $details->faq          = $request->faq ;
       $details->faq1        = $request->faq1  ;
       $details->faq2          = $request->faq2 ;
       $details->faq3        = $request->faq3 ;
       $details->email          = $request->email ;




       $details->save();

       session()->flash('success','Course Added successfully');
       return redirect ('educator_show_add_courses');






    }






    public function educator_show_add_courses(){


$allData = EducatorAddCoursesModel::all();
 return view('educator_show_add_courses')->with('data',$allData);
    }




}
