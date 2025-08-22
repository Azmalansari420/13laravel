<?php

namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Content extends Controller
{

  

    protected $arr_values = array(
                            'page_title'=>'Content',
                            'table_name'=>'content',
                            'upload_path'=>'media/uploads/content/',
                            'load_path'=>'admin/content/edit',
                            'redirect_route_path'=>'admin/content/edit',
                            'update_page_url'=>'admin/content/update',
                            'update_page_url'=>'admin/content/update',
                           );


    public function loadForm($id)
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view('admin/content/home-about', compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }    

    /*update data*/
    public function submitForm(Request $request, $id)
    {        

        $image = $request->input('oldimage'); 
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($this->arr_values['upload_path']), $image);

            // Delete old image
            $oldImagePath = public_path($this->arr_values['upload_path'] . $request->input('oldimage'));
        }


        $side_image = $request->input('oldside_image'); 
        if ($request->hasFile('side_image') && $request->file('side_image')->isValid()) {
            $side_image = uniqid() . '.' . $request->file('side_image')->getClientOriginalExtension();
            $request->file('side_image')->move(public_path($this->arr_values['upload_path']), $side_image);

            // Delete old side_image
            $oldside_imagePath = public_path($this->arr_values['upload_path'] . $request->input('oldside_image'));
        }

        $title3_image = $request->input('oldtitle3_image'); 
        if ($request->hasFile('title3_image') && $request->file('title3_image')->isValid()) {
            $title3_image = uniqid() . '.' . $request->file('title3_image')->getClientOriginalExtension();
            $request->file('title3_image')->move(public_path($this->arr_values['upload_path']), $title3_image);

            // Delete old title3_image
            $oldtitle3_imagePath = public_path($this->arr_values['upload_path'] . $request->input('oldtitle3_image'));
        }

        $title2_image = $request->input('oldtitle2_image'); 
        if ($request->hasFile('title2_image') && $request->file('title2_image')->isValid()) {
            $title2_image = uniqid() . '.' . $request->file('title2_image')->getClientOriginalExtension();
            $request->file('title2_image')->move(public_path($this->arr_values['upload_path']), $title2_image);

            // Delete old title2_image
            $oldtitle2_imagePath = public_path($this->arr_values['upload_path'] . $request->input('oldtitle2_image'));
        }
        $title1_image = $request->input('oldtitle1_image'); 
        if ($request->hasFile('title1_image') && $request->file('title1_image')->isValid()) {
            $title1_image = uniqid() . '.' . $request->file('title1_image')->getClientOriginalExtension();
            $request->file('title1_image')->move(public_path($this->arr_values['upload_path']), $title1_image);

            // Delete old title1_image
            $oldtitle1_imagePath = public_path($this->arr_values['upload_path'] . $request->input('oldtitle1_image'));
        }

        $data = [
            'content' => $request->input('content'),
            'title1' => $request->input('title1'),
            'title1_content' => $request->input('title1_content'),
            'title2' => $request->input('title2'),
            'title2_content' => $request->input('title2_content'),
            'title3' => $request->input('title3'),
            'title3_content' => $request->input('title3_content'),
            'image' => $image, 
            'side_image' => $side_image, 
            'title3_image' => $title3_image, 
            'title2_image' => $title2_image, 
            'title2_image' => $title2_image, 
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route('admin/content/edit', ['id' => $id])->with('message', 'Setting Updated successfully!');

        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }






    /*About Us*/
     public function about_loadForm($id)
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view('admin/content/about', compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }    

    /*update data*/
    public function aboutsubmitForm(Request $request, $id)
    {        

        

        $data = [
            'content' => $request->input('content'),
            'mission' => $request->input('mission'),
            'vision' => $request->input('vision'),
            'value' => $request->input('value'),
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route('admin/content/about', ['id' => $id])->with('message', 'Setting Updated successfully!');

        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }



    /*privacy Policy*/

    /*About Us*/
     public function privacy_loadForm($id)
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view('admin/content/privacy', compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }    

    /*update data*/
    public function privacysubmitForm(Request $request, $id)
    {        

        

        $data = [
            'content' => $request->input('content'),
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route('admin/content/privacy', ['id' => $id])->with('message', 'Setting Updated successfully!');

        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }



    /*About Us*/
     public function explore_loadForm($id)
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view('admin/content/explore', compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }    

    /*update data*/
    public function exploresubmitForm(Request $request, $id)
    {        

        $image = $request->input('oldimage'); 
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($this->arr_values['upload_path']), $image);

            // Delete old image
            $oldImagePath = public_path($this->arr_values['upload_path'] . $request->input('oldimage'));
        }


        $data = [
            'sub_title' => $request->input('sub_title'),
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'bottom_title' => $request->input('bottom_title'),
            'image' => $image,
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route('admin/content/explore', ['id' => $id])->with('message', 'Setting Updated successfully!');

        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }



    /*About Us*/
     public function banner_loadForm($id)
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view('admin/content/banner', compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }    

    /*update data*/
    public function bannersubmitForm(Request $request, $id)
    {        

        $image = $request->input('oldimage'); 
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($this->arr_values['upload_path']), $image);

            // Delete old image
            $oldImagePath = public_path($this->arr_values['upload_path'] . $request->input('oldimage'));
        }


        $data = [
            'image' => $image,
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route('admin/content/banner', ['id' => $id])->with('message', 'Setting Updated successfully!');

        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }










}
