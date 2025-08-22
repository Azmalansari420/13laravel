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
                        <div class="col-6 form-group">
                            <label>Select Country</label>
                            <select class="selectpicker form-control" required name="country_id" data-style="btn-default" data-live-search="true">
                                 @php
                                $country = DB::Table('country')->where('status',1)->get();
                                @endphp
                                @foreach($country as $data)
                                <option value="{{$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->country_id == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6 form-group">
                            <label>Select City</label>
                            <select class="selectpicker form-control" required name="city_id" data-style="btn-default" data-live-search="true">
                                 @php
                                $city = DB::Table('city')->where('status',1)->get();
                                @endphp
                                @foreach($city as $data)
                                <option value="{{$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->city_id == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="{{@$EDITDATA->name}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Price</label>
                           <input type="text" class="form-control" name="price" value="{{@$EDITDATA->price}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Rating</label>
                           <input type="text" class="form-control" name="rating" value="{{@$EDITDATA->rating}}">
                        </div>
                        <div class="col-6 form-group">
                           <label>Duration</label>
                           <input type="text" class="form-control" name="duration" value="{{@$EDITDATA->duration}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Departures</label>
                           <input type="text" class="form-control" name="departures" value="{{@$EDITDATA->departures}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Overview </label>
                           <textarea name="overview" class="summernote form-control">{{@$EDITDATA->overview}}</textarea>
                        </div>

                        


                        <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span>

                        <div class="col-12 text-center">
                           <h3>Add Itinerary</h3>
                        </div>

                        <div class="col-md-12">
                            <div class="row" id="add-more-sinfle-image-field">
                                @if (!empty(@$EDITDATA->itinerary))
                                    @php $getall = json_decode(@$EDITDATA->itinerary);
                                    // dd($getall)
                                     @endphp
                                    @foreach ($getall as $key => $value)
                                        @include("admin/package/add-more", ['value' => $value,'index' => $key])
                                    @endforeach
                                @else
                                    @include("admin/package/add-more", ['value' => null, 'index' => 0])
                                @endif
                            </div>

                            <div class="col-md-12 text-right">
                                <input type="button" class="btn btn-sm btn-secondary" id="add-more-single-image-btn" value="Add More">
                            </div>
                        </div>


                        <div class="col-12 form-group">
                           <label>Inclusion </label>
                           <textarea name="inclusion" class="summernote form-control">{{@$EDITDATA->inclusion}}</textarea>
                        </div>
                        <div class="col-12 form-group">
                           <label>Exclusions </label>
                           <textarea name="exclusions" class="summernote form-control">{{@$EDITDATA->exclusions}}</textarea>
                        </div>

                        <div class="col-12 form-group">
                           <label>Package Highlight </label>
                           <textarea name="package_highlight" class="summernote form-control">{{@$EDITDATA->package_highlight}}</textarea>
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

                        <div class="col-12 form-group">
                            <label>Click to Upload Multiple Image</label>
                            <input type="file" id="multi-image-input-2" multiple class="form-control mb-2" name="multiple_image_json[]">
                            <div id="multi-image-previews" style="display:flex;overflow: auto;">
                                @if (!empty(@$EDITDATA->multiple_image_json))
                                    @php
                                        $allimage = json_decode(@$EDITDATA->multiple_image_json);
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






            /*single image add more*/
      $(document).ready(function() {
          var count = 1;
          $('#add-more-single-image-btn').click(function() {
              $.ajax({
                  type: 'POST',
                  url: '{{route("admin/package/load_more")}}',
                  data: {
                      count: count,
                      _token: '{{ csrf_token() }}'
                  },
                  success: function(data) {
                      $('#add-more-sinfle-image-field').append(data);
                      count++;
                  },
                  error: function(xhr) {
                      console.error('Error:', xhr.responseText);
                  }
              });
          });
          /*remove btn*/
          $(document).on('click', '.single-remove-btn', function() {
              $(this).parent().parent().remove();
          });
      });


      </script>
   </body>
</html>