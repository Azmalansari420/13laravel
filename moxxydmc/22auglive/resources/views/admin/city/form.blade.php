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

                        <div class="col-6 form-group m-b-0">
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




                        <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span>

                        <div class="col-12 text-center">
                           <h3>Add Major Attractions</h3>
                        </div>

                        <div class="col-md-12">
                            <div class="row" id="add-more-sinfle-image-field">
                                @if (!empty(@$EDITDATA->where_to_go))
                                    @php $getall = json_decode(@$EDITDATA->where_to_go);
                                    // dd($getall)
                                     @endphp
                                    @foreach ($getall as $key => $value)
                                        @include("admin/city/add-more", ['value' => $value,'index' => $key])
                                    @endforeach
                                @else
                                    @include("admin/city/add-more", ['value' => null, 'index' => 0])
                                @endif
                            </div>

                            <div class="col-md-12 text-right">
                                <input type="button" class="btn btn-sm btn-secondary" id="add-more-single-image-btn" value="Add More">
                            </div>
                        </div>

                        <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span>

                        <div class="col-12 text-center">
                           <h3>Add Adventure and Activities</h3>
                        </div>

                        <div class="col-md-12">
                            <div class="row" id="add-more-load_expierience_more">
                                @if (!empty(@$EDITDATA->experiences_activities))
                                    @php $getexperiences_activities = json_decode(@$EDITDATA->experiences_activities);
                                    // dd($getall)
                                     @endphp
                                    @foreach ($getexperiences_activities as $key => $value)
                                        @include("admin/city/expierience-more", ['value' => $value,'index' => $key])
                                    @endforeach
                                @else
                                    @include("admin/city/expierience-more", ['value' => null, 'index' => 0])
                                @endif
                            </div>

                            <div class="col-md-12 text-right">
                                <input type="button" class="btn btn-sm btn-secondary" id="add-load_expierience_more-btn" value="Add More">
                            </div>
                        </div>



                        {{-- <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span> --}}

                        <div class="col-12 text-center" style="display: none;">
                           <h3>Add Art & Theaters</h3>
                        </div>

                        <div class="col-md-12" style="display: none;">
                            <div class="row" id="add-more-load_art_therter_more">
                                @if (!empty(@$EDITDATA->art_therter))
                                    @php $getart_therter = json_decode(@$EDITDATA->art_therter);
                                    // dd($getall)
                                     @endphp
                                    @foreach ($getart_therter as $key => $value)
                                        @include("admin/city/art_therter-more", ['value' => $value,'index' => $key])
                                    @endforeach
                                @else
                                    @include("admin/city/art_therter-more", ['value' => null, 'index' => 0])
                                @endif
                            </div>

                            <div class="col-md-12 text-right">
                                <input type="button" class="btn btn-sm btn-secondary" id="add-load_art_therter_more-btn" value="Add More">
                            </div>
                        </div>


                        {{-- <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span> --}}

                        <div class="col-12 text-center" style="display: none;">
                           <h3>Add Parks And Gardens</h3>
                        </div>

                        <div class="col-md-12" style="display: none;">
                            <div class="row" id="add-more-load_park_garden_more">
                                @if (!empty(@$EDITDATA->park_garden))
                                    @php $getpark_garden = json_decode(@$EDITDATA->park_garden);
                                    // dd($getall)
                                     @endphp
                                    @foreach ($getpark_garden as $key => $value)
                                        @include("admin/city/park_garden-more", ['value' => $value,'index' => $key])
                                    @endforeach
                                @else
                                    @include("admin/city/park_garden-more", ['value' => null, 'index' => 0])
                                @endif
                            </div>

                            <div class="col-md-12 text-right">
                                <input type="button" class="btn btn-sm btn-secondary" id="add-load_park_garden_more-btn" value="Add More">
                            </div>
                        </div>

                        <span style="border-bottom: 1px solid red;width: 100%;margin: 30px 0;"></span>

                        <div class="col-12 text-center">
                           <h3>Add Most popular hotels </h3>
                        </div>

                        <div class="col-md-12">
                            <div class="row" id="add-more-load_hotels_more">
                                @if (!empty(@$EDITDATA->hotels))
                                    @php $gethotels = json_decode(@$EDITDATA->hotels);
                                    // dd($getall)
                                     @endphp
                                    @foreach ($gethotels as $key => $value)
                                        @include("admin/city/hotels-more", ['value' => $value,'index' => $key])
                                    @endforeach
                                @else
                                    @include("admin/city/hotels-more", ['value' => null, 'index' => 0])
                                @endif
                            </div>

                            <div class="col-md-12 text-right">
                                <input type="button" class="btn btn-sm btn-secondary" id="add-load_hotels_more-btn" value="Add More">
                            </div>
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



      <script>
   /*single image add more*/
   $(document).ready(function() {
       var count = 1;
       $('#add-more-single-image-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route("admin/city/load_more")}}',
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


   /*single image add more*/
   $(document).ready(function() {
       var count = 1;
       $('#add-load_expierience_more-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route("admin/city/load_expierience_more")}}',
               data: {
                   count: count,
                   _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                   $('#add-more-load_expierience_more').append(data);
                   count++;
               },
               error: function(xhr) {
                   console.error('Error:', xhr.responseText);
               }
           });
       });
       /*remove btn*/
       $(document).on('click', '.expierience-remove-btn', function() {
           $(this).parent().parent().remove();
       });
   });


   /*single image add more*/
   $(document).ready(function() {
       var count = 1;
       $('#add-load_art_therter_more-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route("admin/city/load_art_therter_more")}}',
               data: {
                   count: count,
                   _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                   $('#add-more-load_art_therter_more').append(data);
                   count++;
               },
               error: function(xhr) {
                   console.error('Error:', xhr.responseText);
               }
           });
       });
       /*remove btn*/
       $(document).on('click', '.art_therter-remove-btn', function() {
           $(this).parent().parent().remove();
       });
   });



   /*single image add more*/
   $(document).ready(function() {
       var count = 1;
       $('#add-load_park_garden_more-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route("admin/city/load_park_garden_more")}}',
               data: {
                   count: count,
                   _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                   $('#add-more-load_park_garden_more').append(data);
                   count++;
               },
               error: function(xhr) {
                   console.error('Error:', xhr.responseText);
               }
           });
       });
       /*remove btn*/
       $(document).on('click', '.park_garden-remove-btn', function() {
           $(this).parent().parent().remove();
       });
   });

   /*single image add more*/
   $(document).ready(function() {
       var count = 1;
       $('#add-load_hotels_more-btn').click(function() {
           $.ajax({
               type: 'POST',
               url: '{{route("admin/city/load_hotels_more")}}',
               data: {
                   count: count,
                   _token: '{{ csrf_token() }}'
               },
               success: function(data) {
                   $('#add-more-load_hotels_more').append(data);
                   count++;
               },
               error: function(xhr) {
                   console.error('Error:', xhr.responseText);
               }
           });
       });
       /*remove btn*/
       $(document).on('click', '.hotels-remove-btn', function() {
           $(this).parent().parent().remove();
       });
   });









</script>
   </body>
</html>