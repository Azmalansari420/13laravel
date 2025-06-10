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
                        <div class="col-6 form-group ">
                        <label>Select Destination</label>
                        <select class="selectpicker  form-control" required name="destination_id" data-style="btn-default" data-live-search="true" required>
                           @php
                           $destinationo = DB::Table('destination')
                           ->where('status',1)
                           ->get();
                           @endphp
                           @foreach($destinationo as $data)

                           <option <?php if($EDITDATA->destination_id==$data->id) echo "selected"; ?> value="<?=$data->id ?>"><?=$data->name ?></option>
                           @endforeach
                        </select>
                     </div>

                     <div class="col-6 form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="name" required value="<?=$EDITDATA->name ?>">
                     </div>

                     <div class="col-6 form-group">
                        <label>Duration </label>
                        <input type="text" class="form-control" name="duration" required/ value="<?=$EDITDATA->duration ?>">
                     </div>

                     <div class="col-6 form-group">
                        <label>Price </label>
                        <input type="text" class="form-control" name="price" required/ value="<?=$EDITDATA->price ?>">
                     </div>

                     <div class="col-6 form-group">
                        <label>Cut Price </label>
                        <input type="text" class="form-control" name="cutprice" required/ value="<?=$EDITDATA->cutprice ?>">
                     </div>

                     <div class="col-12 form-group">
                        <label>Overview </label>
                        <textarea name="overview" class="summernote form-control"><?=$EDITDATA->overview ?></textarea>
                     </div>

                     <div class="col-12 form-group">
                        <label>Cost Details </label>
                        <textarea name="costdetails" class="summernote form-control"><?=$EDITDATA->costdetails ?></textarea>
                     </div>
                     <div class="col-12 form-group">
                        <label>Map </label>
                        <textarea name="map" class="form-control"><?=$EDITDATA->map ?></textarea>
                     </div>

                     <div class="col-12 text-center">
                        <h3>Add More Itinerary</h3>
                     </div>

                     <div class="col-md-12">
                        <div class="row" id="add-more-itinerary">
                           @if(!empty($EDITDATA->Itinerary))
                           @php
                           $Itinerary = json_decode($EDITDATA->Itinerary);
                           @endphp
                           @foreach ($Itinerary as $key => $value)
                             @include('admin/package/itinerary',['value' => $value,'index' => $key])
                           @endforeach
                           @endif
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
                           @if(!empty($EDITDATA->faq))
                           @php
                           $faq = json_decode($EDITDATA->faq);
                           @endphp
                           @foreach ($faq as $key => $value)
                            @include('admin/package/faq',['value' => $value,'index' => $key])
                            @endforeach
                           @endif
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


                        <div class="col-12 form-group m-b-0">
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


<script>
   

   $(document).on('click', '.remove-image', function() {
       $(this).parent('.image-preview').remove();
   });

   $('#multi-image-input-2').on('change', function() {
       var files = $(this)[0].files;
       var newImagePreviews = $('#new-image-previews');
       newImagePreviews.html('');

       $.each(files, function(i, file) {
           var reader = new FileReader();
           reader.onload = function(e) {
               newImagePreviews.append(`
                   <div class="image-preview new-image" style="display: grid; text-align: center;">
                       <img src="${e.target.result}" alt="Image Preview" width="75px">
                       <span class="remove-image">Remove</span>
                   </div>
               `);
           };
           reader.readAsDataURL(file);
       });
   });




    /*single itinerary*/

   $(document).ready(function() {
       var count = 10;
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
       var count = 10;
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




</script>

   </body>
</html>