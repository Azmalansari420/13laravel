@include('header');

 
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
              

              


              <div class="row">

                @php
                $pdfcat = DB::table('pdf_category')->where('status',1)->get();
                @endphp
                @foreach($pdfcat as $data)
                <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <a href="{{url($data->slug)}}" class="company-logo"><img src="{{url('public/media/uploads/pdf_category/'.$data->image)}}" alt=""></a>
                    <h4><a href="{{url($data->slug)}}">{{$data->name}}</a></h4>
                    <!-- <div class="job-type">Notes – 2</div> -->
                  </div>
                </div>
                @endforeach

               

               



              </div>

              <!-- Pagination -->
              <!-- <nav class="ls-pagination">
                <ul>
                  <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="current-page">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->
@include('footer');