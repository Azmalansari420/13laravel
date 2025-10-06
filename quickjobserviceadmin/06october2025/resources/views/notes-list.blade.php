@include('header');

@php
$pdfcat = DB::table('pdfs')->where('status',1)->where('cat_id',$EDITDATA->id)->get();
@endphp
 
<style>
  .ls-section{
    margin-top: 100px;
  }
  .company-block-four .inner-box {
      border: 1px solid #0e1328;
    }
    .company-block-four .company-logo {
    position: relative;
    display: block;
    height: 100px;
    width: 100px;
  }
</style>
    <!-- Listing Section -->
    <section class="ls-section mtd-5">
      <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">

          <!-- Content Column -->
          <div class="content-column col-lg-12 col-md-12 col-sm-12">
            <div class="ls-outer">
              
              <div class="related-jobs">
                <div class="title-box">
                  <h3> PDF at {{@$EDITDATA->name}}</h3>
                  {{-- <div class="text">2020 jobs live - 293 added today.</div> --}}
                </div>

                @if(!empty($pdfcat) && count($pdfcat) > 0)
                @foreach($pdfcat as $data)
                <div class="job-block">
                  <div class="inner-box">
                    <div class="content">
                      <span class="company-logo"><img src="{{url('images/PDF_file_icon.svg.png')}}" alt=""></span>
                      <h4><a href="{{url($data->slug)}}">{{$data->name}}</a></h4>
                      <ul class="job-info">
                        <li><span class="icon flaticon-money"></span> {!! currency_symbol($data->amount) !!}</li>
                      </ul>
                      <a href="{{url($data->slug)}}" class="theme-btn btn-style-one btn-sm" style="padding: 10px 30px 10px 30px;">Buy Now</a>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                <div class=" text-center">
                  <h2>Not Found!</h2>
                </div>
                @endif

                

              </div>

              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->
@include('footer');