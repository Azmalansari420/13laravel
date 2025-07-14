<!DOCTYPE html>
<html lang="en">
   <title>Update <?=$page_title ?></title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         @include('admin.include.session-toster') 
         @include('admin.include.topbar')  
         @include('admin.include.sidebar')

         <div id="content" class="app-content">
            <h1 class="page-header add-header">Update <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="{{route($update_in_database_url, $EDITDATA->id)}}">
               @csrf
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-4 form-group ">
                           <label>Select Category</label>
                           <select class="selectpicker  form-control" required name="cat_id" data-style="btn-default" data-live-search="true" >
                              @php
                              $blog = DB::Table('projects_cate')->where('status',1)->get();
                              @endphp
                              @foreach($blog as $data)
                              <option <?php if($EDITDATA->cat_id==$data->id) echo "selected"; ?> value="<?=$data->id ?>"><?=$data->name ?></option>
                              @endforeach
                           </select>
                        </div>

                        <div class="col-4 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="{{$EDITDATA->name}}">
                        </div>

                        <div class="col-4 form-group">
                           <label>Location </label>
                           <input type="text" class="form-control" name="location" value="{{$EDITDATA->location}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="content" class="summernote form-control">{{$EDITDATA->content}}</textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        

                        <div class="col-12 form-group">
                           <label>Click to Upload Image</label>
                           <input id="image-input" type="file" name="image" class="form-control" >
                           <br>
                           <?php
                           if(!empty($EDITDATA->image))
                              { ?>
                           <img id="image-preview"   src="{{url('public/'.$upload_path)}}/{{$EDITDATA->image}}" alt="Image Preview" width="100px" class="mt-2">
                        <?php } ?>
                           <input id="image-preview" type="hidden" class="form-control" name="oldimage" value="{{$EDITDATA->image}}">
                           
                        </div>


                        <div class="col-12 form-group">
                            <label>Click to Upload Multiple Image</label>
                            <input type="file" id="multi-image-input-2" multiple class="form-control mb-2" name="multiple_image_json[]">
                            <div id="multi-image-previews" style="display:flex;overflow: auto;">
                                @if (!empty($EDITDATA->multiple_image_json))
                                    @php
                                        $allimage = json_decode($EDITDATA->multiple_image_json);
                                    @endphp
                                    @foreach ($allimage as $value)
                                        <div class="image-preview old-image" style="display: grid; text-align: center;">
                                            <input type="hidden" name="oldmultiple_image_json[]" value="{{ $value }}">
                                            <img src="{{ url('public/'.$upload_path.$value) }}" alt="Image Preview" width="75px">
                                            <span class="remove-image">Remove</span>
                                        </div>
                                    @endforeach
                                @endif
                                <div id="new-image-previews" style="display:contents;"></div>
                            </div>
                        </div>






                        <div class="col-12 form-group ">
                           <label>Select Project Status</label>
                           <select class="selectpicker form-control" required name="p_status" data-style="btn-default" data-live-search="true">
                              <option value="1"  <?php if($EDITDATA->p_status==1)echo 'selected'; ?>>Completed</option>
                              <option value="2" <?php if($EDITDATA->p_status==2)echo 'selected'; ?>>Under Construction</option>
                           </select>
                        </div>


                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class="selectpicker form-control" required name="status" data-style="btn-default" data-live-search="true">
                              <option value="1"  <?php if($EDITDATA->status==1)echo 'selected'; ?>>Show</option>
                              <option value="0" <?php if($EDITDATA->status==0)echo 'selected'; ?>>Hide</option>
                           </select>
                        </div>


                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Update <?=$page_title ?></button>
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
   </body>
</html>