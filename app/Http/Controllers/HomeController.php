<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddDetails;
use App\Models\AddDetailsEducator;
use App\Models\MyOrder;
use App\Models\VerifyUserEmail;
use App\Models\VerifyEmailEducator;
use App\Models\RegisteredCourses;
use App\Models\EducatorAddCoursesModel;
use Hash;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Redirect;
use Illuminate\Support\Facades\Validator;
use Session;
use Cookie;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Cookie as FacadesCookie;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Symfony\Component\HttpFoundation\Cookie as HttpFoundationCookie;

class HomeController extends Controller

{



// ***********user details ************************************

    public function user_signup_form(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required | unique:add_details|email:rfc,dns',
            'password' => 'required',
            'username' => 'required',
            'pro_img' => 'required',
            'checkbox' => 'required'
        ]);
        if ($validator->fails()) {
            session()->flash('validatorError', $validator->errors()->first());
            return redirect('sign_up');
        }
        $details = new AddDetails();
        $details->username   = $request->username;
        $details->email      = $request->email;
        $details->password  = Hash::make($request->password);
        if ($request->hasFile('pro_img')) {
            $image  = $request->file('pro_img');
            $extension = $image->getClientOriginalExtension();
            $new_name  = rand() . time() . '.' . $extension;
            $destination  = public_path('/pro_img');
            $image->move($destination, $new_name);
            $details->pro_img = $new_name;
        }
        $details->save();
        //verify user email
        $token = rand() . time();
        $ve = new VerifyUserEmail();
        $ve->email = $request->email;
        $ve->token = $token;
        //mail
        $dataArray = array('email' => $request->email, 'token' => $token);
        Mail::send('email.registerEmail', $dataArray, function ($m) use ($dataArray) {
            $m->to($dataArray['email'])->subject('Registeration is done');
            $m->from('abc@gmail.com', 'System Admin Praveen Kumar');
        });
        $ve->save();

        
        session()->flash('succcess', 'Last Details By User Added Successfully To the database');
        // return redirect('show_signup_details');
        return view('otp_verification');
    }

    public function show_signup_details()
    {
        $allData = AddDetails::all();
        return view('show_signup_details')->with('data', $allData);
    }


    public function edit_signup_details($id)
    {
        $singleDetails = AddDetails::find($id);
        return view('edit_signup_details')->with('editData', $singleDetails);
    }


    public function delete_signup_details($id)
    {
        $singleDetails = AddDetails::find($id);
        $singleDetails->delete();
        session()->flash('succcess', ' Last Details Deleted Successfully');
        return redirect('show_signup_details');
    }


    public function update_user_signup_form_details(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $updateSelectedRow = AddDetails::where('id', $request->id)->first();
        $updateSelectedRow->username = $request->username;
        $updateSelectedRow->email  = $request->email;
        $updateSelectedRow->password = $request->password;
        $updateSelectedRow->pro_img = $request->pro_img;
        $updateSelectedRow->save();
        session()->flash('succcess', 'Details updated Successfully');
        return redirect('show_signup_details');
    }


    public function user_login_form(Request $request)
    {

        $checkUsername = AddDetails::where('username', $request->username)->first();
        if (!$checkUsername) {
            session()->flash('error', 'Username is not registered with us');
            return Redirect::back();
        }
        $checkEmail = AddDetails::where('email', $request->email)->first();
        if (!$checkEmail) {
            session()->flash('error', 'Email is not registered with us');
            return Redirect::back();
        }
        if ($checkEmail->email_verify == 0) {
            session()->flash('error', 'Email is not verified');
            return Redirect::back();
        }

        $checkPassword = Hash::check($request->password, $checkEmail->password);
        if (!$checkPassword) {
            session()->flash('error', 'Incorrect Password');
            return Redirect::back();
        }
        //session create
        Session::put('email', $checkEmail->email);
        Session::put('username', $checkUsername->username);
        Session::put('id', $checkEmail->id);
        Session::put('pro_img', $checkEmail->pro_img);
        
        //Cookie

        Cookie::queue(Cookie::make('email',$checkEmail->Email,2));
        Cookie::queue(Cookie::make('id',$checkEmail->id,2));
        Cookie::queue(Cookie::make('username',$checkEmail->username,2));
     
       



        session()->flash('success', 'login succssfully');
        return redirect('after_login');
    }


    public function logout()
    {
        Session::flush();
        session()->flash('success', 'logout succssfully');
        return redirect('/');
    }

    public function email_verify_user($token)
    {

        $checkToken = VerifyUserEmail::where('token', $token)->first();
        echo "<pre>";
        print_r($token);
        if (!$checkToken) {
            session()->flash('error', 'Token or Link expire please try again with new link');
            return redirect('/');
        }
        $updateEmailVerifyStatus = AddDetails::where('email', $checkToken->email)->update(['email_verify' => 1]);
        session()->flash('success', 'Email verified succeesfully . Login using Email Id');
        return redirect('login');
        $checkToken->delete();
    }

    public function forgetPassword(Request $request)
    {
        $checkEmail = AddDetails::where('email', $request->email)->exists();
        if (!$checkEmail) {
            return 0;
        }
        $token = rand() . time();
        $data = array(

            'email' => $request->email,
            'token' => $token,
        );
        $insertUsingDB = DB::table('password_resets')->insert($data);
        print_r($insertUsingDB);
        //mail
        $dataArray = array('email' => $request->email, 'token' => $token);
        Mail::send('email.passwordResetEmail', $dataArray, function ($m) use ($dataArray) {
            $m->to($dataArray['email'])->subject('password reset');
            $m->from('abc@gmail.com', 'System Admin Praveen Kumar');
        });
        return 1;
    }

    public function reset_password($t)
    {

        $checkToken = DB::table('password_resets')->where('token', $t)->first();
        if (!$checkToken) {
            session()->flash('error', 'link expire.Please try again with new link');
            return redirect('/');
        }
        return view('reset_password')->with('token', $t);
    }

    public function update_user_password(Request $request)
    {

        $checkToken = DB::table('password_resets')->where('token', $request->passwordToken)->first();
        if (!$checkToken) {
            session()->flash('error', 'link expire.Please try again with new link');
            return redirect('/');
        }

        $updateUserPassword = AddDetails::where('email', $checkToken->email)->update(['password' => Hash::make($request->new_password)]);
        DB::table('password_resets')->where('token', $request->passwordToken)->delete();
        session()->flash('success', 'Password updated successfully');
        return redirect('/');
    }



    //***************************************************************educator authentication details

    public function educator_signup()
    {
        return view('educator_signup');
    }


    public function educator_login()
    {
        return view('educator_login');
    }


    public function educator_signup_form(Request $request)
    {

        // echo "<pre>";
        //     print_r($request->all());
        $validator = Validator::make($request->all(), [

            'email' => 'required|unique:add_details_educators|email:rfc,dns',
            'password' => 'required',
            'username' => 'required',
            'pro_img' => 'required',
            'checkbox' => 'required'
        ]);
        if ($validator->fails()) {
            session()->flash('validatorError', $validator->errors()->first());
            return redirect('educator_signup');
        }
        $details = new  AddDetailsEducator();
        $details->username = $request->username;
        $details->email = $request->email;
        $details->password  = Hash::make($request->password);

        if ($request->hasFile('pro_img')) {
            $image = $request->file('pro_img');
            $extension = $image->getClientOriginalExtension();
            $new_name = rand() . time() . '.' . $extension;
            $destination = public_path('educator_profile_image');
            $image->move($destination, $new_name);
            $details->pro_img = $new_name;
        }



        $details->save();
        $token = rand() . time();
        $ve = new VerifyEmailEducator();
        $ve->email = $request->email;
        $ve->token = $token;




        //mail
        $dataArray = array('email' => $request->email, 'token' => $token);
        Mail::send('email.registerEmailEducator', $dataArray, function ($m) use ($dataArray) {
            $m->to($dataArray['email'])->subject('Registeration is done');
            $m->from('abc@gmail.com', 'System Admin Praveen Kumar');
        });
        $ve->save();
        session()->flash('succcess', 'Educator details added successfylly');
        return redirect('show_educator_details');
    }






    public function show_educator_details()
    {
        $allData = AddDetailsEducator::all();
        $loginUserData = AddDetailsEducator::where('id', Session::get('id'))->first();
        if (Session::has('email')) {

            return view('show_educator_details')->with('data', $allData)->with('loginUserData', $loginUserData);
        }
        session()->flash('error', 'please login');
        return redirect('/');
    }



    public function edit_educator_signup_details($id)
    {
        $singleDetails = AddDetailsEducator::find($id);
        return view('edit_educator_details')->with('editData', $singleDetails);
    }


    public function delete_educator_signup_details($id)
    {
        $singleDetails = AddDetailsEducator::find($id);
        $singleDetails->delete();
        session()->flash('succcess', 'Educator details Deleted successfylly');
        return redirect('show_educator_details');
    }



    public function update_educator_signup_form(Request $request)
    {

        echo "<pre>";
        print_r($request->all());
        $updateSelectedRow = AddDetailsEducator::where('id', $request->id)->first();
        $updateSelectedRow->username = $request->username;
        $updateSelectedRow->email = $request->email;
        $updateSelectedRow->password = $request->password;
        $updateSelectedRow->pro_img = $request->pro_img;
        $updateSelectedRow->save();
        session()->flash('succcess', 'Educator details Updated successfylly');
        return redirect('show_educator_details');
    }



    public function educator_login_form(Request $request)
    {

        $checkEmail = AddDetailsEducator::where('email', $request->email)->first();
        if (!$checkEmail) {
            session()->flash('error', 'Email is not registered with us');
            return Redirect::back();
        }

        if ($checkEmail->email_verify == 0) {
            session()->flash('error', 'Email is not verified');
            return Redirect::back();
        }
        $checkPassword = Hash::check($request->password, $checkEmail->password);
        if (!$checkPassword) {
            session()->flash('error', 'Invalid Password');
            return Redirect::back();
        }

        Session::put('email', $checkEmail->email);
        Session::put('username', $checkEmail->username);
        Session::put('educator_id', $checkEmail->id);
        Session::put('pro_img', $checkEmail->pro_img);




        session()->flash('succcess', 'login successfully');
        return redirect('educator_dashboard');
    }


    public function email_verify_educator($token)
    {

        $checkToken = VerifyEmailEducator::where('token', $token)->first();
        echo "<pre>";
        print_r($token);
        if (!$checkToken) {
            session()->flash('error', 'Token or Link expire please try again with new link');
            return redirect('/');
        }
        $updateEmailVerifyStatus = AddDetailsEducator::where('email', $checkToken->email)->update(['email_verify' => 1]);
        session()->flash('success', 'Email verified succeesfully . Login using Email Id');
        return redirect('educator_login');
        $checkToken->delete();
    }



    public function forgetPasswordEducator(Request $request)
    {
        $checkEmail = AddDetailsEducator::where('email', $request->email)->exists();
        if (!$checkEmail) {
            return 0;
        }
        $token = rand() . time();
        $data = array(

            'email' => $request->email,
            'token' => $token,
        );
        $insertUsingDB = DB::table('password_reset_educators')->insert($data);
        print_r($insertUsingDB);
        //mail
        $dataArray = array('email' => $request->email, 'token' => $token);
        Mail::send('email.passwordResetEmailEducator', $dataArray, function ($m) use ($dataArray) {
            $m->to($dataArray['email'])->subject('password reset');
            $m->from('abc@gmail.com', 'System Admin Praveen Kumar');
        });
        return 1;
    }


    public function reset_password_educator($t)
    {

        $checkToken = DB::table('password_reset_educators')->where('token', $t)->first();
        if (!$checkToken) {
            session()->flash('error', 'link expire.Please try again with new link');
            return redirect('/');
        }
        return view('reset_password_educator')->with('token', $t);
    }



    public function update_educator_password(Request $request)
    {

        $checkToken = DB::table('password_reset_educators')->where('token', $request->passwordToken)->first();
        if (!$checkToken) {
            session()->flash('error', 'link expire.Please try again with new link');
            return redirect('/');
        }

        $updateEducatorPassword = AddDetailsEducator::where('email', $checkToken->email)->update(['password' => Hash::make($request->new_password)]);
        DB::table('password_reset_educators')->where('token', $request->passwordToken)->delete();
        session()->flash('success', 'Password updated successfully');
        return redirect('/');
    }


    public function educator_dashboard()
    {
        // return view('educator_dashboard');


        $allData = AddDetails::all();
        $loginUserData = AddDetails::where('id', Session::get('id'))->first();
        if (Session::has('email')) {

            return view('educator_dashboard')->with('data', $allData)->with('loginUserData', $loginUserData);
        }
        session()->flash('error', 'please login');
        return redirect('/');
    }

//***********************************educator details ends here */

    public function error()
    {
        return view('404');
    }

    public function about()
    {
        return view('about');
    }

    public function admin_module()
    {




        $allData = AddDetails::all();
        $loginUserData = AddDetails::where('id', Session::get('id'))->first();
        if (Session::has('email')) {

            return view('show_signup_details')->with('data', $allData)->with('loginUserData', $loginUserData);
        }
        session()->flash('error', 'please login');
        return redirect('/');
    }


    public function after_login()
    {





        
        $allData = EducatorAddCoursesModel::all();
        return view('after_login')->with('data',$allData);

        // return view('after_login');
    }

    public function become_a_teacher()
    {
        return view('become_a_teacher');
    }

    public function buy_on_click($id)
    {







        $ids = DB::table('educator_add_courses_models')->where('id',$id)->first();
        return view('buy_on_click')->with('id',$ids);
       










        

    }

    public function comming_soon()
    {
        return view('comming_soon');
    }

    public function contacts()
    {
        return view('contacts');
    }



    public function contact_form()
    {

        session()->flash('success','Your request is in process. Praveen Kunar will contact You soon');
        return view('contacts');
    }
    public function courses()
    {


        
        $allData = EducatorAddCoursesModel::all();
        return view('courses')->with('data',$allData);


        // return view('courses');
    }

    public function editprofile()
    {
        return view('editprofile');
    }

    public function eventcalender()
    {
        return view('eventcalender');
    }

    public function for_buisness()
    {
        return view('for_buisness');
    }


    
    public function full_width_listing()
    {
        return view('full_width_listing');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function game()
    {
        return view('game');
    }

    public function home1()
    {




        $allData = EducatorAddCoursesModel::all();
        return view('home1')->with('data',$allData);


      
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function mycourses(Request $request)
    {
        $rgData = RegisteredCourses::all();
        return view('mycourses')->with('rdata', $rgData);


        // $rgData = RegisteredCourses::all();
        // $Data = AddDetails::distinct('email')->where('email','email');
        // return view('mycourses')->with('rdata', $rgData)->with('data', $Data);


        // $rgData = RegisteredCourses::all();
        // $loginDetails = AddDetails::where('email',Session::get('email'))->first();
        // return view('mycourses')->with('rdata', $rgData)->with('loginDetails',$loginDetails);
        






        // $rgData = RegisteredCourses::all();
        // $loginDetails = AddDetails::where('id', $request->id)->first();
        // return view('mycourses')->with('rdata', $rgData);
// $get_shop_info_query_all = shop_info::distinct('images')->pluck('images','specillaty_service');
//         $get_user_details = register::where('email',Session::get('register_email'))->orWhere('email',Cookie::get('register_email'))->first();
        
//         return view('view_profile')->with('user_data',$get_user_details)->with('shop_navbar_info',$get_shop_info_query_all);

       
        // $Data = RegisteredCourses::where('username',$request->username);
        // $rgData = array('first_detail'=>'courses','second_detail'=>'amount');
        // return view('mycourses')->with('rdata', $rgData,'data',$Data);






       
    }

    public function myprofile()
    {
        return view('myprofile');
    }

    public function our_mission()
    {
        return view('our_mission');
    }

    public function our_team()
    {
        return view('our_team');
    }

    public function process()
    {
        return view('process');
    }

    public function services()
    {
        return view('services');
    }

    public function sign_up()
    {
        return view('sign_up');
    }

    public function single_course()
    {
        return view('single_course');
    }

    public function single_team()
    {
        return view('single_team');
    }

    public function singleevents()
    {
        return view('singleevents');
    }

    public function topography()
    {
        return view('topography');
    }

    public function with_left_sidebar()
    {
        return view('with_left_sidebar');
    }

    public function with_right_sidebar()
    {
        return view('with_right_sidebar');
    }


    public function layout()
    {
        return view('layout');
    }


///**********Afer clicking on a particular course start details */
    public function cart()
    {


        $rData = RegisteredCourses::all();
        return view('cart')->with('rdata', $rData);
    }

public function usercart()
    {


        $rData = RegisteredCourses::all();
        return view('user_cart')->with('rdata', $rData);
    }


    public function delete_rcourse($id)
    {
        $singleDetails = RegisteredCourses::find($id);
        $singleDetails->delete();
        session()->flash('succcess', ' Last Details Deleted Successfully');
        return redirect('mycourses');
    }


    public function rform(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all());
        $validator = Validator::make($request->all(), [
            'rusername' => 'required',
            'remail' => 'required | email:rfc,dns'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }
        $details = new RegisteredCourses();
        $details->username  = $request->rusername;
        $details->email  = $request->remail;
        $details->courses  = $request->rcourses;
        $details->amount  = $request->ramount;
        $details->save();







        $checkEmail = RegisteredCourses::where('email', $request->remail)->first();
        Cookie::queue(Cookie::make('email',$checkEmail->remail,222));
        Cookie::queue(Cookie::make('id',$checkEmail->rid,222));
        Cookie::queue(Cookie::make('username',$checkEmail->rusername,222));
    







        session()->flash('success', 'Added successfully to My Courses. Go to dashboard to make Payment');
        return Redirect::back();
    }

    public function rgform(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all());
        $validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'user_email' => 'required | email:rfc,dns'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }
        $details = new CartDetails();
        
        $details->id = $request->id;
        $details->user_id  = $request->user_id;
     


        $details->user_email  = $request->user_email;
        $details->pro_id  = $request->pro_id;
        $details->pro_name  = $request->pro_name;
        $details->pro_amount  = $request->pro_amount;
        











        $details->save();
        session()->flash('success', 'Added successfully to My Courses. Go to dashboard to make Payment');
        return Redirect::back();
    }

    // **************************** payment module start *********************************************

    public function make_payment(Request $r)
    {
        $create_order = new MyOrder();
        $order_id = uniqid();
$_pro_id_obj = array();
$_pro_id_name= array();
$_pro_id_amount=array();

                $create_order->user_id = Cookie::get('id');
                $create_order->user_email = Cookie::get('email'); 
               
                // print_r($create_order);
                // die();


         
$get_cart_data_of_particular_user  = RegisteredCourses::where('email',Cookie::get('email'))->get();
 foreach($get_cart_data_of_particular_user as $d){
array_push($_pro_id_obj,$d->id);
array_push($_pro_id_name,$d->courses);
array_push($_pro_id_amount,$d->amount);
 }
//  print_r($get_cart_data_of_particular_user);
// die();





 $create_order->pro_id_obj = implode(',',$_pro_id_obj);
 $create_order->pro_name_obj = implode(',',$_pro_id_name);
 $create_order->pro_price_obj = implode(',',$_pro_id_amount);

// $create_order->$pro_id_obj = json_encode($_pro_id_obj);
// $create_order->$pro_name_obj = json_encode($_pro_id_name);
// $create_order->$pro_price_obj = json_encode($_pro_id_amount);

 $create_order->order_id = $order_id;
 $create_order->total_amount = $r->total_amount;
$create_order->save();


//print_r($create_order);

 //die();
        
        $data_for_request = $this->handlePaytmRequest($order_id , $r->total_amount);
	    $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
	    $paramList = $data_for_request['paramList'];
	    $checkSum = $data_for_request['checkSum'];
        return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
    }



public function handlePaytmRequest( $order_id, $amount ) {
		// Load all functions of encdec_paytm.php and config-paytm.php
		$this->getAllEncdecFunc();
		$this->getConfigPaytmSettings();

		$checkSum = "";
		$paramList = array();

		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = 'wSsmEN64869628261975';
		$paramList["ORDER_ID"] = $order_id;
		$paramList["CUST_ID"] = $order_id;
		$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
		$paramList["CHANNEL_ID"] = 'WEB';
		$paramList["TXN_AMOUNT"] = $amount;
		$paramList["WEBSITE"] = 'WEBSTAGING';
		$paramList["CALLBACK_URL"] = url( '/paytm-callback' );
		$paytm_merchant_key = 'gVaH&G!#vttQ5h!8';

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );

		return array(
			'checkSum' => $checkSum,
			'paramList' => $paramList
		);
	}


// paytm fn
function getAllEncdecFunc() {
    function encrypt_e($input, $ky) {
        $key   = html_entity_decode($ky);
        $iv = "@@@@&&&&####$$$$";
        $data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
        return $data;
    }

    function decrypt_e($crypt, $ky) {
        $key   = html_entity_decode($ky);
        $iv = "@@@@&&&&####$$$$";
        $data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
        return $data;
    }

    function pkcs5_pad_e($text, $blocksize) {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

    function pkcs5_unpad_e($text) {
        $pad = ord($text[strlen($text) - 1]);
        if ($pad > strlen($text))
            return false;
        return substr($text, 0, -1 * $pad);
    }

    function generateSalt_e($length) {
        $random = "";
        srand((double) microtime() * 1000000);

        $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
        $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
        $data .= "0FGH45OP89";

        for ($i = 0; $i < $length; $i++) {
            $random .= substr($data, (rand() % (strlen($data))), 1);
        }

        return $random;
    }

    function checkString_e($value) {
        if ($value == 'null')
            $value = '';
        return $value;
    }

    function getChecksumFromArray($arrayList, $key, $sort=1) {
        if ($sort != 0) {
            ksort($arrayList);
        }
        $str = getArray2Str($arrayList);
        $salt = generateSalt_e(4);
        $finalString = $str . "|" . $salt;
        $hash = hash("sha256", $finalString);
        $hashString = $hash . $salt;
        $checksum = encrypt_e($hashString, $key);
        return $checksum;
    }
    function getChecksumFromString($str, $key) {

        $salt = generateSalt_e(4);
        $finalString = $str . "|" . $salt;
        $hash = hash("sha256", $finalString);
        $hashString = $hash . $salt;
        $checksum = encrypt_e($hashString, $key);
        return $checksum;
    }

    function verifychecksum_e($arrayList, $key, $checksumvalue) {
        $arrayList = removeCheckSumParam($arrayList);
        ksort($arrayList);
        $str = getArray2StrForVerify($arrayList);
        $paytm_hash = decrypt_e($checksumvalue, $key);
        $salt = substr($paytm_hash, -4);

        $finalString = $str . "|" . $salt;

        $website_hash = hash("sha256", $finalString);
        $website_hash .= $salt;

        $validFlag = "FALSE";
        if ($website_hash == $paytm_hash) {
            $validFlag = "TRUE";
        } else {
            $validFlag = "FALSE";
        }
        return $validFlag;
    }

    function verifychecksum_eFromStr($str, $key, $checksumvalue) {
        $paytm_hash = decrypt_e($checksumvalue, $key);
        $salt = substr($paytm_hash, -4);

        $finalString = $str . "|" . $salt;

        $website_hash = hash("sha256", $finalString);
        $website_hash .= $salt;

        $validFlag = "FALSE";
        if ($website_hash == $paytm_hash) {
            $validFlag = "TRUE";
        } else {
            $validFlag = "FALSE";
        }
        return $validFlag;
    }

    function getArray2Str($arrayList) {
        $findme   = 'REFUND';
        $findmepipe = '|';
        $paramStr = "";
        $flag = 1;
        foreach ($arrayList as $key => $value) {
            $pos = strpos($value, $findme);
            $pospipe = strpos($value, $findmepipe);
            if ($pos !== false || $pospipe !== false)
            {
                continue;
            }

            if ($flag) {
                $paramStr .= checkString_e($value);
                $flag = 0;
            } else {
                $paramStr .= "|" . checkString_e($value);
            }
        }
        return $paramStr;
    }

    function getArray2StrForVerify($arrayList) {
        $paramStr = "";
        $flag = 1;
        foreach ($arrayList as $key => $value) {
            if ($flag) {
                $paramStr .= checkString_e($value);
                $flag = 0;
            } else {
                $paramStr .= "|" . checkString_e($value);
            }
        }
        return $paramStr;
    }

    function redirect2PG($paramList, $key) {
        $hashString = getchecksumFromArray($paramList, $key);
        $checksum = encrypt_e($hashString, $key);
    }

    function removeCheckSumParam($arrayList) {
        if (isset($arrayList["CHECKSUMHASH"])) {
            unset($arrayList["CHECKSUMHASH"]);
        }
        return $arrayList;
    }

    function getTxnStatus($requestParamList) {
        return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
    }

    function getTxnStatusNew($requestParamList) {
        return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
    }

    function initiateTxnRefund($requestParamList) {
        $CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
        $requestParamList["CHECKSUM"] = $CHECKSUM;
        return callAPI(PAYTM_REFUND_URL, $requestParamList);
    }

    function callAPI($apiURL, $requestParamList) {
        $jsonResponse = "";
        $responseParamList = array();
        $JsonData =json_encode($requestParamList);
        $postData = 'JsonData='.urlencode($JsonData);
        $ch = curl_init($apiURL);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($postData))
        );
        $jsonResponse = curl_exec($ch);
        $responseParamList = json_decode($jsonResponse,true);
        return $responseParamList;
    }

    function callNewAPI($apiURL, $requestParamList) {
        $jsonResponse = "";
        $responseParamList = array();
        $JsonData =json_encode($requestParamList);
        $postData = 'JsonData='.urlencode($JsonData);
        $ch = curl_init($apiURL);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($postData))
        );
        $jsonResponse = curl_exec($ch);
        $responseParamList = json_decode($jsonResponse,true);
        return $responseParamList;
    }
    function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
        if ($sort != 0) {
            ksort($arrayList);
        }
        $str = getRefundArray2Str($arrayList);
        $salt = generateSalt_e(4);
        $finalString = $str . "|" . $salt;
        $hash = hash("sha256", $finalString);
        $hashString = $hash . $salt;
        $checksum = encrypt_e($hashString, $key);
        return $checksum;
    }
    function getRefundArray2Str($arrayList) {
        $findmepipe = '|';
        $paramStr = "";
        $flag = 1;
        foreach ($arrayList as $key => $value) {
            $pospipe = strpos($value, $findmepipe);
            if ($pospipe !== false)
            {
                continue;
            }

            if ($flag) {
                $paramStr .= checkString_e($value);
                $flag = 0;
            } else {
                $paramStr .= "|" . checkString_e($value);
            }
        }
        return $paramStr;
    }
    function callRefundAPI($refundApiURL, $requestParamList) {
        $jsonResponse = "";
        $responseParamList = array();
        $JsonData =json_encode($requestParamList);
        $postData = 'JsonData='.urlencode($JsonData);
        $ch = curl_init($apiURL);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $refundApiURL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $jsonResponse = curl_exec($ch);
        $responseParamList = json_decode($jsonResponse,true);
        return $responseParamList;
    }
}

function getConfigPaytmSettings() {
    define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
    define('PAYTM_MERCHANT_KEY', 'gVaH&G!#vttQ5h!8'); //Change this constant's value with Merchant key downloaded from portal
    define('PAYTM_MERCHANT_MID', 'wSsmEN64869628261975'); //Change this constant's value with MID (Merchant ID) received from Paytm
    define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm

    $PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
    $PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
    if (PAYTM_ENVIRONMENT == 'PROD') {
        $PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
        $PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
    }
    define('PAYTM_REFUND_URL', '');
    define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
    define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
    define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
}
public function paytmCallback( Request $request ) {
//  echo "<pre>";
//  print_r($request->all());
//  die();

    $order_id = $request['ORDERID'];
    // return $request;
    if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
        $transaction_id = $request['TXNID'];
        $order = MyOrder::where( 'order_id', $order_id )->update(['transaction_id'=>$transaction_id,'payment_status'=>1]);
        
        // print_r($order);
        // die();
        return redirect( 'mycourses' );

    } else if( 'TXN_FAILURE' === $request['STATUS'] ){
        return view( 'payment-failed' );
    }
}

// paytm fn end

    //**********************************************************************


















}
