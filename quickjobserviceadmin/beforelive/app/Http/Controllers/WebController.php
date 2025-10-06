<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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

        $applyfor = $request->input('applyfor');
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $message = $request->input('message');
        $timestamp = now();

        $formData = [
            "applyfor"   => $applyfor,
            "name"   => $name,
            "email"    => $email,
            "mobile"  => $mobile,
            "message"    => $message,
            "addeddate"    => $timestamp,
        ];

        DB::table('apply_now')->insert($formData);

        // Send email
        // Mail::send(new ContactFormMail($formData));
        return redirect('qrcode')->with('success', 'Form submitted and email sent successfully!');
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










