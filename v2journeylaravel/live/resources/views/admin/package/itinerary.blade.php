<div class="row card-body" style="border: 1px solid; margin-bottom: 5px; padding: 5px;">
    <div class="col-12 form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="itinerary_title[{{ $index }}]" value="{{ $value->itinerary_title ?? '' }}">
    </div>

    <div class="col-12 form-group">
        <label>Content</label>
        <textarea name="itinerary_content[{{$index}}]" class="summernote form-control">{{ $value->itinerary_content ?? '' }}</textarea>
    </div>

    <button type="button" class="btn btn-sm btn-red itinerary-remove-btn">Remove</button>
</div>

<script src="{{url('')}}/public/admin_assests/plugins/summernote/dist/summernote.min.js" ></script>
<script src="{{url('')}}/public/admin_assests/plugins/summernote/dist/summernote-bs4.min.js" ></script>
<script src="{{url('')}}/public/admin_assests/js/demo/form-summernote.demo.js" ></script>