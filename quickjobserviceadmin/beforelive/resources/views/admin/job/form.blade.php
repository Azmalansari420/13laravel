<!DOCTYPE html>
<html lang="en">
   <title><?=$page_title ?></title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         @include('admin.include.session-toster') 
         @include('admin.include.topbar')  
         @include('admin.include.sidebar')

         <div id="content" class="app-content">
            <h1 class="page-header add-header"><?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="{{route($addupdate_form, @$EDITDATA->id)}}">
               @csrf
               <input type="hidden" name="id" value="{{ @$EDITDATA->id }}">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-4 form-group ">
                            <label>Select Country</label>
                            <select class="selectpicker form-control" required name="country_id" data-style="btn-default" data-live-search="true" id="country_id">
                              <option value="">--Select Country --</option>
                              <?php
                              $city = DB::table('country')->where('status',1)->get();
                              foreach($city as $data)
                                 { ?>
                                <option value="{{@$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->country_id == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-4 form-group ">
                            <label>Select State</label>
                            <select class="selectpicker form-control" required name="state_id" data-style="btn-default" data-live-search="true" id="state_id">
                              <option value="">--Select State --</option>
                              <?php
                              $city = DB::table('state')->where('status',1)->get();
                              foreach($city as $data)
                                 { ?>
                                <option value="{{@$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->state_id == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-4 form-group ">
                            <label>Select City</label>
                            <select class="selectpicker form-control"  name="city_id" data-style="btn-default" data-live-search="true" id="city_id">
                              <option value="">--Select City --</option>
                              <?php
                              $city = DB::table('city')->where('status',1)->get();
                              foreach($city as $data)
                                 { ?>
                                <option value="{{@$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->city_id == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-6 form-group ">
                            <label>Select Category</label>
                            <select class="selectpicker form-control" required name="cat_id" data-style="btn-default" data-live-search="true" id="cat_id">
                              <option>--Select Category --</option>
                              <?php
                              $category = DB::table('category')->where('status',1)->get();
                              foreach($category as $data)
                                 { ?>
                                <option value="{{@$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->cat_id == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                <?php } ?>
                            </select>
                        </div>

                        

                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="{{@$EDITDATA->name}}">
                        </div>

                        


                        <div class="col-6 form-group ">
                            <label>Select Job Type</label>
                            <select class="selectpicker form-control" required name="job_type" data-style="btn-default" data-live-search="true" id="job_type">
                              <option>--Select Job Type --</option>
                              <?php
                              $job_type = DB::table('job_type')->where('status',1)->get();
                              foreach($job_type as $data)
                                 { ?>
                                <option value="{{@$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->job_type == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-6 form-group">
                           <label>Salery </label>
                           <input type="text" class="form-control" name="salery" value="{{@$EDITDATA->salery}}">
                        </div>


                        <div class="col-6 form-group">
                           <label>Post Date </label>
                           <input type="date" class="form-control" name="post_date" value="{{@$EDITDATA->post_date}}">
                        </div>



                        <div class="col-6 form-group">
                           <label>Expire Date </label>
                           <input type="date" class="form-control" name="expire_date" value="{{@$EDITDATA->expire_date}}">
                        </div>

                       

                    <div class="col-6 form-group">
                        <label>Select Job Skills</label>
                        <select class="selectpicker form-control" name="job_skills[]" data-style="btn-default" data-live-search="true" id="job_skills" multiple>
                            <option value="">--Select Job Skills--</option>

                            <?php
                            // ✅ Safely decode skills (ensure array even if null or invalid)
                            $selectedSkills = (!empty($EDITDATA->job_skills)) ? json_decode($EDITDATA->job_skills, true) : [];
                            if (!is_array($selectedSkills)) {
                                $selectedSkills = [];
                            }

                            // ✅ Fetch all skills
                            $job_skills = DB::table('skills')->where('status', 1)->get();

                            foreach ($job_skills as $data) { 
                                $isSelected = in_array($data->id, $selectedSkills) ? 'selected' : '';
                            ?>
                                <option value="<?= $data->id ?>" <?= $isSelected ?>><?= $data->name ?></option>
                            <?php } ?>
                        </select>
                    </div>


                         <div class="col-6 form-group">
                           <label>Form Fee </label>
                           <input type="text" class="form-control" name="formtax" value="{{@$EDITDATA->formtax}}">
                        </div>

                         <div class="col-6 form-group">
                           <label>Total Post </label>
                           <input type="text" class="form-control" name="totalpost" value="{{@$EDITDATA->totalpost}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="description"  class="summernote form-control">{{@$EDITDATA->description}}</textarea>
                        </div>





                     
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        
                        <div class="col-12 form-group">
                            <label>Click to Upload Image</label>
                            <input id="image-input" type="file" name="image" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->image))
                                <img id="image-preview" src="{{ url('public/'.$upload_path.$EDITDATA->image) }}" alt="Image Preview" width="100px" class="mt-2">
                            @else
                                <img id="image-preview" src="" alt="Image Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldimage" value="{{ @$EDITDATA->image }}">
                        </div>

                        <div class="col-12 form-group ">
                            <label>Select Status</label>
                            <select class="selectpicker form-control" required name="status" data-style="btn-default" data-live-search="true">
                                <option value="1" {{ (isset($EDITDATA) && $EDITDATA->status == 1) ? 'selected' : '' }}>Show</option>
                                <option value="0" {{ (isset($EDITDATA) && $EDITDATA->status == 0) ? 'selected' : '' }}>Hide</option>
                            </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple"> <?=$page_title ?></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      @include('admin.include.theams') 
      @include('admin.include.allscript')


<script>
   
 $(document).on("change", "#country_id",(function(e) {
      login_distibuter();
    }));

    function login_distibuter()
    {
        var country_id = $("#country_id").val();



        var form = new FormData();
        form.append("country_id", country_id);
        form.append("_token", "{{ csrf_token() }}");


        var settings = {
          "url": "{{route('admin_con/city/getstatename')}}",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);
          if(response.status==200)
          {
           $("#state_id").html(response.data);
            $('#state_id').selectpicker('refresh');
          }
        });
    }


    {{-- get city --}}

     $(document).on("change", "#state_id",(function(e) {
      login_distibuter();
    }));

    function login_distibuter()
    {
        var state_id = $("#state_id").val();



        var form = new FormData();
        form.append("state_id", state_id);
        form.append("_token", "{{ csrf_token() }}");


        var settings = {
          "url": "{{route('admin_con/job/getcityname')}}",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);
          if(response.status==200)
          {
           $("#city_id").html(response.data);
            $('#city_id').selectpicker('refresh');
          }
        });
    }


</script>

   </body>
</html>