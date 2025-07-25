<?php
namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Package extends Controller
{
    protected $arr_values = array(
                            'page_title'=>'Package',
                            'table_name'=>'package',
                            'upload_path'=>'media/uploads/package/',
                            'table_data_page_url'=>'admin/package/table',
                            'table_data_pagination_limit'=>15,
                            'load_list_path'=>'admin/package/list',
                            /*add page*/
                            'add_page_view'=>'admin/package/add',
                            'add_page_link'=>'package/add',
                            'add_in_database_url'=>'admin_con/package/add_data',
                            /*edit page*/
                            'edit_page_url'=>'admin/package/edit',
                            'update_in_database_url'=>'admin_con/package/update_data',
                            'status_url'=>'admin/package/update_status',
                            /*delete*/
                            'delete_single_url'=>'admin_con/package/delete_data',
                            'multiple_delete'=>'admin_con/package/multiple_delete_data',
                            'check_image'=>true,    

                           ); 




    // Display all package
    public function listing()
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $table_data_page_url = $this->arr_values['table_data_page_url'];
        $table_data_pagination_limit = $this->arr_values['table_data_pagination_limit'];
        $add_page_link = $this->arr_values['add_page_link'];
        $edit_page_url = $this->arr_values['edit_page_url'];
        $status_url = $this->arr_values['status_url'];
        $delete_single_url = $this->arr_values['delete_single_url'];
        $multiple_delete = $this->arr_values['multiple_delete'];

        $ALLDATA = DB::table($this->arr_values['table_name'])->orderBy('id', 'desc')->get();
        return view($this->arr_values['load_list_path'], compact('ALLDATA','page_title', 'upload_path','table_data_page_url','table_data_pagination_limit','add_page_link',"edit_page_url","status_url","delete_single_url","multiple_delete"));
    }
    /*get table from ajax*/
    public function getTableData(Request $request)
    {
        $search = $request->input('search', '');
        $limit = $this->arr_values['table_data_pagination_limit'];
        $offset = $request->input('offset', 0);

        $upload_path = $this->arr_values['upload_path'];
        $edit_page_url = $this->arr_values['edit_page_url'];

        $query = DB::table($this->arr_values['table_name']);
        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('id', 'LIKE', "%{$search}%");
        }

        $totalRows = $query->count();
        $ALLDATA = $query->offset($offset)->limit($limit)->orderBy('id', 'desc')->get();
        $totalPages = ceil($totalRows / $limit);
        $currentPage = ($offset / $limit) + 1;
        $paginationLinks = '';
        for ($i = 0; $i < $totalPages; $i++) 
        {
            $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . ($i == $currentPage - 1 ? 'active-page' : '') . '" style="margin: 5px 3px; border-radius: 25%; font-weight: bold;" data-offset="' . ($i * $limit) . '">' . ($i + 1) . '</a>';
        }

        $view = view($this->arr_values['table_data_page_url'], compact('ALLDATA', 'totalRows', 'totalPages','offset','upload_path','edit_page_url'))->render();

        return response()->json([
            'html' => $view,
            'pagination_links' => $paginationLinks,
            'limit' => $limit,
        ]);
    }


    /*--------------------add-----------------------*/
    public function add_page_url(Request $request)
    {
        checkAdminSession();
        $count = $request->input('count', 0);
        $index = $count;
        $page_title = $this->arr_values['page_title'];
        $add_in_database_url = $this->arr_values['add_in_database_url'];
        return view($this->arr_values['add_page_view'], compact('page_title','add_in_database_url','index'));
    }
    // add new data
    public function datastore_in_database(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');
        $uploadPath = public_path($this->arr_values['upload_path']);
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($uploadPath, $imageName);
        }


        /*multiple image uploads*/
        if ($request->hasFile('multiple_image_json')) 
        {
            $allImages = [];
            foreach ($request->file('multiple_image_json') as $file) 
            {
                if ($file->isValid()) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move($uploadPath, $imageName);
                    $allImages[] = $imageName;
                }
            }
            $multiple_image_json = json_encode($allImages);
        } 
        else 
        {
            $multiple_image_json = null;
        }



        $destination_id = $request->input('destination_id');
        $name = $request->input('name');
        $duration = $request->input('duration');
        $price = $request->input('price');
        $cutprice = $request->input('cutprice');
        $price = $request->input('price');
        $overview = $request->input('overview');
        $costdetails = $request->input('costdetails');
        $status = $request->input('status');
        $map = $request->input('map');
        $addeddate = now();

        $getItinerary = [];
        $itinerary_title = $request->input('itinerary_title', []);
        $itinerary_content = $request->input('itinerary_content', []);
        if(!empty($itinerary_title))
        {
            foreach($itinerary_title as $key => $getitnery)
            {
                $getItinerary[] = [
                    "itinerary_title"=>$itinerary_title[$key],
                    "itinerary_content"=>$itinerary_content[$key],
                ];
            }
        }
        if(!empty($getItinerary))
        {
            $Itinerary = json_encode($getItinerary);
        }
        else
        {
            $Itinerary = null;

        }

        $getfaq = [];
        $faq_question = $request->input('faq_question', []);
        $faq_answere = $request->input('faq_answere', []);
        if(!empty($faq_question))
        {
            foreach($faq_question as $key => $getitnery)
            {
                $getfaq[] = [
                    "faq_question"=>$faq_question[$key],
                    "faq_answere"=>$faq_answere[$key],
                ];
            }
        }
        if(!empty($getfaq))
        {
            $faq = json_encode($getfaq);
        }
        else
        {
            $faq = null;

        }

        $insertdata = [
            "Itinerary"=>$Itinerary,
            "faq"=>$faq,
            "destination_id"=>$destination_id,
            "image"=>$imageName,
            "multiple_image_json"=>$multiple_image_json,
            "name"=>$name,
            "slug"=>slug($name),
            "duration"=>$duration,
            "price"=>$price,
            "cutprice"=>$cutprice,
            "overview"=>$overview,
            "costdetails"=>$costdetails,
            "map"=>$map,
            "status"=>$status,
            "addeddate"=>$addeddate
        ];

        DB::table($this->arr_values['table_name'])->insert($insertdata);
        return redirect()->route($this->arr_values['load_list_path'])->with('message', 'Added Successfully.');
    }


    /*--------------------update/edit page----------------------------*/
    public function edit_page_url(Request $request,$id)
    {
        checkAdminSession();
        $count = $request->input('count', 0);
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $update_in_database_url = $this->arr_values['update_in_database_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if (!$EDITDATA) {
            return redirect()->route($this->arr_values['load_list_path'])->with('message', 'not found.');
        }
        return view($this->arr_values['edit_page_url'], compact('EDITDATA','page_title','upload_path','update_in_database_url','count'));
    }

    /*update*/
    public function dataupdate_in_database(Request $request, $id)
    {
        date_default_timezone_set('Asia/Kolkata');

        $uploadPath = public_path($this->arr_values['upload_path']);
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }
        $imageName = $request->input('oldimage'); 
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($uploadPath, $imageName);

            // Delete old image
            $oldImagePath = $uploadPath . $request->input('oldimage');
            if (!empty($request->input('oldimage')) && file_exists($oldImagePath) && is_file($oldImagePath)) 
            {
                unlink($oldImagePath);
            } else {
                logger('Old image not found or is invalid: ' . $request->input('oldimage'));
            }
        }


        /*multiple image uploads*/
        if ($request->hasFile('multiple_image_json')) 
        {
            $allImages = [];
            foreach ($request->file('multiple_image_json') as $file) 
            {
                if ($file->isValid()) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move($uploadPath, $imageName);
                    $allImages[] = $imageName;
                }
            }
            if ($request->has('oldmultiple_image_json')) {
                $allImages = array_merge($request->oldmultiple_image_json, $allImages);
            }
            $multiple_image_json = json_encode($allImages);

        } 
        else 
        {
            $multiple_image_json = $request->oldmultiple_image_json ? json_encode($request->oldmultiple_image_json) : null;
        }

        $destination_id = $request->input('destination_id');
        $name = $request->input('name');
        $duration = $request->input('duration');
        $price = $request->input('price');
        $cutprice = $request->input('cutprice');
        $price = $request->input('price');
        $overview = $request->input('overview');
        $costdetails = $request->input('costdetails');
        $map = $request->input('map');
        

        $getItinerary = [];
        $itinerary_title = $request->input('itinerary_title', []);
        $itinerary_content = $request->input('itinerary_content', []);
        if(!empty($itinerary_title))
        {
            foreach($itinerary_title as $key => $getitnery)
            {
                $getItinerary[] = [
                    "itinerary_title"=>$itinerary_title[$key],
                    "itinerary_content"=>$itinerary_content[$key],
                ];
            }
        }
        if(!empty($getItinerary))
        {
            $Itinerary = json_encode($getItinerary);
        }
        else
        {
            $Itinerary = null;

        }

        $getfaq = [];
        $faq_question = $request->input('faq_question', []);
        $faq_answere = $request->input('faq_answere', []);
        if(!empty($faq_question))
        {
            foreach($faq_question as $key => $getitnery)
            {
                $getfaq[] = [
                    "faq_question"=>$faq_question[$key],
                    "faq_answere"=>$faq_answere[$key],
                ];
            }
        }
        if(!empty($getfaq))
        {
            $faq = json_encode($getfaq);
        }
        else
        {
            $faq = null;

        }


        $status = $request->input('status');
        $modifieddate = now();

        $upadatedata = [
            "Itinerary"=>$Itinerary,
            "faq"=>$faq,
            "destination_id"=>$destination_id,
            "image"=>$imageName,
            "multiple_image_json"=>$multiple_image_json,
            "name"=>$name,
            "slug"=>slug($name),
            "duration"=>$duration,
            "price"=>$price,
            "cutprice"=>$cutprice,
            "overview"=>$overview,
            "costdetails"=>$costdetails,
            "map"=>$map,
            "status"=>$status,
            "modifieddate"=>$modifieddate
        ];
        DB::table($this->arr_values['table_name'])->where('id', $id)->update($upadatedata);
        return redirect()->route($this->arr_values['load_list_path'])->with('message', 'Updated Successfully.');
    }

    /*----------------------------status update----------------------------*/
    public function updateStatus(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        $request->validate([
            'id' => 'required|integer|exists:' . $this->arr_values['table_name'] . ',id',
            'status' => 'required|boolean'
        ]);

        DB::table($this->arr_values['table_name'])
            ->where('id', $id)
            ->update(['status' => $status]);
        $statusHtml = status($status);
        return response()->json([
            'success' => true,
            'data' => ['status' => $statusHtml]
        ]);
    }


    
    /*-------------------------------single delete----------------------------*/
    public function delete_data($id)
    {
        $check_image = $this->arr_values['check_image'];
        $category = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if($category) 
        {
            if ($check_image == true) 
            {
                if ($category->image && file_exists(public_path($this->arr_values['upload_path'] . $category->image))) {
                    unlink(public_path($this->arr_values['upload_path'] . $category->image));
                }
            }
            DB::table($this->arr_values['table_name'])->where('id', $id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Deleted Successfully.'
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Not found.'
        ]);
    }

    /*delete multiple*/
    public function multiple_delete_data(Request $request)
    {
        $ids = $request->input('id');
        $check_image = $this->arr_values['check_image'];

        if (!empty($ids)) {
            if ($check_image == true) {
                $categories = DB::table($this->arr_values['table_name'])->whereIn('id', $ids)->get();
                foreach ($categories as $category) {
                    if ($category->image && file_exists(public_path($this->arr_values['upload_path'] . $category->image))) {
                        unlink(public_path($this->arr_values['upload_path'] . $category->image));
                    }
                }
            }
            DB::table($this->arr_values['table_name'])->whereIn('id', $ids)->delete();
            session()->flash('message', 'Records have been successfully deleted.');
            return response()->json(['status' => 'success', 'message' => 'Records deleted successfully']);
        }
        return response()->json(['status' => 'error', 'message' => 'No records selected']);
    }




    public function load_more_singleitinerary(Request $request) 
    {
        $count = $request->count;
        $index = $count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        $add_in_database_url = $this->arr_values['add_in_database_url'];
        return view('admin/package/itinerary', compact('page_title', 'add_in_database_url', 'index','upload_path'));
    }
    



    public function load_more_singlefaq(Request $request) 
    {
        $count = $request->count;
        $index = $count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        $add_in_database_url = $this->arr_values['add_in_database_url'];
        return view('admin/package/faq', compact('page_title', 'add_in_database_url', 'index','upload_path'));
    }
    

































































    

















}
