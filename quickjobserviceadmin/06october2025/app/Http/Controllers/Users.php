<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class Users extends Controller
{
    

/*user registration*/
public function userRegistration(Request $request)
{
    $name      = $request->input('name');
    $email     = $request->input('email');
    $mobile    = $request->input('mobile');
    $password  = $request->input('password');
    $status    = 1;
    $timestamp = now();

    $checkemail = DB::table('users')->where('email', $email)->first();    
    if ($checkemail) {
        return response()->json([
            'status'  => 400,
            'message' => 'Email already exists.',
        ]);
    }

    $insertdata = [
        "name"       => $name,
        "email"      => $email,
        "mobile"     => $mobile,
        "password"   => $password,
        "status"     => $status,
        "created_at" => $timestamp,
    ];

    DB::table('users')->insert($insertdata);

    $url = url('login');

    return response()->json([
        'status'  => 200,
        'message' => 'Registration Successful.',
        'data'    => $insertdata,
        'url'     => $url,
    ]);
}

/*user Login*/

public function userLogin(Request $request)
{
    $email    = $request->input('email');
    $password = $request->input('password');

    // Check email with active status
    $checkemail = DB::table('users')
        ->where('email', $email)
        ->where('status', 1)
        ->first();

    if (empty($checkemail)) {
        return response()->json([
            'status'  => 400,
            'message' => 'Email Not Found or Inactive.',
        ]);
    }

    // Check password for the same email
    $checkpassword = DB::table('users')
        ->where('email', $email)
        ->where('password', $password)
        ->first();

    if (empty($checkpassword)) 
    {
        return response()->json([
            'status'  => 400,
            'message' => 'Wrong Password.',
        ]);
    }

    // If both match
    session([
        'user_id'    => $checkpassword->id,
        'user_name'  => $checkpassword->name,
        'user_email' => $checkpassword->email,
    ]);

    $url = url('candidate/candidate-dashboard');

    return response()->json([
        'status'  => 200,
        'message' => 'Login Successful.',
        'url'     => $url,
    ]);
}


public function userlogout()
{
    session()->forget('user_id');
    return redirect('login');
}




/*user profile update*/

public function userProfileUpdate(Request $request)
{
    $user_id  = $request->input('user_id');
    $name      = $request->input('name');
    $email     = $request->input('email');
    $mobile    = $request->input('mobile');
    $website  = $request->input('website');
    $age  = $request->input('age');
    $languages  = $request->input('languages');
    $description  = $request->input('description');


    $checkemail = DB::table('users')->where('email', $email)->where('id', '!=', $user_id)->first();    
    if ($checkemail) {
        return response()->json([
            'status'  => 400,
            'message' => 'Email already exists.',
        ]);
    }

    $updatedata = [
        "name"       => $name,
        "email"      => $email,
        "mobile"     => $mobile,
        "website"   => $website,
        "age"       => $age,
        "languages" => $languages,
        "description" => $description,
    ];

    DB::table('users')->where('id',$user_id)->update($updatedata);

    return response()->json([
        'status'  => 200,
        'message' => 'Update Successful.',
        'data'    => $updatedata,
    ]);
}



/*user Social update*/

public function usersocialUpdate(Request $request)
{
    $user_id  = $request->input('user_id');
    $facebook      = $request->input('facebook');
    $twitter     = $request->input('twitter');
    $linkedin    = $request->input('linkedin');
    $instagram  = $request->input('instagram');

    $updatedata = [
        "facebook"       => $facebook,
        "twitter"      => $twitter,
        "linkedin"     => $linkedin,
        "instagram"   => $instagram,
    ];

    DB::table('users')->where('id',$user_id)->update($updatedata);

    return response()->json([
        'status'  => 200,
        'message' => 'Update Successful.',
        'data'    => $updatedata,
    ]);
}

/*user image*/
public function userLogoUpload(Request $request)
{
    $user_id = $request->input('user_id');

    if (!$request->hasFile('logo')) {
        return response()->json([
            'status' => 400,
            'message' => 'No file selected.',
        ]);
    }

    $file = $request->file('logo');
    $filename = time().'_'.$file->getClientOriginalName();

    // ✅ Physical server path, not URL
    $destinationPath = public_path('media/uploads/users');

    // ✅ Create folder if it doesn't exist
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    // ✅ Move file
    $file->move($destinationPath, $filename);

    // ✅ Update user table
    DB::table('users')->where('id', $user_id)->update([
        'profile_image' => $filename
    ]);

    // ✅ Return with the correct file URL
    return response()->json([
        'status'  => 200,
        'message' => 'Image uploaded successfully.',
        'file'    => url('public/media/uploads/users/'.$filename)
    ]);
}




















































}










