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
        date_default_timezone_set('Asia/Kolkata');
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

        return redirect('thankyou')->with('success', 'Form submitted and email sent successfully!');
    }




    /*packaghe enqwuirty*/
     public function package_data(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');

        $when_date = $request->input("when_date");
        $name = $request->input("name");
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $location = $request->input('location');
        $message = $request->input('message');
        $package_id = $request->input('package_id');
        $package_price = $request->input('package_price');
        
        $formData = [
            'when_date'    => $when_date,
            'name'    => $name,
            'email'    => $email,
            'mobile'    => $mobile,
            'location'    => $location,
            'message'    => $message,
            'package_id'    => $package_id,
            'package_price'    => $package_price,
            'addeddate' => now(),
        ];

        // Save to database
        DB::table('package_enquiry')->insert($formData);

        // Send email
        // Mail::send(new ContactFormMail($formData));

        
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

        // If the view file exists
        if (view()->exists($page)) {
            $data = [
                'sitesetting' => DB::table('site_setting')->find(1),
                'meta_html'   => custom_meta_tags($slug),
            ];

            if ($table && $id) {
                $data['EDITDATA'] = DB::table($table)->where('id', $id)->get();
            }

            return view($page, $data);
        } else {
           // Redirect to 404 page
        abort(404);
        }
    }













}










