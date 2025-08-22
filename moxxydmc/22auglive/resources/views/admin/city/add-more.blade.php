

<div class="row card-body" style="border: 1px solid;margin-bottom: 5px;padding: 5px;">
   <div class="col-12 form-group">
       <label>Name </label>
       <input type="text" class="form-control" name="where_to_go_name[]" value="<?php if(!empty($value->where_to_go_name)) echo $value->where_to_go_name; ?>">
    </div>

    <div class="col-6 form-group">
       <label>Description </label>
       <textarea name="where_to_go_description[]" class="form-control"><?php if(!empty($value->where_to_go_description)) echo $value->where_to_go_description; ?></textarea>
    </div>    

    <div class="col-6 form-group">
       <label>Image </label>
       <input type="file" class="form-control" name="where_to_go_image[]">
       <?php
       if(!empty($value->where_to_go_image))
         { ?>
            <input type="hidden" name="where_to_go_image_old[]" value="{{ $value->where_to_go_image[0] }}">
            <img src="{{ url('public/' . $upload_path . $value->where_to_go_image[0]) }}" width="50px" style="margin-top: 5px;">
   <?php } ?>
    </div>

    
    <div class="col-12" style="text-align: end;">
    	<button type="button" class="btn btn-sm btn-red single-remove-btn">Remove</button>
    </div>
</div>