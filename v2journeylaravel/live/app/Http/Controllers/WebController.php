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
        // print_r($formData);
        // die;
        DB::table('contact')->insert($formData);

        // Send email
        // Mail::send(new ContactFormMail($formData));

        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }







    public function packagedata(Request $request)
    {
        // Optional: Basic manual validation (if you still want to check)
        // You can skip this block if not needed
        if (!$request->has(['selected_name', 'selected_price', 'selected_duration', 'name', 'mobile', 'message'])) {
            return redirect()->back()->with('error', 'Missing required fields.');
        }

        // Collect form data directly
        $formData = [
            'selected_name'      => $request->input('selected_name'),
            'selected_price'     => $request->input('selected_price'),
            'selected_duration'  => $request->input('selected_duration'),
            'name'               => $request->input('name'),
            'email'              => $request->input('email'),
            'mobile'             => $request->input('mobile'),
            'message'            => $request->input('message'),
            'addeddate'          => now(),
        ];

        DB::table('packagedirectenquiry')->insert($formData);

        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }































    /*destination list*/

    public function showDestination($slug)
    {
        $destination = DB::table('destination')->where('slug', $slug)->first();
        if (!$destination) {
            abort(404);
        }
        // dd($destination->id);
        return view('destination-list', compact('destination'));
    }


    /*package list*/

    public function showpackagedetails($slug)
    {
        $package = DB::table('package')->where('slug', $slug)->first();
        if (!$package) {
            abort(404);
        }
        // dd($package->id);
        return view('package-details', compact('package'));
    }





    public function packageenquiry(Request $request)
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

       
        DB::table('packageenquiry')->insert($formData);

        // Send email
        // Mail::send(new ContactFormMail($formData));

        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }



    public function blogdetails($slug)
    {
        $blogdata = DB::table('blog')->where('slug', $slug)->first();
        if (!$blogdata) {
            abort(404);
        }
        // dd($blogdata->id);
        return view('blog-details', compact('blogdata'));
    }













}










