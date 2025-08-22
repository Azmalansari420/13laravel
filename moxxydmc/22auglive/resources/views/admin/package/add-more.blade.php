

<div class="row card-body" style="border: 1px solid;margin-bottom: 5px;padding: 5px;">
   <div class="col-12 form-group">
       <label>Name </label>
       <input type="text" class="form-control" name="itinerary_name[]" value="<?php if(!empty($value->itinerary_name)) echo $value->itinerary_name; ?>">
    </div>

    <div class="col-6 form-group">
       <label>Description </label>
       <textarea name="itinerary_description[]" class="form-control"><?php if(!empty($value->itinerary_description)) echo $value->itinerary_description; ?></textarea>
    </div>    

    <div class="col-6 form-group">
       <label>Image </label>
       <input type="file" class="form-control" name="itinerary_image[]">
       <?php
       if(!empty($value->itinerary_image))
         { ?>
            <input type="hidden" name="itinerary_image_old[]" value="{{ $value->itinerary_image[0] }}">
            <img src="{{ url('public/' . $upload_path . $value->itinerary_image[0]) }}" width="50px" style="margin-top: 5px;">
   <?php } ?>
    </div>
    
    <div class="col-12" style="text-align: end;">
    	<button type="button" class="btn btn-sm btn-red single-remove-btn">Remove</button>
    </div>
</div>