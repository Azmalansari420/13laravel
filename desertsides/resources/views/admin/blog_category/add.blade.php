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
         <h1 class="page-header add-header">Add <?=$page_title ?> </h1>
         <form class="row" method="post" enctype="multipart/form-data" action="{{ route($add_in_database_url) }}">
            @csrf
            
            <div class="col-lg-12">
               <div class="card m-b-15">
                  <div class="row card-body">
                     <div class="col-6 form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="name" />
                     </div>

                     <div class="col-6 form-group m-b-0">
                        <label>Select Status</label>
                        <select class="selectpicker  form-control" required name="status" data-style="btn-default" data-live-search="true" >
                           <option value="1" selected>Show</option>
                           <option value="0">Hide</option>
                        </select>
                     </div>
                     <div class="col-12 form-group mt-4">
                        <button type="submit" name="submit" class="btn btn-purple">Add <?=$page_title ?></button>
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