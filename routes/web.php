<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EducatorAddCourses;
use App\Http\Controllers\LiveSearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home1');
// });

Route::get('/', [HomeController::class,'home1']);

Route::get('error', [HomeController::class,'error']);
Route::get('about', [HomeController::class,'about']);
Route::get('admin_module', [HomeController::class,'admin_module']);

Route::get('after_login', [HomeController::class,'after_login']);
Route::get('become_a_teacher', [HomeController::class,'become_a_teacher']);


Route::get('buy_on_click/{a}', [HomeController::class,'buy_on_click']);
Route::get('comming_soon', [HomeController::class,'comming_soon']);
Route::get('contacts', [HomeController::class,'contacts']);
Route::get('courses', [HomeController::class,'courses']);
Route::get('editprofile', [HomeController::class,'editprofile']);



Route::get('eventcalender', [HomeController::class,'eventcalender']);
Route::get('for_buisness', [HomeController::class,'for_buisness']);
Route::get('full_width_listing', [HomeController::class,'full_width_listing']);
Route::get('gallery', [HomeController::class,'gallery']);
Route::get('home1', [HomeController::class,'home1']);


Route::get('login', [HomeController::class,'login']);
Route::get('mycourses', [HomeController::class,'mycourses']);
Route::get('myprofile', [HomeController::class,'myprofile']);
Route::get('our_mission', [HomeController::class,'our_mission']);
Route::get('our_team', [HomeController::class,'our_team']);


Route::get('process', [HomeController::class,'process']);
Route::get('services', [HomeController::class,'services']);
Route::get('sign_up', [HomeController::class,'sign_up']);
Route::get('single_course', [HomeController::class,'single_course']);
Route::get('single_team', [HomeController::class,'single_team']);



Route::get('singleevents', [HomeController::class,'singleevents']);
Route::get('topography', [HomeController::class,'topography']);
Route::get('with_left_sidebar', [HomeController::class,'with_left_sidebar']);
Route::get('with_right_sidebar', [HomeController::class,'with_right_sidebar']);


Route::get('layout', [HomeController::class,'layout']);



// form route user authentication

Route::post('user_signup_form',[HomeController::class,'user_signup_form']);

Route::get('show_signup_details',[HomeController::class,'show_signup_details']);

Route::get('edit_signup_details/{a}',[HomeController::class,'edit_signup_details']);

Route::get('delete_signup_details/{a}',[HomeController::class,'delete_signup_details']);

Route::post('update_user_signup_form',[HomeController::class,'update_user_signup_form_details']);

Route::post('user_login_form',[HomeController::class,'user_login_form']);
Route::get('logout',[HomeController::class,'logout']);
Route::get('email_verify/{token}',[HomeController::class,'email_verify_user']);
//ajax request
Route::post('forgetPassword',[HomeController::class,'forgetPassword']);

Route::get('reset_password/{token}',[HomeController::class,'reset_password']);

Route::post('update_user_password',[HomeController::class,'update_user_password']);



// form route educator authentication

Route::get('educator_signup',[HomeController::class,'educator_signup']);
Route::get('educator_login',[HomeController::class,'educator_login']);


Route::post('educator_signup_form',[HomeController::class,'educator_signup_form']); 
Route::get('show_educator_details',[HomeController::class,'show_educator_details']);


Route::get('edit_educator_signup_details/{a}',[HomeController::class,'edit_educator_signup_details']);

Route::get('delete_educator_signup_details/{a}',[HomeController::class,'delete_educator_signup_details']);

Route::post('update_educator_signup_form',[HomeController::class,'update_educator_signup_form']); 

Route::post('educator_login_form',[HomeController::class,'educator_login_form']); 
Route::get('email_verify_educator/{token}',[HomeController::class,'email_verify_educator']);

Route::post('forgetPasswordEducator',[HomeController::class,'forgetPasswordEducator']);

Route::get('reset_password_educator/{token}',[HomeController::class,'reset_password_educator']);

Route::post('update_educator_password',[HomeController::class,'update_educator_password']);
Route::get('educator_dashboard',[HomeController::class,'educator_dashboard']);



Route::post('rform',[HomeController::class,'rform']);
Route::post('rgform',[HomeController::class,'rgform']);


Route::get('cart',[HomeController::class,'cart']);
Route::get('usercart',[HomeController::class,'usercart']);

Route::get('delete_rcourse/{a}',[HomeController::class,'delete_rcourse']);

// ROUTE FOR PAYMENT

// Route::post('/paytm-callback', 'user_dashboard@paytmCallback');
// Route::post('/make_payment','user_dashboard@make_payment');

Route::post('/make_payment',[HomeController::class,'make_payment']);

Route::post('/paytm-callback',[HomeController::class,'/paytm-callback']);




// first pagination search  courses 

Route::get('searchcourses',[SearchController::class,'search_courses']);

Route::get('/home1s',[SearchController::class,'home1s'])->name('web.search');
Route::get('/after_logins',[SearchController::class,'after_logins'])->name('web.search');

Route::get('/search',[SearchController::class,'search'])->name('web.search');

//educator addcourses

Route::get('educator_add_courses', [EducatorAddCourses::class,'educator_add_courses']);

Route::post('educator_add_courses_form',[EducatorAddCourses::class,'educator_add_courses_form']);

Route::get('educator_show_add_courses',[EducatorAddCourses::class,'educator_show_add_courses']);
// ajax searh

Route::post('contact_form',[HomeController::class,'contact_form']);

