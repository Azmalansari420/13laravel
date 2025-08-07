<!DOCTYPE html>
<html lang="en">
<title>{{$page_title}}</title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
      	@include('admin.include.session-toster') 
         @include('admin.include.topbar')  
      	 @include('admin.include.sidebar')  
         <div id="content" class="app-content">
            <h1 class="page-header add-header">{{@$EDITDATA->name}}</h1>
            <form class="row" method="post" enctype="multipart/form-data" action="{{ route($update_page_url, ['id' => $EDITDATA->id ?? 1]) }}">
            	 @csrf
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="content" rows="6" class="summernote form-control"><?php echo @$EDITDATA->content; ?></textarea>
                        </div>

                        {{-- title 1 --}}
                        <div class="col-6 form-group">
                           <label>Title 1 </label>
                           <input type="text" class="form-control" name="title1" value="<?php echo @$EDITDATA->title1; ?>">
                        </div>

                        <div class="col-6 form-group">
                           <label>Title1 Content</label>
                           <input type="text" class="form-control" name="title1_content" value="<?php echo @$EDITDATA->title1_content; ?>">
                        </div>

                        <div class="col-12 form-group" style="display:none;">
                           <label>Title1 Image</label>
                           <input id="image-input"  type="file" name="title1_image" class="form-control">
                           <br>
                           <img id="image-preview" src="{{url('public/media/uploads/content/')}}/{{@$EDITDATA->title1_image}}" alt="Image Preview" width="100px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                            <input id="image-preview"  type="hidden" class="form-control" name="oldtitle1_image" value="{{@$EDITDATA->title1_image}}">
                        </div>


                        {{-- title 1 --}}
                        <div class="col-6 form-group">
                           <label>Title 2 </label>
                           <input type="text" class="form-control" name="title2" value="<?php echo @$EDITDATA->title2; ?>">
                        </div>

                        <div class="col-6 form-group">
                           <label>Title2 Content</label>
                           <input type="text" class="form-control" name="title2_content" value="<?php echo @$EDITDATA->title2_content; ?>">
                        </div>

                        <div class="col-12 form-group" style="display:none;">
                           <label>Title1 Image</label>
                           <input id="image-input"  type="file" name="title2_image" class="form-control">
                           <br>
                           <img id="image-preview" src="{{url('public/media/uploads/content/')}}/{{@$EDITDATA->title2_image}}" alt="Image Preview" width="100px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                            <input id="image-preview"  type="hidden" class="form-control" name="oldtitle2_image" value="{{@$EDITDATA->title2_image}}">
                        </div>

                        {{-- title 1 --}}
                        <div class="col-6 form-group">
                           <label>Title 3 </label>
                           <input type="text" class="form-control" name="title3" value="<?php echo @$EDITDATA->title3; ?>">
                        </div>

                        <div class="col-6 form-group">
                           <label>Title3 Content</label>
                           <input type="text" class="form-control" name="title3_content" value="<?php echo @$EDITDATA->title3_content; ?>">
                        </div>

                        <div class="col-12 form-group" style="display:none;">
                           <label>Title1 Image</label>
                           <input id="image-input"  type="file" name="title3_image" class="form-control">
                           <br>
                           <img id="image-preview" src="{{url('public/media/uploads/content/')}}/{{@$EDITDATA->title3_image}}" alt="Image Preview" width="100px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                            <input id="image-preview"  type="hidden" class="form-control" name="oldtitle3_image" value="{{@$EDITDATA->title3_image}}">
                        </div>



                        

                        
                        

                     </div>
                  </div>
               </div>

               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-12 form-group">
                           <label>Click to Upload Image</label>
                           <input id="image-input"  type="file" name="image" class="form-control">
                           <br>
                           <img id="image-preview" src="{{url('public/media/uploads/content/')}}/{{@$EDITDATA->image}}" alt="Image Preview" width="100px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                            <input id="image-preview"  type="hidden" class="form-control" name="oldimage" value="{{@$EDITDATA->image}}">
                        </div>


                         <div class="col-12 form-group">
                            <label>Click to Upload Side Image</label>
                            <input id="image-input" type="file" name="side_image" class="form-control">
                            <br>

                            @if(!empty($EDITDATA->side_image))
                                <img id="image-preview" src="{{ url('public/'.$upload_path.$EDITDATA->side_image) }}" alt="Image Preview" width="100px" class="mt-2">
                            @else
                                <img id="image-preview" src="" alt="Image Preview" width="100px" class="mt-2" style="display: none;">
                            @endif

                            <input type="hidden" name="oldside_image" value="{{ @$EDITDATA->side_image }}">
                        </div>

                        
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Submit</button>
                        </div>
                        </form>
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