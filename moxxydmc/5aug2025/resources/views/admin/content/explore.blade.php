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
            <form class="row" method="post" enctype="multipart/form-data" action="{{ route('admin/content/exploreupdate', ['id' => $EDITDATA->id ?? 6]) }}">
            	 @csrf
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">


                        {{-- title 1 --}}
                        <div class="col-12 form-group">
                           <label>Sub Title  </label>
                           <input type="text" class="form-control" name="sub_title" value="<?php echo @$EDITDATA->sub_title; ?>">
                        </div>

                        {{-- title 1 --}}
                        <div class="col-12 form-group">
                           <label>Title </label>
                           <input type="text" class="form-control" name="title" value="<?php echo @$EDITDATA->title; ?>">
                        </div>
                        {{-- title 1 --}}
                        <div class="col-12 form-group">
                           <label>URL </label>
                           <input type="text" class="form-control" name="url" value="<?php echo @$EDITDATA->url; ?>">
                        </div>

                        {{-- title 1 --}}
                        <div class="col-12 form-group">
                           <label>Bottom Title </label>
                           <input type="text" class="form-control" name="bottom_title" value="<?php echo @$EDITDATA->bottom_title; ?>">
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