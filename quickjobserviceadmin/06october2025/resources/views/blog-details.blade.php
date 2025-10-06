@include('header');


    <!-- Blog Single -->
    <section class="blog-single">
      <div class="auto-container">
        <div class="upper-box">
          <h3>{{$EDITDATA->name}}</h3>
          <ul class="post-info">
            <li>{!! dateformet($EDITDATA->addeddate) !!}</li>
          </ul>
        </div>
      </div>
      <div class="auto-container">
        
       
        <figure class="image text-center"><img src="{{url('public/media/uploads/blog/'.$EDITDATA->image)}}" alt=""></figure>
        <h4>{{$EDITDATA->name}}</h4>
        {!! $EDITDATA->content !!}


      </div>
    </section>
    <!-- End Blog Single -->

@include('footer');