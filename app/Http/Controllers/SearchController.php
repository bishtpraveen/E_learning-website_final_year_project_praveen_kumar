<?php

namespace App\Http\Controllers;

use App\Models\SearchCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EducatorAddCoursesModel;
class SearchController extends Controller
{


    //run thi url to add courses again => function
    public function search_courses()
    {

        //run thi url to add courses again

        $values = array(
            'course_id' => 1, 'course_name' => 'DSA', 'course_fee' => '$100', 'course_teacher' => 'Praveen Kumar',
            'course_review' => '4/5 star rating', 'course_details' => 'Interview prepration course fo beginner',
            'sign_up'=>'Go TO COURSE'
        );
        DB::table('search_courses')->insert($values);

        
        
        $values = array(
            'course_id' => 2, 'course_name' => 'Anatomy', 'course_fee' => '$100', 'course_teacher' => 'kuldeep Singh',
            'course_review' => '4 star rating', 'course_details' => 'Anatomy Structured course',
            'sign_up'=>'SignUp now'
        );
        DB::table('search_courses')->insert($values);

        
        $values = array(
            'course_id' => 3, 'course_name' => 'Economy', 'course_fee' => '$100', 'course_teacher' => 'Rajat Singh',
            'course_review' => '5 star rating', 'course_details' => 'Economy Booster course',
            'sign_up'=>'SignUp now'
        );
        DB::table('search_courses')->insert($values);

 
        $values = array(
            'course_id' => 4, 'course_name' => 'History', 'course_fee' => '$100', 'course_teacher' => 'Balbir Singh',
            'course_review' => '4.5 star rating', 'course_details' => 'Learn History through Dates',
            'sign_up'=>'SignUp now'
        );
        DB::table('search_courses')->insert($values);

        
        $values = array(
            'course_id' => 5, 'course_name' => 'mathematics', 'course_fee' => '$100', 'course_teacher' => 'Balbir Singh',
            'course_review' => '4.5 star rating', 'course_details' => 'Learn about Higher mathematics',
            'sign_up'=>'SignUp now'
        );
        DB::table('search_courses')->insert($values);



 
        $values = array(
            'course_id' => 6, 'course_name' => 'Interior Design', 'course_fee' => '$100', 'course_teacher' => 'Balbir Singh',
            'course_review' => '4.5 star rating', 'course_details' => 'Booster Course',
            'sign_up'=>'SignUp now'
        );
        DB::table('search_courses')->insert($values);

        
        $values = array(
            'course_id' => 7, 'course_name' => 'Graphic Design', 'course_fee' => '$100', 'course_teacher' => 'Balbir Singh',
            'course_review' => '4.5 star rating', 'course_details' => 'Booster Course',
            'sign_up'=>'SignUp now'
        );
        DB::table('search_courses')->insert($values);

        $searchData = SearchCourses::all();
        return view('search_courses')->with('data',  $searchData);
    }





    
    public function home1s(Request $request)
    {

        if (isset($_GET['query']) && strlen($_GET['query']) > 0) {

            $search_text = $_GET['query'];

            $searchcourses = DB::table('search_courses')->where('course_name', 'LIKE', '%' . $search_text . '%')->paginate(2);
            $searchcourses->appends($request->all());
            return view('home1', ['searchcourses' => $searchcourses]);
        } else {

            return view('home1');
        }
    }




    public function after_logins(Request $request)
    {

        if (isset($_GET['query']) && strlen($_GET['query']) > 0) {

            $search_text = $_GET['query'];

            $searchcourses = DB::table('search_courses')->where('course_name', 'LIKE', '%' . $search_text . '%')->paginate(5);
            $searchcourses->appends($request->all());
            return view('after_login', ['searchcourses' => $searchcourses]);
        } else {

            return view('after_login');
        }
    }

    

    public function search(Request $request)
    {





        $allData = EducatorAddCoursesModel::all();
       


        if (isset($_GET['query']) && strlen($_GET['query']) > 0) {

            $search_text = $_GET['query'];

            $searchcourses = DB::table('educator_add_courses_models')->where('title', 'LIKE', '%' . $search_text . '%')->paginate(2);
            $searchcourses->appends($request->all());
            return view('search', ['searchcourses' => $searchcourses])->with('data',$allData);

        } else {

            return view('search');
        }
    }


    public function search_home1(Request $req){     
    //  $data = EducatorAddCoursesModel::where('title','LIKE','%'.$req->input('query').'%')->get();
    //  return view('search_home1',['data'=>$data]);



     $data = EducatorAddCoursesModel::take(8)->orderBy('id', 'desc')->get();
     return view('search_home1',['data'=>$data]);
    //  Modal::take(5)->orderBy('id', 'desc')->get();
     
    }


}
