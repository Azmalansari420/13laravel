<?php
namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Sight_seeing extends Controller
{
    protected $arr_values = array(
                            'page_title'=>'Sight Seeing',
                            'table_name'=>'sight_seeing',
                            'upload_path'=>'media/uploads/sight_seeing/',
                            'table_data_page_url'=>'admin/sight_seeing/table',
                            'table_data_pagination_limit'=>10,
                            'load_list_path'=>'admin/sight_seeing/list',
                            /*load form path and update url*/
                            'add_form_path'=>'admin/sight_seeing/form',
                            'addupdate_form'=>'admin_con/sight_seeing/storeOrUpdate',
                            /*add page*/
                            'add_page_link'=>'sight_seeing/add',
                            /*edit page*/
                            'edit_page_url'=>'admin/sight_seeing/edit',
                            'view_page_url'=>'admin/sight_seeing/view',
                            /*status*/
                            'status_url'=>'admin/sight_seeing/update_status',
                            /*delete*/
                            'delete_single_url'=>'admin_con/sight_seeing/delete_data',
                            'multiple_delete'=>'admin_con/sight_seeing/multiple_delete_data',
                            'check_image'=>true,
                            'controller_name'=>'sight_seeing',
                            'page_name'=>'sight-seeing-details',    

                           ); 




    // Display all 
    public function listing()
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $table_data_page_url = $this->arr_values['table_data_page_url'];
        $table_data_pagination_limit = $this->arr_values['table_data_pagination_limit'];
        $add_page_link = $this->arr_values['add_page_link'];
        $edit_page_url = $this->arr_values['edit_page_url'];
        $view_page_url = $this->arr_values['view_page_url'];
        $status_url = $this->arr_values['status_url'];
        $delete_single_url = $this->arr_values['delete_single_url'];
        $multiple_delete = $this->arr_values['multiple_delete'];

        $ALLDATA = DB::table($this->arr_values['table_name'])->orderBy('id', 'desc')->get();
        return view($this->arr_values['load_list_path'], compact('ALLDATA','page_title', 'upload_path','table_data_page_url','table_data_pagination_limit','add_page_link',"edit_page_url","status_url","delete_single_url","multiple_delete","view_page_url"));
    }
    /*get table from ajax*/
   public function getTableData(Request $request)
    {
        $search = $request->input('search', '');
        $limit = $this->arr_values['table_data_pagination_limit'];
        $offset = $request->input('offset', 0);
        $upload_path = $this->arr_values['upload_path'];
        $edit_page_url = $this->arr_values['edit_page_url'];
        $view_page_url = $this->arr_values['view_page_url'];
        $query = DB::table($this->arr_values['table_name']);
        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('id', 'LIKE', "%{$search}%");
        }
        $totalRows = $query->count();
        $ALLDATA = $query->offset($offset)->limit($limit)->orderBy('id', 'desc')->get();
        $totalPages = ceil($totalRows / $limit);
        $currentPage = ($offset / $limit) + 1;
        // Generate ellipsis-style pagination
        $paginationLinks = '';
        $paginationLinks .= '<a href="#" class="pagination-link btn btn-light btn-sm" data-offset="' . max(0, $offset - $limit) . '">&lt;</a>';
        if ($totalPages <= 5) {
            for ($i = 1; $i <= $totalPages; $i++) {
                $active = $i == $currentPage ? 'active-page' : '';
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . $active . '" style="margin: 5px 3px; border-radius: 25%;" data-offset="' . (($i - 1) * $limit) . '">' . $i . '</a>';
            }
        } else 
        {
            if ($currentPage > 2) {
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm" data-offset="0">1</a>';
                if ($currentPage > 3) {
                    $paginationLinks .= '<span class="btn btn-light btn-sm disabled">...</span>';
                }
            }

            $start = max(1, $currentPage - 1);
            $end = min($totalPages, $currentPage + 1);

            for ($i = $start; $i <= $end; $i++) {
                $active = $i == $currentPage ? 'active-page' : '';
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . $active . '" data-offset="' . (($i - 1) * $limit) . '">' . $i . '</a>';
            }

            if ($currentPage < $totalPages - 1) {
                if ($currentPage < $totalPages - 2) {
                    $paginationLinks .= '<span class="btn btn-light btn-sm disabled">...</span>';
                }
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm" data-offset="' . (($totalPages - 1) * $limit) . '">' . $totalPages . '</a>';
            }
        }

        $paginationLinks .= '<a href="#" class="pagination-link btn btn-light btn-sm" data-offset="' . min($offset + $limit, ($totalPages - 1) * $limit) . '">&gt;</a>';

        $view = view($this->arr_values['table_data_page_url'], compact('ALLDATA', 'totalRows', 'totalPages','offset','upload_path','edit_page_url','view_page_url'))->render();

        return response()->json([
            'html' => $view,
            'pagination_links' => $paginationLinks,
            'limit' => $limit,
        ]);
    }



    /*--------------------add-----------------------*/
    public function add_page_url()
    {
        checkAdminSession();
        $page_title = 'Add '.$this->arr_values['page_title'];
        $addupdate_form = $this->arr_values['addupdate_form'];
        return view($this->arr_values['add_form_path'], compact('page_title','addupdate_form'));
    }


    /*--------------------update/edit page----------------------------*/
    public function edit_page_url($id)
    {
        checkAdminSession();
        $page_title = 'Update '.$this->arr_values['page_title'];
        $addupdate_form = $this->arr_values['addupdate_form'];
        $upload_path = $this->arr_values['upload_path'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if (!$EDITDATA) {
            return redirect()->route($this->arr_values['load_list_path'])->with('message', 'not found.');
        }
        return view($this->arr_values['add_form_path'], compact('EDITDATA','page_title','upload_path','addupdate_form'));
    }  

     public function view_page_url($id)
    {
        checkAdminSession();
        $page_title = 'View '.$this->arr_values['page_title'];
        $addupdate_form = $this->arr_values['addupdate_form'];
        $upload_path = $this->arr_values['upload_path'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if (!$EDITDATA) {
            return redirect()->route($this->arr_values['load_list_path'])->with('message', 'not found.');
        }
        return view($this->arr_values['view_page_url'], compact('EDITDATA','page_title','upload_path','addupdate_form'));
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


    




    /*-------------------add update data here --------------------*/

    public function storeOrUpdate(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');

        $id = $request->input('id'); 

        $uploadPath = public_path($this->arr_values['upload_path']);
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $imageName = $request->input('oldimage'); 

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($uploadPath, $imageName);

            if (!empty($request->input('oldimage')) && file_exists($uploadPath . $request->input('oldimage'))) {
                unlink($uploadPath . $request->input('oldimage'));
            }
        }

        /*banner*/
        $bannerName = $request->input('oldbanner'); 
        if ($request->hasFile('banner') && $request->file('banner')->isValid()) {
            $bannerName = uniqid() . '.' . $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move($uploadPath, $bannerName);

            if (!empty($request->input('oldbanner')) && file_exists($uploadPath . $request->input('oldbanner'))) {
                unlink($uploadPath . $request->input('oldbanner'));
            }
        }

        $country_id = $request->input('country_id');
        $city_id = $request->input('city_id');
        $name = $request->input('name');
        $slug = slug($name);
        $content = $request->input('content');
        $full_content = $request->input('full_content');
        $status = $request->input('status');
        $timestamp = now();

        $meta_title = $request->input("meta_title") ?? $name;
        $meta_auther = $request->input('meta_auther');
        $meta_keyword = $request->input('meta_keyword');
        $meta_description = $request->input('meta_description');


        /*where to go*/
        $get_where_to_go = [];
        $where_to_go_name = $request->input('where_to_go_name', []);
        $where_to_go_description = $request->input('where_to_go_description', []);
        $where_to_go_image = $request->file('where_to_go_image');
        $old_where_to_go_image = $request->input('where_to_go_image_old', []);

        foreach($where_to_go_name as $key => $wheretogo)
        {
            $mImages_where_to_go = [];
            if (isset($where_to_go_image[$key]) && $where_to_go_image[$key]) {
                $image = $where_to_go_image[$key];
                if ($image->isValid()) {
                    $thumbImg = uniqid() . '_' . $image->getClientOriginalName();
                    $image->move($uploadPath, $thumbImg);
                    $mImages_where_to_go[] = $thumbImg;
                }
            }
            if (!empty($old_where_to_go_image[$key])) {
                $mImages_where_to_go[] = $old_where_to_go_image[$key];
            }
            $get_where_to_go[] = [
                "where_to_go_name" => $where_to_go_name[$key] ?? null,
                "where_to_go_description" => $where_to_go_description[$key] ?? null,
                "where_to_go_image" => $mImages_where_to_go,
            ];
        }

        $single_where_to_go = !empty($get_where_to_go) ? json_encode($get_where_to_go) : null;


        /*experiences_activities*/
        $get_experiences_activities = [];
        $experiences_activities_name = $request->input('experiences_activities_name', []);
        $experiences_activities_description = $request->input('experiences_activities_description', []);
        $experiences_activities_image = $request->file('experiences_activities_image');
        $old_experiences_activities_image = $request->input('experiences_activities_image_old', []);

        foreach ($experiences_activities_name as $key => $name_item) 
        {
            $mImages_experiences_activities = [];

            if (isset($experiences_activities_image[$key]) && $experiences_activities_image[$key]) {
                $image = $experiences_activities_image[$key];
                if ($image->isValid()) {
                    $thumbImg = uniqid() . '_' . $image->getClientOriginalName();
                    $image->move($uploadPath, $thumbImg);
                    $mImages_experiences_activities[] = $thumbImg;
                }
            }

            if (!empty($old_experiences_activities_image[$key])) {
                $mImages_experiences_activities[] = $old_experiences_activities_image[$key];
            }

            $get_experiences_activities[] = [
                "experiences_activities_name" => $experiences_activities_name[$key] ?? null,
                "experiences_activities_description" => $experiences_activities_description[$key] ?? null,
                "experiences_activities_image" => $mImages_experiences_activities,
            ];
        }

        $single_experiences_activities = !empty($get_experiences_activities) ? json_encode($get_experiences_activities) : null;


        /*experiences_activities*/
        $get_art_therter = [];
        $art_therter_name = $request->input('art_therter_name', []);
        $art_therter_description = $request->input('art_therter_description', []);
        $art_therter_image = $request->file('art_therter_image');
        $old_art_therter_image = $request->input('art_therter_image_old', []);

        foreach ($art_therter_name as $key => $name_item) 
        {
            $mImages_art_therter = [];

            if (isset($art_therter_image[$key]) && $art_therter_image[$key]) {
                $image = $art_therter_image[$key];
                if ($image->isValid()) {
                    $thumbImg = uniqid() . '_' . $image->getClientOriginalName();
                    $image->move($uploadPath, $thumbImg);
                    $mImages_art_therter[] = $thumbImg;
                }
            }

            if (!empty($old_art_therter_image[$key])) {
                $mImages_art_therter[] = $old_art_therter_image[$key];
            }

            $get_art_therter[] = [
                "art_therter_name" => $art_therter_name[$key] ?? null,
                "art_therter_description" => $art_therter_description[$key] ?? null,
                "art_therter_image" => $mImages_art_therter,
            ];
        }

        $single_art_therter = !empty($get_art_therter) ? json_encode($get_art_therter) : null;

        /*park_garden*/
        $get_park_garden = [];
        $park_garden_name = $request->input('park_garden_name', []);
        $park_garden_description = $request->input('park_garden_description', []);
        $park_garden_image = $request->file('park_garden_image');
        $old_park_garden_image = $request->input('park_garden_image_old', []);

        foreach ($park_garden_name as $key => $name_item) 
        {
            $mImages_park_garden = [];

            if (isset($park_garden_image[$key]) && $park_garden_image[$key]) {
                $image = $park_garden_image[$key];
                if ($image->isValid()) {
                    $thumbImg = uniqid() . '_' . $image->getClientOriginalName();
                    $image->move($uploadPath, $thumbImg);
                    $mImages_park_garden[] = $thumbImg;
                }
            }

            if (!empty($old_park_garden_image[$key])) {
                $mImages_park_garden[] = $old_park_garden_image[$key];
            }

            $get_park_garden[] = [
                "park_garden_name" => $park_garden_name[$key] ?? null,
                "park_garden_description" => $park_garden_description[$key] ?? null,
                "park_garden_image" => $mImages_park_garden,
            ];
        }

        $single_park_garden = !empty($get_park_garden) ? json_encode($get_park_garden) : null;
        
        /*hotels*/
        $get_hotels = [];
        $hotels_name = $request->input('hotels_name', []);
        $hotels_description = $request->input('hotels_description', []);
        $hotels_image = $request->file('hotels_image');
        $old_hotels_image = $request->input('hotels_image_old', []);

        foreach ($hotels_name as $key => $name_item) 
        {
            $mImages_hotels = [];

            if (isset($hotels_image[$key]) && $hotels_image[$key]) {
                $image = $hotels_image[$key];
                if ($image->isValid()) {
                    $thumbImg = uniqid() . '_' . $image->getClientOriginalName();
                    $image->move($uploadPath, $thumbImg);
                    $mImages_hotels[] = $thumbImg;
                }
            }

            if (!empty($old_hotels_image[$key])) {
                $mImages_hotels[] = $old_hotels_image[$key];
            }

            $get_hotels[] = [
                "hotels_name" => $hotels_name[$key] ?? null,
                "hotels_description" => $hotels_description[$key] ?? null,
                "hotels_image" => $mImages_hotels,
            ];
        }

        $single_hotels = !empty($get_hotels) ? json_encode($get_hotels) : null;







        $data = [
            "country_id"   => $country_id,
            "city_id"   => $city_id,
            "banner"   => $bannerName,
            "name"   => $name,
            "slug"    => $slug,
            "content" => $content,
            "full_content" => $full_content,
            "image"   => $imageName,
            "status"  => $status,
            "where_to_go"  => $single_where_to_go,
            "experiences_activities"  => $single_experiences_activities,
            "art_therter"  => $single_art_therter,
            "park_garden"  => $single_park_garden,
            "hotels"  => $single_hotels,
            "meta_title"  => $meta_title,
            "meta_auther"  => $meta_auther,
            "meta_keyword"  => $meta_keyword,
            "meta_description"  => $meta_description,
        ];

        if (empty($id)) {
            $data['addeddate'] = $timestamp;
            $insert_id = DB::table($this->arr_values['table_name'])->insertGetId($data);
        } else {
            $data['modifieddate'] = $timestamp;
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            $insert_id = $id;
        }

        // Slug and meta update
        $old_slug_data = DB::table($this->arr_values['table_name'])->where('id', $insert_id)->select('slug')->first();
        $old_slug = $old_slug_data->slug ?? '';
        $new_slug = insert_slug(
            $slug,
            $insert_id,
            $this->arr_values['table_name'],
            $this->arr_values['controller_name'],
            $old_slug,
            $this->arr_values['page_name']
        );
        insert_meta_tags($new_slug, $old_slug, $name, $this->arr_values['page_name']);
        DB::table($this->arr_values['table_name'])->where('id', $insert_id)->update(['slug' => $new_slug]);

        return redirect()->route($this->arr_values['load_list_path'])->with('message', 'Record saved successfully.');
    }





   public function load_more(Request $request) 
    {
        $count = $request->count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        return view("admin/sight_seeing/add-more", compact('page_title', 'count','upload_path'));
    }

    /*expierience-more.blade.php*/
   public function load_expierience_more(Request $request) 
    {
        $count = $request->count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        return view("admin/sight_seeing/expierience-more", compact('page_title', 'count','upload_path'));
    }


    /*expierience-more.blade.php*/
   public function load_art_therter_more(Request $request) 
    {
        $count = $request->count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        return view("admin/sight_seeing/art_therter-more", compact('page_title', 'count','upload_path'));
    }


    /*expierience-more.blade.php*/
   public function load_park_garden_more(Request $request) 
    {
        $count = $request->count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        return view("admin/sight_seeing/park_garden-more", compact('page_title', 'count','upload_path'));
    }


    /*expierience-more.blade.php*/
   public function load_hotels_more(Request $request) 
    {
        $count = $request->count;
        $upload_path = $this->arr_values['upload_path'];
        $page_title = $this->arr_values['page_title'];
        return view("admin/sight_seeing/hotels-more", compact('page_title', 'count','upload_path'));
    }





























































    

















}
