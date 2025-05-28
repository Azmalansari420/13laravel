<div class="row card-body" style="border: 1px solid; margin-bottom: 5px; padding: 5px;">
    <div class="col-12 form-group">
        <label>Question</label>
        <input type="text" class="form-control" name="faq_question[{{ $index }}]" value="{{ $value->faq_question ?? '' }}">
    </div>

    <div class="col-12 form-group">
        <label>Answere</label>
        <textarea name="faq_answere[{{$index}}]" class="summernote form-control">{{ $value->faq_answere ?? '' }}</textarea>
    </div>

    <button type="button" class="btn btn-sm btn-red faq-remove-btn">Remove</button>
</div>

<script src="{{url('')}}/public/admin_assests/plugins/summernote/dist/summernote.min.js" ></script>
<script src="{{url('')}}/public/admin_assests/plugins/summernote/dist/summernote-bs4.min.js" ></script>
<script src="{{url('')}}/public/admin_assests/js/demo/form-summernote.demo.js" ></script>