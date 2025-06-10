

@include('header')

      <!--================= Breadcrumb Area start =================-->
      <section
        class="vs-breadcrumb"
        data-bg-src="{{url('')}}/assets/img/bg/breadcrumb-bg-2.png"
      >
        <img
          src="{{url('')}}/assets/img/icons/cloud.png"
          alt="vs-breadcrumb-icon"
          class="vs-breadcrumb-icon-1 animate-parachute"
        />
        <img
          src="{{url('')}}/assets/img/icons/ballon-sclation.png"
          alt="vs-breadcrumb-icon"
          class="vs-breadcrumb-icon-2 animate-parachute"
        />
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">{{ $destination ? $destination->name : 'Unknown Destination' }}</h1>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= Tour Package Area start =================-->
      <section class="vs-tour-package style-2 space">
        <div class="container">
          
          <div class="row g-4">            

          	@php
          	$package = DB::table('package')
          				->where('status',1)
          				->where('destination_id',$destination->id)
          				->get();
          	@endphp

          	@if($package->count() > 0)
    		@foreach($package as $item)

            <div class="col-md-6 col-xl-4">
              <div class="tour-package-box style-3 bg-white-color">
                <div class="tour-package-thumb">
                  <img
                    src="{{url('public/media/uploads/package/')}}/{{$item->image}}"
                    alt="tour-package"
                    class="w-100"
                  />
                </div>
                <div class="tour-package-content">
                  {{-- <div class="location">
                    <i class="fa-sharp fa-light fa-location-dot"></i>
                    <span>{{ $destination ? $destination->name : 'Unknown Destination' }}</span>
                  </div> --}}
                  <h5 class="title line-clamp-2">
                    <a onclick="showModal('{{ $item->name }}', '{{ $item->price }}', '{{ $item->duration }}')" href="javascript:void(0)">{{$item->name}}</a>
                  </h5>
                  <div class="tour-package-footer">
                    <div class="tour-duration">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8 0C3.58888 0 0 3.58888 0 8C0 12.4111 3.58888 16 8 16C12.4111 16 16 12.4111 16 8C16 3.58888 12.4111 0 8 0ZM8 15C4.14013 15 1 11.8599 1 8C1 4.14013 4.14013 1 8 1C11.8599 1 15 4.14013 15 8C15 11.8599 11.8599 15 8 15Z"
                          fill="#556065"
                        />
                        <path
                          d="M8.5 3H7.5V8.20702L10.6465 11.3535L11.3535 10.6465L8.5 7.79295V3Z"
                          fill="#556065"
                        />
                      </svg>
                      <span>{{$item->duration}} - Days</span>
                    </div>
                    <div class="pricing-info fw-medium">
                      From
                      <del class="text-theme-color fw-semibold">{!! currency_simble($item->cutprice) !!}</del>
                      <h5 class="new-price">{!! currency_simble($item->price) !!}</h5>
                    </div>
                  </div>
                  <div class="text-center">
                    <button style="background: #fe0000;" type="button" class="mybutton btn btn-primary mt-3" onclick="showModal('{{ $item->name }}', '{{ $item->price }}', '{{ $item->duration }}')"/>Enquiry Now</button> 
                  </div>
                </div>
              </div>
            </div>

            @endforeach
			@else
			    <div class="col-md-12 col-xl-12 text-center">
			    	<h2>Not found</h2>
			    </div>
			@endif

          </div>
          
        </div>
      </section>
      <!--================= Tour Package Area end =================-->
    </main>

<style>
  .tour-package-box .tour-package-footer .pricing-info {
      display: flex;
      align-items: center;
      gap: 8.5px;
      font-size: 11px;
    }

    /* Modal Header */
.modal-header {
    background: #f0f0f5;
    border-bottom: none;
    padding: 20px;
    text-align: center;
}

.modal-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    width: 100%;
}

/* Modal Body */
.modal-body {
    padding: 30px;
    background-color: #fff;
    border-radius: 0 0 8px 8px;
}

/* Form Inputs */
.modal-body .form-control {
    border-radius: 8px;
    border: 1px solid #ccc;
    box-shadow: none;
    padding: 10px 15px;
    transition: all 0.3s ease;
    font-size: 15px;
}

.modal-body .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

/* Submit Button */
.site-button {
    background-color: #007bff;
    border: none;
    padding: 12px 25px;
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    border-radius: 8px;
    transition: all 0.3s ease;
    width: 100%;
}

.site-button:hover {
    background-color: #0056b3;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
}

/* Close button */
.modal-header .close {
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 22px;
    color: #555;
    opacity: 1;
    transition: color 0.2s;
}

.modal-header .close:hover {
    color: #000;
}

/* Modal Dialog */
.modal-dialog {
    max-width: 600px;
}

.modal-content {
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
}


@media (max-width: 576px) {
    .modal-dialog {
        margin: 20px;
    }

    .modal-body {
        padding: 20px;
    }

    .site-button {
        font-size: 14px;
        padding: 10px;
    }
}

</style>


@include('footer')

<div class="modal fade" id="myModalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">{{env('website_name')}}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form method="post" class="" action="{{ route('packagedata') }}">
              @csrf
              <input type="hidden" name="selected_name" id="selectedName">
              <input type="hidden" name="selected_price" id="selectedPrice">
              <input type="hidden" name="selected_duration" id="duration">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="name" type="text" required class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group"> 
                                <input name="email" type="email" class="form-control"  placeholder="Your Email Id (optional)" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group"> 
                                <input name="mobile" type="number" class="form-control" required  placeholder="Your Mobile" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <textarea name="message" rows="4" class="form-control" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-12">
                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                    </div>
                </div>
            </form>         


          </div>         
        </div>
      </div>
    </div>

<script>

  function showModal(name, price,duration) {
    document.getElementById('selectedName').value = name;
    document.getElementById('selectedPrice').value = price;
    document.getElementById('duration').value = duration;

    // Show the modal using Bootstrap
    $('#myModalform').modal('show');
  }



   
    $(".close").click(function(){
            $("#myModalform").modal('hide');
        });
</script>