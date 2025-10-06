<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\UserApplyNowMail;

class WebController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'mobile'  => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $formData = [
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'mobile'  => $validated['mobile'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'addeddate' => now(),
        ];

        // Save to database
        DB::table('contact')->insert($formData);

        // Send email
        // Mail::send(new ContactFormMail($formData));

        return redirect()->route('thankyou')->with('success', 'Form submitted and email sent successfully!');
    }






    public function applynow(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');

        $order_id = time();
        $job_id = $request->input('job_id');
        $applyfor = $request->input('applyfor');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $father_name = $request->input('father_name');
        $mother_name = $request->input('mother_name');
        $education = $request->input('education');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $timestamp = now();
        $twelemarksheetSelect = $request->input('twelemarksheetSelect');
        $graduationSelect = $request->input('graduationSelect');
        $otherqualificationsSelect = $request->input('otherqualificationsSelect');
        $experience = $request->input('experience');

        $passportimage = null;
        /*passport image*/
        if ($request->hasFile('passportimage') && $request->file('passportimage')->isValid()) {
            $passportimage = uniqid() . '.' . $request->file('passportimage')->getClientOriginalExtension();
            $request->file('passportimage')->move("public/media/uploads/apply_now/", $passportimage);
        }

        $tenmarksheet = null;
        /*passport image*/
        if ($request->hasFile('tenmarksheet') && $request->file('tenmarksheet')->isValid()) {
            $tenmarksheet = uniqid() . '.' . $request->file('tenmarksheet')->getClientOriginalExtension();
            $request->file('tenmarksheet')->move("public/media/uploads/apply_now/", $tenmarksheet);
        }
        $twelemarksheet = null;
        /*passport image*/
        if ($request->hasFile('twelemarksheet') && $request->file('twelemarksheet')->isValid()) {
            $twelemarksheet = uniqid() . '.' . $request->file('twelemarksheet')->getClientOriginalExtension();
            $request->file('twelemarksheet')->move("public/media/uploads/apply_now/", $twelemarksheet);
        }

        $graduationmarksheet = null;
        /*passport image*/
        if ($request->hasFile('graduationmarksheet') && $request->file('graduationmarksheet')->isValid()) {
            $graduationmarksheet = uniqid() . '.' . $request->file('graduationmarksheet')->getClientOriginalExtension();
            $request->file('graduationmarksheet')->move("public/media/uploads/apply_now/", $graduationmarksheet);
        }
        $otherqualifications = null;
        /*passport image*/
        if ($request->hasFile('otherqualifications') && $request->file('otherqualifications')->isValid()) {
            $otherqualifications = uniqid() . '.' . $request->file('otherqualifications')->getClientOriginalExtension();
            $request->file('otherqualifications')->move("public/media/uploads/apply_now/", $otherqualifications);
        }

        $formData = [
            "order_id"   => $order_id,
            "job_id"   => $job_id,
            "applyfor"   => $applyfor,
            "name"   => $name,
            "gender"   => $gender,
            "dob"   => $dob,
            "father_name"   => $father_name,
            "mother_name"   => $mother_name,
            "education"   => $education,
            "email"    => $email,
            "mobile"  => $mobile,
            "addeddate"    => $timestamp,
            "passportimage"    => $passportimage,
            "tenmarksheet"    => $tenmarksheet,
            "twelemarksheet"    => $twelemarksheet,
            "graduationmarksheet"    => $graduationmarksheet,
            "otherqualifications"    => $otherqualifications,
            "twelemarksheetSelect"    => $twelemarksheetSelect,
            "graduationSelect"    => $graduationSelect,
            "otherqualificationsSelect"    => $otherqualificationsSelect,
            "experience"    => $experience,
        ];

        DB::table('apply_now')->insert($formData);

        return redirect('qrcode?order_id='.$order_id)->with('success', 'Form submitted and email sent successfully!');
    }




    public function updateTranstion(Request $request)
    {
        $order_id = $request->input('order_id');
        $transaction_id = $request->input('transaction_id');
       
        $UpdateData = [
            "transaction_id" => $transaction_id,
        ];

        DB::table('apply_now')->where('order_id',$order_id)->update($UpdateData);

        $gettabledata = DB::table('apply_now')->where('order_id',$order_id)->first();

        $formData = [
            'order_id'=> $gettabledata->order_id,
            'name'    => $gettabledata->name,
            'applyfor'    => $gettabledata->applyfor,
            'name'    => $gettabledata->name,
            'email'    => $gettabledata->email,
            'mobile'    => $gettabledata->mobile,
            'transaction_id' => $gettabledata->transaction_id,

        ];


        Mail::to($gettabledata->email)->send(new UserApplyNowMail($formData));

        return redirect('purchase-thank?order_id='.$order_id)->with('success', 'Form submitted and email sent successfully!');
    }





























    public function searchjob(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');

        $name = $request->input('name');
        $state_id = $request->input('state_id');
        $cat_id = $request->input('cat_id');

        return redirect('job?name='.$name.'&state_id='.$state_id."&cat_id=".$cat_id)->with('success', 'Form submitted and email sent successfully!');
    }



     /*pdf Purchase*/

  public function purchasePDF(Request $request)
    {
        $order_id = uniqid();

        $pdf_id     = $request->input('pdf_id');
        $pdf_name   = $request->input('pdf_name');
        $first_name = $request->input('first_name');
        $last_name  = $request->input('last_name');
        $email      = $request->input('email');
        $mobile     = $request->input('mobile');
        $amount     = $request->input('amount');
        $status     = 1;
        $timestamp = now();

        $checkpdf = DB::table('pdfs')->where('id', $pdf_id)->first();

        if ($checkpdf) {

            $insertdata = [
                "order_id"   => $order_id,
                "pdf_id"   => $pdf_id,
                "pdf_name"   => $pdf_name,
                "first_name" => $first_name,
                "last_name"  => $last_name,
                "email"      => $email,
                "mobile"     => $mobile,
                "amount"     => $amount,
                "status"     => $status,
                "addeddate"  => $timestamp,
            ];

            // ✅ Correct way – use "insert()" instead of insertdata()
            DB::table('pdf_purchase')->insert($insertdata);

            $url = url('qrcode?order_id=' . $order_id);

            return response()->json([
                'status'  => 200,
                'message' => 'Successfully.',
                'data'    => $insertdata,
                'url'     => $url,
            ]);
        }

        // ✅ Handle case when PDF not found
        return response()->json([
            'status'  => 404,
            'message' => 'PDF not found.',
        ]);
    }








































    public function loadPage($slug = '')
    {
        if (empty($slug)) {
            $slug = 'index';
        }
        // Find slug in DB
        $slugData = DB::table('slugs')->where('slug', $slug)->first();

        if ($slugData) {
            $page = $slugData->page_name;
            $table = $slugData->table_name;
            $id = $slugData->p_id;
        } else {
            // Fallback to default Laravel views
            $page = $slug;
            $table = null;
            $id = null;
        }
        // echo $slug;
        // die;

        // If the view file exists
        if (view()->exists($page)) {
            $data = [
                'sitesetting' => DB::table('site_setting')->find(1),
                'meta_html'   => custom_meta_tags($slug),
            ];

            if ($table && $id) {
                $data['EDITDATA'] = DB::table($table)->where('id', $id)->first();
            }

            return view($page, $data);
        } else {
           // Redirect to 404 page
        abort(404);
        }
    }




















}










