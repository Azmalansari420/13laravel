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

                        <div class="col-12 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="{{@$EDITDATA->name}}">
                        </div>


                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="content" class="summernote form-control">{{@$EDITDATA->content}}</textarea>
                        </div>


                        <div class="col-4 form-group">
                            <label>Click to Upload Image 1</label>
                            <input id="image-insdput" type="file" name="image2" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->image2))
                                <img id="image2-preview" src="{{ url('public/'.$upload_path.$EDITDATA->image2) }}" alt="image2 Preview" width="100px" class="mt-2">
                            @else
                                <img id="image2-preview" src="" alt="image2 Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldimage2" value="{{ @$EDITDATA->image2 }}">
                        </div>

                        <div class="col-4 form-group">
                            <label>Click to Upload Image 2</label>
                            <input id="image-inputd" type="file" name="image3" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->image3))
                                <img id="image3-preview" src="{{ url('public/'.$upload_path.$EDITDATA->image3) }}" alt="image3 Preview" width="100px" class="mt-2">
                            @else
                                <img id="image3-preview" src="" alt="image3 Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldimage3" value="{{ @$EDITDATA->image3 }}">
                        </div>

                        <div class="col-4 form-group">
                            <label>Click to Upload Image 3</label>
                            <input id="image-inputd" type="file" name="image4" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->image4))
                                <img id="image4-preview" src="{{ url('public/'.$upload_path.$EDITDATA->image4) }}" alt="image4 Preview" width="100px" class="mt-2">
                            @else
                                <img id="image4-preview" src="" alt="image4 Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldimage4" value="{{ @$EDITDATA->image4 }}">
                        </div>


                        <div class="col-12 form-group text-center">
                           <h2>META BOX</h2>
                        </div>

                        <div class="col-12 form-group">
                           <label>Meta Auther </label>
                           <input type="text" class="form-control" name="meta_auther" value="{{@$EDITDATA->meta_auther}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Meta Keyword </label>
                           <input type="text" class="form-control" name="meta_keyword" value="{{@$EDITDATA->meta_keyword}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Meta Description </label>
                           <textarea name="meta_description" class="form-control">{{@$EDITDATA->meta_description}}</textarea>
                        </div>




                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        

                        <div class="col-12 form-group">
                            <label>Click to Upload Main Image</label>
                            <input id="image-input" type="file" name="image" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->image))
                                <img id="image-preview" src="{{ url('public/'.$upload_path.$EDITDATA->image) }}" alt="Image Preview" width="100px" class="mt-2">
                            @else
                                <img id="image-preview" src="" alt="Image Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldimage" value="{{ @$EDITDATA->image }}">
                        </div>

                        <div class="col-12 form-group">
                            <label>Click to Upload Banner Image</label>
                            <input id="image-input" type="file" name="banner" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->banner))
                                <img id="banner-preview" src="{{ url('public/'.$upload_path.$EDITDATA->banner) }}" alt="banner Preview" width="100px" class="mt-2">
                            @else
                                <img id="banner-preview" src="" alt="banner Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldbanner" value="{{ @$EDITDATA->banner }}">
                        </div>


                        <div class="col-12 form-group m-b-0">
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
   </body>
</html>