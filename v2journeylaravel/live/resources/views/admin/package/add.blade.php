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
            <div class="col-lg-8">
               <div class="card m-b-15">
                  <div class="row card-body">
                     <div class="col-6 form-group ">
                        <label>Select Destination</label>
                        <select class="selectpicker  form-control" required name="destination_id" data-style="btn-default" data-live-search="true" required>
                           @php
                           $destinationo = DB::Table('destination')
                           ->where('status',1)
                           ->get();
                           @endphp
                           @foreach($destinationo as $data)

                           <option value="<?=$data->id ?>"><?=$data->name ?></option>
                           @endforeach
                        </select>
                     </div>

                     <div class="col-6 form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="name" />
                     </div>

                     <div class="col-6 form-group">
                        <label>Duration </label>
                        <input type="text" class="form-control" name="duration" required/>
                     </div>

                     <div class="col-6 form-group">
                        <label>Price </label>
                        <input type="text" class="form-control" name="price" required/>
                     </div>

                     <div class="col-6 form-group">
                        <label>Cut Price </label>
                        <input type="text" class="form-control" name="cutprice" required/>
                     </div>

                     <div class="col-12 form-group">
                        <label>Overview </label>
                        <textarea name="overview" class="summernote form-control"></textarea>
                     </div>

                     <div class="col-12 form-group">
                        <label>Cost Details </label>
                        <textarea name="costdetails" class="summernote form-control"></textarea>
                     </div>

                     <div class="col-12 form-group">
                        <label>Map </label>
                        <textarea name="map" class="form-control"></textarea>
                     </div>

                     <div class="col-12 text-center">
                        <h3>Add More Itinerary</h3>
                     </div>

                     <div class="col-md-12">
                        <div class="row" id="add-more-itinerary">
                             @include('admin/package/itinerary')
                        </div>
                        <div class="col-md-12 text-right">
                           <input type="button" class="btn btn-sm btn-secondary" id="add-more-itinerary-btn" value="Add More">
                        </div>
                     </div>


                     <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span>

                     <div class="col-12 text-center">
                        <h3>Add More FAQ's</h3>
                     </div>

                     <div class="col-md-12">
                        <div class="row" id="add-more-faq">
                            @include('admin/package/faq')
                        </div>
                        <div class="col-md-12 text-right">
                           <input type="button" class="btn btn-sm btn-secondary" id="add-more-faq-btn" value="Add More">
                        </div>
                     </div>




                  </div>
               </div>
            </div>


            <div class="col-lg-4">
               <div class="card m-b-15">
                  <div class="row card-body">

                     <div class="col-12 form-group">
                        <label>Click to Upload Image</label>
                        <input type="file" id="image-input" class="form-control" name="image" required>
                        <img id="image-preview" src="" alt="Image Preview" width="100px" style="display:none;">
                     </div>

                     <div class="col-12 form-group">
                        <label>Click to Upload Multiple Image</label>
                        <input type="file" id="multi-image-input" multiple class="form-control mb-2" name="multiple_image_json[]">
                        <div id="multi-image-previews" style="display:flex;overflow: auto;"></div>
                     </div>


                     <div class="col-12 form-group ">
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



<script>
   /*single itinerary*/

   $(document).ready(function() {
       var count = 1;
       $('#add-more-itinerary-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route('admin/package/load_more_singleitinerary')}}',
               data: {
                   count: count,
                   _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                   $('#add-more-itinerary').append(data);
                   count++;
               },
               error: function(xhr) {
                   console.error('Error:', xhr.responseText);
               }
           });
       });
       /*remove btn*/
       $(document).on('click', '.itinerary-remove-btn', function() {
           $(this).parent().remove();
       });
   });

   /*single faq*/


   $(document).ready(function() {
       var count = 1;
       $('#add-more-faq-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route('admin/package/load_more_singlefaq')}}',
               data: {
                   count: count,
                   _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                   $('#add-more-faq').append(data);
                   count++;
               },
               error: function(xhr) {
                   console.error('Error:', xhr.responseText);
               }
           });
       });
       /*remove btn*/
       $(document).on('click', '.faq-remove-btn', function() {
           $(this).parent().remove();
       });
   });





   /*multiple image add more*/


  


</script>


</body>
</html>