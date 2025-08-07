

<div class="row card-body" style="border: 1px solid;margin-bottom: 5px;padding: 5px;">
   <div class="col-12 form-group">
       <label>Name </label>
       <input type="text" class="form-control" name="park_garden_name[]" value="<?php if(!empty($value->park_garden_name)) echo $value->park_garden_name; ?>">
    </div>

    <div class="col-6 form-group">
       <label>Description </label>
       <textarea name="park_garden_description[]" class="form-control"><?php if(!empty($value->park_garden_description)) echo $value->park_garden_description; ?></textarea>
    </div>    

    <div class="col-6 form-group">
       <label>Image </label>
       <input type="file" class="form-control" name="park_garden_image[]">
       @php
		    $images = [];
		    if (!empty($value) && isset($value->park_garden_image)) {
		        $images = is_array($value->park_garden_image) 
		            ? $value->park_garden_image 
		            : json_decode($value->park_garden_image, true);
		    }
		@endphp


		@if (!empty($images) && is_array($images))
		    <input type="hidden" name="park_garden_image_old[]" value="{{ $images[0] }}">
		    <img src="{{ url('public/' . $upload_path . $images[0]) }}" width="50px" style="margin-top: 5px;">
		@endif
    </div>

    
    <div class="col-12" style="text-align: end;">
    	<button type="button" class="btn btn-sm btn-red park_garden-remove-btn">Remove</button>
    </div>
</div>