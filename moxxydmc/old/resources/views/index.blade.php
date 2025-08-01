@include('header')

    <main>

        <!-- tg-hero-area-start -->
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    @php
                    $slider = DB::Table('slider')
                            ->where('status',1)
                            ->orderBy('id','desc')
                            ->get();
                    @endphp
                    @foreach($slider as $key => $data)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="{{ $key == 0  ? 'active' : '' }}" aria-current="true" aria-label="Slide {{$key}}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @php
                    $slider = DB::Table('slider')
                            ->where('status',1)
                            ->orderBy('id','desc')
                            ->get();
                    @endphp
                    @foreach($slider as $key => $data)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <a href="">
                            <img src="{{url('public/media/uploads/slider/'.$data->image)}}" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    @endforeach
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>             
        </div>  
        <!-- tg-hero-area-end -->

@php
$homeabout = DB::Table('content')->where('id',1)->first();
@endphp

        <div class="tg-chose-area tg-chose-su-2-wrap pt-70 pb-60 p-relative z-index-9 fix">
            <img class="tg-chose-su-2-bg-shape p-absolute" src="{{url('')}}/assets/img/chose/su/shape.png" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class="row align-items-center">
                            <div class="col-xxl-8 col-xl-9 col-lg-8 col-md-8">
                                <div class="tg-chose-section-title mb-20">
                                    <h5 class="tg-section-su-subtitle su-subtitle-2 mb-20 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">Explore the world</h5>
                                    {!! @$homeabout->content !!}
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                                <div class="tg-chose-su-2-thumb mb-25">
                                    <img class="w-100" src="{{url('public/media/uploads/content/'.@$homeabout->image)}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">
                                <div class="tg-chose-list-wrap ml-30">
                                    <div class="tg-chose-list d-flex mb-10">
                                        <span class="tg-chose-list-icon mr-20">
                                            <svg width="60" height="65" viewBox="0 0 60 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30.0061 65C24.2009 65 18.5671 63.2868 13.7171 60.062C5.13166 54.343 0 44.656 0 34.1376C0 31.6938 0.28169 29.2626 0.832823 26.907L0.89406 26.6676L3.15983 27.2219L3.09859 27.4612C2.59645 29.6279 2.33925 31.8702 2.33925 34.125C2.33925 43.1948 6.38089 51.4961 13.4354 56.9254L20.2817 53.0203L21.6167 47.5533L28.218 42.6531L29.2345 37.4128L26.5401 37.0097L26.8708 34.6415L31.9902 35.4099L30.3123 44.0514L23.662 48.9893L22.2903 54.6202L15.5909 58.4496C19.9265 61.1705 24.899 62.6066 29.9939 62.6066C36.534 62.6066 42.8904 60.2132 47.8751 55.8672L48.0588 55.7035L49.5652 57.53L49.3815 57.6938C43.9804 62.405 37.0974 65 30.0061 65Z" fill="#560CE3" />
                                                <path d="M1.26148 25.2568L1.33497 25.0174C1.51868 24.3876 1.73913 23.7703 1.95958 23.1531L2.04532 22.9138L4.22535 23.7703L4.13962 24.0097C3.93141 24.564 3.73546 25.1434 3.56399 25.7229L3.49051 25.9622L1.26148 25.2568Z" fill="#560CE3" />
                                                <path d="M49.0141 54.8217L49.1856 54.6453C49.602 54.2296 50.0184 53.8014 50.4225 53.3479L50.594 53.1589L52.3086 54.7713L52.1372 54.9603C51.7085 55.439 51.2554 55.9176 50.8022 56.3711L50.6307 56.5475L49.0141 54.8217Z" fill="#560CE3" />
                                                <path d="M51.4146 52.1638L51.5738 51.9622C55.5664 46.8605 57.673 40.7006 57.673 34.1376C57.673 31.6056 57.3423 29.0988 56.7055 26.6676L54.9663 27.6376H51.1696L49.7612 30.1696L42.6332 31.5174L37.1464 26.2519L31.2431 27.7762L25.8665 22.4099L29.3815 15.3052L25.9155 9.95155L28.4262 5.74419C22.4005 6.0969 16.583 8.5155 11.9657 12.5843L16.485 16.2248L16.9749 19.8779L14.6724 20.2054L14.305 17.5223L10.2388 14.2471C7.97306 16.6153 6.14819 19.3488 4.81323 22.3595L4.71525 22.5862L2.59645 21.5911L2.69443 21.3643C5.05818 16.0233 8.81813 11.5262 13.5701 8.31395C18.4568 5.02616 24.1396 3.27519 29.9939 3.27519C31.3166 3.27519 32.6516 3.36337 33.9743 3.53973L34.2192 3.57752L33.913 5.95833L33.6681 5.92054C32.8475 5.80717 32.0147 5.73159 31.1696 5.6938L28.6834 9.86337L32.0882 15.1163L28.7324 21.8934L31.9412 25.1056L37.82 23.594L43.3803 28.9225L48.2792 27.9903L49.8224 25.219H54.3784L55.9951 24.3246C55.346 22.4981 54.5132 20.7345 53.5089 19.0843C53.4599 18.9961 53.4109 18.9205 53.3497 18.8324L53.2149 18.6182L55.1745 17.3333C55.1745 17.3333 55.3337 17.5853 55.346 17.6105L55.6032 18.0388C58.4813 22.876 60 28.4312 60 34.1376C60 41.1541 57.6485 48.0194 53.3864 53.4738L53.2272 53.6754L51.4146 52.1638Z" fill="#560CE3" />
                                                <path d="M44.9724 15.6453C41.9596 15.6453 39.5101 13.126 39.5101 10.0271C39.5101 6.92829 41.9596 4.40891 44.9724 4.40891C47.9853 4.40891 50.4348 6.92829 50.4348 10.0271C50.4348 13.126 47.9853 15.6453 44.9724 15.6453ZM44.9724 6.81492C43.2456 6.81492 41.8371 8.26357 41.8371 10.0397C41.8371 11.8159 43.2456 13.2645 44.9724 13.2645C46.6993 13.2645 48.1078 11.8159 48.1078 10.0397C48.1078 8.26357 46.6993 6.81492 44.9724 6.81492Z" fill="#560CE3" />
                                                <path d="M15.15 37.9922C12.1372 37.9922 9.68769 35.4729 9.68769 32.374C9.68769 29.2752 12.1372 26.7558 15.15 26.7558C18.1629 26.7558 20.6124 29.2752 20.6124 32.374C20.6124 35.4729 18.1629 37.9922 15.15 37.9922ZM15.15 29.1492C13.4231 29.1492 12.0147 30.5979 12.0147 32.374C12.0147 34.1502 13.4231 35.5988 15.15 35.5988C16.8769 35.5988 18.2854 34.1502 18.2854 32.374C18.2854 30.5979 16.8769 29.1492 15.15 29.1492Z" fill="#560CE3" />
                                                <path d="M51.2186 5.90795C50.9369 5.45446 50.594 5.02616 50.2266 4.63566L50.0551 4.4593L51.6963 2.75872L51.8677 2.93508C52.3576 3.43895 52.7985 4.00581 53.1782 4.59787L53.3129 4.81202L51.3533 6.1095L51.2186 5.90795Z" fill="#560CE3" />
                                                <path d="M38.0772 17.1318C36.24 15.2297 35.2235 12.7103 35.2235 10.0397C35.2235 4.50969 39.5958 0 44.9847 0C46.8585 0 48.6834 0.554264 50.2633 1.58721L50.4715 1.72578L49.21 3.74128L49.0018 3.60271C47.8016 2.80911 46.4176 2.39341 44.9847 2.39341C40.8941 2.39341 37.5628 5.81977 37.5628 10.0271C37.5628 12.0678 38.3344 13.9826 39.7428 15.4312L44.9969 20.8353L50.2511 15.4312C51.6473 13.9826 52.4311 12.0678 52.4311 10.0271C52.4311 9.10756 52.2719 8.21318 51.9657 7.35659L51.88 7.11725L54.06 6.27326L54.1457 6.5126C54.5499 7.63372 54.7581 8.81783 54.7581 10.0271C54.7581 12.7103 53.7416 15.2297 51.9045 17.1192L45.0092 24.2112L38.0772 17.1318Z" fill="#560CE3" />
                                                <path d="M8.25475 39.4661C6.41764 37.564 5.4011 35.0446 5.4011 32.374C5.4011 26.844 9.77342 22.3343 15.1623 22.3343C17.0361 22.3343 18.861 22.8886 20.4409 23.9215L20.6491 24.0601L19.3876 26.0756L19.1794 25.937C17.9792 25.1434 16.5952 24.7277 15.1623 24.7277C11.0716 24.7277 7.74036 28.1541 7.74036 32.3614C7.74036 34.4021 8.51194 36.3169 9.92039 37.7655L15.1745 43.1696L20.4287 37.7655C21.8249 36.3169 22.6087 34.4021 22.6087 32.3614C22.6087 31.4419 22.4495 30.5475 22.1433 29.6909L22.0576 29.4516L24.2376 28.6076L24.3233 28.8469C24.7275 29.968 24.9357 31.1521 24.9357 32.3614C24.9357 35.0446 23.9192 37.564 22.0821 39.4535L15.1868 46.5455L8.25475 39.4661Z" fill="#560CE3" />
                                                <path d="M21.3962 28.2422C21.1145 27.7888 20.7716 27.3605 20.4042 26.97L20.2327 26.7936L21.8861 25.093L22.0576 25.2694C22.5475 25.7733 22.9884 26.3401 23.368 26.9322L23.5028 27.1463L21.5432 28.4438L21.3962 28.2422Z" fill="#560CE3" />
                                                <path d="M32.7373 48.8508L38.4568 43.0814L42.4985 46.9864L49.5285 39.7558H46.4421V37.3624H53.4966V44.6182H51.1696V41.4564L42.5475 50.3246L38.4936 46.407L34.3662 50.564L32.7373 48.8508Z" fill="#560CE3" />
                                                <path d="M31.7435 53.2243L33.4043 51.548L31.7744 49.8398L30.1137 51.5162L31.7435 53.2243Z" fill="#560CE3" />
                                                <path d="M29.1167 55.8693L30.7775 54.193L29.1477 52.4848L27.4869 54.1612L29.1167 55.8693Z" fill="#560CE3" />
                                                <path d="M17.3301 10.4176L17.5505 10.3043C19.0692 9.46027 20.6614 8.78004 22.3025 8.26357L22.5352 8.18798L23.2211 10.4806L22.9884 10.5562C21.4942 11.0223 20.0367 11.6521 18.665 12.4205L18.4446 12.5339L17.3301 10.4176Z" fill="#560CE3" />
                                                <path d="M37.4893 57.5804L37.722 57.5048C39.0814 57.0262 40.4164 56.4089 41.6779 55.6909L41.8861 55.5649L43.0251 57.656L42.8169 57.782C41.4329 58.5756 39.9633 59.2558 38.4691 59.7723L38.2364 59.8479L37.4893 57.5804Z" fill="#560CE3" />
                                                <path d="M34.0968 58.4622L34.3417 58.4118C34.9173 58.2985 35.493 58.1725 36.0563 58.0213L36.289 57.9583L36.8769 60.2762L36.6442 60.3391C36.0196 60.5029 35.395 60.6541 34.7581 60.7674L34.5132 60.8178L34.0968 58.4622Z" fill="#560CE3" />
                                                <path d="M37.3668 30.2955H35.0398V32.689H37.3668V30.2955Z" fill="#560CE3" />
                                                <path d="M33.6803 30.2955H31.3533V32.689H33.6803V30.2955Z" fill="#560CE3" />
                                              </svg>
                                        </span>
                                        <div class="tg-chose-list-content">
                                            <h4 class="tg-chose-list-title mb-15">{{@$homeabout->title1}}</h4>
                                            <p>{{@$homeabout->title1_content}}</p>
                                        </div>
                                    </div>
                                    <div class="tg-chose-list d-flex mb-25">
                                        <span class="tg-chose-list-icon mr-20">
                                            <svg width="59" height="66" viewBox="0 0 59 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2344 21.8281C15.101 21.8281 14.9689 21.8543 14.8457 21.9054C14.7224 21.9564 14.6105 22.0312 14.5161 22.1255C14.4218 22.2198 14.347 22.3318 14.296 22.455C14.245 22.5783 14.2187 22.7104 14.2188 22.8438V55.3438C14.2187 55.4771 14.245 55.6092 14.296 55.7325C14.347 55.8557 14.4218 55.9677 14.5161 56.062C14.6105 56.1563 14.7224 56.2311 14.8457 56.2821C14.9689 56.3332 15.101 56.3594 15.2344 56.3594H19.2969C19.4303 56.3594 19.5623 56.3332 19.6856 56.2821C19.8088 56.2311 19.9208 56.1563 20.0151 56.062C20.1094 55.9677 20.1842 55.8557 20.2353 55.7325C20.2863 55.6092 20.3125 55.4771 20.3125 55.3438V22.8438C20.3125 22.7104 20.2863 22.5783 20.2353 22.455C20.1842 22.3318 20.1094 22.2198 20.0151 22.1255C19.9208 22.0312 19.8088 21.9564 19.6856 21.9054C19.5623 21.8543 19.4303 21.8281 19.2969 21.8281H15.2344ZM18.2812 54.3281H16.25V23.8594H18.2812V54.3281Z" fill="#560CE3" />
                                                <path d="M6.09375 21.8281C5.96037 21.8281 5.82828 21.8543 5.70505 21.9054C5.58181 21.9564 5.46983 22.0312 5.37552 22.1255C5.2812 22.2198 5.20639 22.3318 5.15536 22.455C5.10434 22.5783 5.07809 22.7104 5.07812 22.8438V55.3438C5.07809 55.4771 5.10434 55.6092 5.15536 55.7325C5.20639 55.8557 5.2812 55.9677 5.37552 56.062C5.46983 56.1563 5.58181 56.2311 5.70505 56.2821C5.82828 56.3332 5.96037 56.3594 6.09375 56.3594H10.1562C10.2896 56.3594 10.4217 56.3332 10.545 56.2821C10.6682 56.2311 10.7802 56.1563 10.8745 56.062C10.9688 55.9677 11.0436 55.8557 11.0946 55.7325C11.1457 55.6092 11.1719 55.4771 11.1719 55.3438V22.8438C11.1719 22.7104 11.1457 22.5783 11.0946 22.455C11.0436 22.3318 10.9688 22.2198 10.8745 22.1255C10.7802 22.0312 10.6682 21.9564 10.545 21.9054C10.4217 21.8543 10.2896 21.8281 10.1562 21.8281H6.09375ZM9.14062 54.3281H7.10938V23.8594H9.14062V54.3281Z" fill="#560CE3" />
                                                <path d="M24.375 21.8281C24.2416 21.8281 24.1095 21.8543 23.9863 21.9054C23.8631 21.9564 23.7511 22.0312 23.6568 22.1255C23.5625 22.2198 23.4876 22.3318 23.4366 22.455C23.3856 22.5783 23.3593 22.7104 23.3594 22.8438V55.3438C23.3593 55.4771 23.3856 55.6092 23.4366 55.7325C23.4876 55.8557 23.5625 55.9677 23.6568 56.062C23.7511 56.1563 23.8631 56.2311 23.9863 56.2821C24.1095 56.3332 24.2416 56.3594 24.375 56.3594H28.4375C28.5709 56.3594 28.703 56.3332 28.8262 56.2821C28.9494 56.2311 29.0614 56.1563 29.1557 56.062C29.25 55.9677 29.3249 55.8557 29.3759 55.7325C29.4269 55.6092 29.4532 55.4771 29.4531 55.3438V22.8438C29.4532 22.7104 29.4269 22.5783 29.3759 22.455C29.3249 22.3318 29.25 22.2198 29.1557 22.1255C29.0614 22.0312 28.9494 21.9564 28.8262 21.9054C28.703 21.8543 28.5709 21.8281 28.4375 21.8281H24.375ZM27.4219 54.3281H25.3906V23.8594H27.4219V54.3281Z" fill="#560CE3" />
                                                <path d="M57.8906 37.0625C51.8098 37.0625 46.4361 32.2938 46.3826 32.2457C46.1962 32.0776 45.9541 31.9846 45.7032 31.9846C45.4522 31.9846 45.2102 32.0776 45.0238 32.2457C44.9702 32.2938 39.5965 37.0625 33.5156 37.0625C33.3822 37.0625 33.2502 37.0887 33.1269 37.1397C33.0037 37.1908 32.8917 37.2656 32.7974 37.3599C32.7031 37.4542 32.6283 37.5662 32.5772 37.6894C32.5262 37.8127 32.5 37.9447 32.5 38.0781V48.6371C32.5 56.641 37.5504 63.4935 44.7827 65.3011L45.4571 65.4697C45.6187 65.5101 45.7876 65.5101 45.9491 65.4697L46.6235 65.3011C53.8559 63.4935 58.9062 56.641 58.9062 48.6371V38.0781C58.9063 37.9447 58.88 37.8127 58.829 37.6894C58.778 37.5662 58.7032 37.4542 58.6089 37.3599C58.5145 37.2656 58.4026 37.1908 58.2793 37.1397C58.1561 37.0887 58.024 37.0625 57.8906 37.0625ZM56.875 48.6371C56.875 55.7073 52.4574 61.7494 46.1316 63.3304L45.7031 63.4375L45.2747 63.3304C38.9488 61.7494 34.5312 55.7073 34.5312 48.6371V39.0571C39.6897 38.6871 44.0656 35.6184 45.7031 34.3216C47.3406 35.6184 51.7165 38.6871 56.875 39.0571V48.6371Z" fill="#560CE3" />
                                                <path d="M45.1418 37.2395C42.7694 38.8385 40.1323 40.004 37.3529 40.6821C37.1284 40.7332 36.9279 40.859 36.7843 41.0389C36.6407 41.2188 36.5625 41.4423 36.5625 41.6725V48.6371C36.5625 54.5845 40.2065 59.7787 45.4244 61.2679C45.6066 61.3201 45.7997 61.3201 45.9818 61.2679C51.1998 59.7787 54.8438 54.5845 54.8438 48.6371V41.6725C54.8438 41.4422 54.7656 41.2188 54.6219 41.0389C54.4783 40.859 54.2778 40.7332 54.0533 40.6821C51.2739 40.004 48.6368 38.8385 46.2644 37.2395C46.0979 37.1294 45.9027 37.0707 45.7031 37.0707C45.5035 37.0707 45.3083 37.1294 45.1418 37.2395ZM52.8125 42.4674V48.6371C52.8125 53.4935 49.839 57.8962 45.7031 59.2302C41.5672 57.8962 38.5938 53.4935 38.5938 48.6371V42.4674C41.1074 41.7673 43.5032 40.6982 45.7031 39.2951C47.903 40.6982 50.2989 41.7673 52.8125 42.4674Z" fill="#560CE3" />
                                                <path d="M43.3743 48.532C43.1833 48.3444 42.9259 48.2398 42.6582 48.241C42.3904 48.2422 42.134 48.3491 41.9447 48.5384C41.7554 48.7277 41.6485 48.9842 41.6473 49.2519C41.646 49.5196 41.7506 49.777 41.9382 49.968L43.9695 51.9993C44.0637 52.0936 44.1757 52.1685 44.2989 52.2195C44.4221 52.2706 44.5542 52.2968 44.6875 52.2968C44.8209 52.2968 44.953 52.2706 45.0762 52.2195C45.1994 52.1685 45.3113 52.0936 45.4056 51.9993L49.4681 47.9368C49.6566 47.7459 49.7619 47.4883 49.761 47.2201C49.7602 46.9518 49.6532 46.6948 49.4636 46.5052C49.2739 46.3155 49.0169 46.2086 48.7487 46.2078C48.4805 46.2069 48.2228 46.3122 48.032 46.5007L44.6875 49.8451L43.3743 48.532Z" fill="#560CE3" />
                                                <path d="M31.3554 58.1804C30.9743 58.5675 30.5201 58.8751 30.0192 59.0855C29.5184 59.296 28.9808 59.405 28.4375 59.4062H6.09375C5.01666 59.4051 3.98401 58.9767 3.2224 58.2151C2.46078 57.4535 2.0324 56.4208 2.03125 55.3438V22.8438C2.0324 21.7667 2.46078 20.734 3.2224 19.9724C3.98401 19.2108 5.01666 18.7824 6.09375 18.7812H28.4375C29.5146 18.7824 30.5472 19.2108 31.3089 19.9724C32.0705 20.734 32.4989 21.7667 32.5 22.8438V34.0156C32.5 34.285 32.607 34.5433 32.7975 34.7338C32.9879 34.9242 33.2463 35.0312 33.5156 35.0312C33.785 35.0312 34.0433 34.9242 34.2338 34.7338C34.4242 34.5433 34.5312 34.285 34.5312 34.0156V22.8438C34.5295 21.2281 33.8869 19.6792 32.7445 18.5368C31.6021 17.3944 30.0531 16.7518 28.4375 16.75H25.3906V7.60938H28.4375C28.5709 7.60941 28.703 7.58316 28.8262 7.53214C28.9494 7.48111 29.0614 7.4063 29.1557 7.31198C29.25 7.21767 29.3249 7.10569 29.3759 6.98245C29.4269 6.85922 29.4532 6.72713 29.4531 6.59375V1.51562C29.4532 1.38224 29.4269 1.25016 29.3759 1.12692C29.3249 1.00368 29.25 0.891709 29.1557 0.797392C29.0614 0.703076 28.9494 0.628267 28.8262 0.577239C28.703 0.526212 28.5709 0.499965 28.4375 0.5H6.09375C5.96037 0.499965 5.82828 0.526212 5.70505 0.577239C5.58181 0.628267 5.46983 0.703076 5.37552 0.797392C5.2812 0.891709 5.20639 1.00368 5.15536 1.12692C5.10434 1.25016 5.07809 1.38224 5.07812 1.51562V6.59375C5.07809 6.72713 5.10434 6.85922 5.15536 6.98245C5.20639 7.10569 5.2812 7.21767 5.37552 7.31198C5.46983 7.4063 5.58181 7.48111 5.70505 7.53214C5.82828 7.58316 5.96037 7.60941 6.09375 7.60938H9.14062V16.75H6.09375C4.47813 16.7518 2.92919 17.3944 1.78677 18.5368C0.644352 19.6792 0.00176621 21.2281 0 22.8438V55.3438C0.00176621 56.9594 0.644352 58.5083 1.78677 59.6507C2.92919 60.7931 4.47813 61.4357 6.09375 61.4375V63.4688C6.09437 64.0073 6.30857 64.5236 6.68937 64.9044C7.07017 65.2852 7.58647 65.4994 8.125 65.5H11.1719C11.7104 65.4994 12.2267 65.2852 12.6075 64.9044C12.9883 64.5236 13.2025 64.0073 13.2031 63.4688V61.4375H21.3281V63.4688C21.3287 64.0073 21.5429 64.5236 21.9237 64.9044C22.3045 65.2852 22.8208 65.4994 23.3594 65.5H26.4062C26.9448 65.4994 27.4611 65.2852 27.8419 64.9044C28.2227 64.5236 28.4369 64.0073 28.4375 63.4688V61.4375C29.2476 61.4369 30.0496 61.2757 30.7969 60.9631C31.5443 60.6505 32.2223 60.1928 32.7916 59.6165C32.9801 59.4256 33.0854 59.168 33.0845 58.8997C33.0837 58.6315 32.9767 58.3745 32.7871 58.1849C32.5974 57.9952 32.3404 57.8883 32.0722 57.8874C31.8039 57.8866 31.5463 57.9919 31.3554 58.1804ZM19.2969 7.60938V16.75H15.2344V7.60938H19.2969ZM23.3594 16.75H21.3281V7.60938H23.3594V16.75ZM7.10938 2.53125H27.4219V5.57812H7.10938V2.53125ZM11.1719 7.60938H13.2031V16.75H11.1719V7.60938ZM11.1719 63.4688H8.125V61.4375H11.1719V63.4688ZM26.4062 63.4688H23.3594V61.4375H26.4062V63.4688Z" fill="#560CE3" />
                                            </svg>
                                        </span>
                                        <div class="tg-chose-list-content">
                                            <h4 class="tg-chose-list-title mb-15">{{@$homeabout->title2}}</h4>
                                            <p>{{@$homeabout->title2_content}}</p>
                                        </div>
                                    </div>
                                    <div class="tg-chose-list d-flex mb-25">
                                        <span class="tg-chose-list-icon mr-20">
                                            <svg width="52" height="59" viewBox="0 0 52 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25.6 58.2C24.48 58.2 23.39 58 22.36 57.59C8.98 52.41 0 39.21 0 24.76V10.98C0 10.06 0.71 9.31 1.62 9.27C9.21 8.97 16.94 5.96 24.6 0.32C24.9 0.11 25.24 0 25.6 0C25.96 0 26.3 0.11 26.6 0.33C34.26 5.97 41.99 8.98 49.58 9.28C50.49 9.32 51.2 10.06 51.2 10.99V26.1C51.2 39.96 43.22 52.01 30.87 56.8L28.84 57.59C27.8 58 26.71 58.2 25.6 58.2ZM25.37 3.97C18.22 8.98 10.94 11.87 3.74 12.56L3.38 12.59V24.76C3.38 37.81 11.49 49.72 23.57 54.4C24.22 54.65 24.9 54.78 25.6 54.78C26.3 54.78 26.98 54.65 27.64 54.4L29.67 53.61C40.7 49.33 47.83 38.53 47.83 26.1V12.59L47.47 12.56C40.26 11.87 32.99 8.98 25.84 3.97L25.6 3.8L25.37 3.97Z" fill="#560CE3" />
                                                <path d="M22.8 38.02C22.35 38.02 21.93 37.84 21.61 37.52L14.22 30.06C13.56 29.39 13.56 28.31 14.22 27.64C14.54 27.32 14.96 27.14 15.41 27.14C15.86 27.14 16.28 27.32 16.6 27.64L22.8 33.89L34.6 22C34.92 21.68 35.34 21.5 35.79 21.5C36.24 21.5 36.66 21.68 36.98 22C37.64 22.67 37.64 23.75 36.98 24.42L23.98 37.53C23.67 37.84 23.25 38.02 22.8 38.02Z" fill="#560CE3" />
                                            </svg>
                                        </span>
                                        <div class="tg-chose-list-content">
                                            <h4 class="tg-chose-list-title mb-15">{{@$homeabout->title3}}</h4>
                                            <p>{{@$homeabout->title3_content}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8">
                        <div class="tg-chose-su-2-main-thumb text-end p-relative wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".9s">
                            <img class="tg-chose-su-2-main-shape d-none d-sm-block" src="{{url('')}}/assets/img/chose/su/circle-text.png" alt="">
                            <img class="w-100" src="{{url('public/media/uploads/content/'.@$homeabout->side_image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tg-location-area p-relative z-index-1 pb-65 pt-70">
            <div class="tg-location-su-bg">
                <img src="{{url('')}}/assets/img/destination/tu/bg.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-30">
                            <h5 class="tg-section-su-subtitle mb-15 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">Best Places near at you</h5>
                            <h2 class="tg-section-su-title text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">International Tour Packages</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation tg-location-su-slider-navigation text-end mb-30 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-su-slider">
                            <div class="swiper-wrapper">

                                @php
                                $country = DB::Table('country')->where('status',1)->get();
                                @endphp
                                @foreach($country as $data)
                                <div class="swiper-slide">
                                    <div class="tg-location-3-wrap  tg-location-su-wrap  p-relative mb-30 tg-round-25">
                                        <div class="tg-location-thumb tg-round-25">
                                            <img class="w-100 tg-round-25" src="{{url('public/media/uploads/country/'.@$data->image)}}" alt="{{@$data->name}}">
                                        </div>
                                        <div class="tg-location-content tg-location-su-content">
                                            <div class="content">
                                                <h3 class="tg-location-title mb-5"><a href="{{@$data->slug}}">{{@$data->name}}</a></h3>
                                                <span class="tg-location-su-duration">05 Tours</span>
                                            </div>
                                            <a class="icons" href="{{@$data->slug}}">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 13.0969L13.0969 2M13.0969 2H2M13.0969 2V13.0969" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="tg-location-area pt-70 pb-70 tg-grey-bg p-relative z-index-1">
            <img class="tg-location-shape d-none d-xl-block" src="{{url('')}}/assets/img/location/shape-2.png" alt="">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-40">
                            <h5 class="tg-section-subtitle mb-15 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">Next Adventure Destination</h5>
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Popular Travel Destinations <br> Available Worldwide</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation text-end mb-50 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-5-slider p-relative fix">
                            <div class="swiper-wrapper">

                                @php
                                $city = DB::Table('city')->where('status',1)->get();
                                @endphp
                                @foreach($city as $data)

                                <div class="swiper-slide">
                                    <div class="gallery_item-wrap Russia">
                                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                                <div class="bt_bb_grid_item_post_thumbnail">
                                                    <a href="{{@$data->slug}}" title="{{@$data->name}}">
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$data->image)}}">
                                                    </a>
                                                </div>
                                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{@$data->name}}</h5><div class="bt_bb_grid_item_post_excerpt">{{@$data->content}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{@$data->name}}</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- tg-listing-area-start -->
        <div class="tg-listing-area tg-grey-bg pt-70 pb-70 p-relative z-index-9">
            <img class="tg-listing-2-shape d-none d-sm-block" src="{{url('')}}/assets/img/listing/listing-2/shape-1.png" alt="">
            <img class="tg-listing-2-shape-2 d-none d-xl-block" src="{{url('')}}/assets/img/listing/listing-2/shape-2.png" alt="">
            <img class="tg-listing-2-shape-3 d-none d-sm-block" src="{{url('')}}/assets/img/listing/listing-2/shape-3.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-listing-section-title text-center mb-35">
                            <h5 class="tg-section-subtitle wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".6s">Most Popular Tour Packages </h5>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">Something Amazing Waiting For you</h2>
                            <p class="text-capitalize wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">Are you tired of the typical tourist destinations and looking<br> 
                                to step out of your comfort zonetravel</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @php
                    $package = DB::Table('package')->where('status',1)->get();
                    @endphp
                    @foreach($package as $data)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".6s">
                        <div class="tg-listing-card-item tg-listing-2-card-item mb-25">
                            <div class="tg-listing-card-thumb tg-listing-2-card-thumb fix p-relative">
                                <a href="{{url(@$data->slug)}}" class="tour-one__image">
                                  <div class="flip-box">
                                    <div class="flip-inner">
                                      <img src="{{url('public/media/uploads/package/'.@$data->image)}}" alt="{{@$data->name}}">
                                    </div>
                                  </div>
                                </a>

                                <div class="tg-listing-2-mask">
                                    <img class="w-100" src="{{url('')}}/assets/img/listing/listing-2/shape.png" alt="">
                                </div>
                                
                            </div>
                            <div class="tg-listing-card-content p-relative">
                                <div class="tg-listing-2-price-wrap text-center">
                                    <div class="tg-listing-2-price">
                                        <span class="new">₹ {{@$data->price}}</span>
                                        <span class="shift">PP/(On Twin Sharing)</span>
                                    </div>
                                </div>
                                <h4 class="tg-listing-card-title"><a href="{{url(@$data->slug)}}">{{@$data->name}}</a></h4>
                                <div class="tg-listing-card-review mb-5">
                                     <?php 
                                     $i=1;
                                     while($i<=5){ 
                                     if($i<=$data->rating)
                                     {
                                     ?>
                                    <span class="tg-listing-rating-icon"><i class="fa-sharp fa-solid fa-star"></i></span>
                                     <?php }  $i++; } ?>
                                    {{-- <span class="tg-listing-rating-percent">(5 Reviews)</span> --}}
                                </div>
                                <div class="tg-listing-card-duration-tour">
                                    <span class="tg-listing-card-duration-time mb-5">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.00175 3.73329V7.99996L10.8462 9.42218M15.1128 8.00003C15.1128 11.9274 11.9291 15.1111 8.00174 15.1111C4.07438 15.1111 0.890625 11.9274 0.890625 8.00003C0.890625 4.07267 4.07438 0.888916 8.00174 0.888916C11.9291 0.888916 15.1128 4.07267 15.1128 8.00003Z" stroke="currentColor" stroke-width="1.06667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        {{@$data->duration}}
                                    </span>

                                    <span class="tg-listing-card-duration-map ">
                                        {{@$data->departures}}
                                    </span>                                    
                                </div>

                                <div class="d-flex justify-content-between mt-2 align-items-center">
                                    <a href="{{url(@$data->slug)}}" class="blue-color">Details</a>
                                    <a href="{{url(@$data->slug)}}" class="red-color">Book Online</a>
                                    <a href="javascript:void(0)" class="blue-color" onclick="open_model('{{@$data->name}}')">Enquiry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach

                   

                    

                    <div class="col-12 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".6s">
                        <div class="tg-listing-2-btn text-center pt-25">
                            <a href="{{url('packages')}}" class="tg-btn tg-btn-switch-animation">
                                <span class="d-flex align-items-center justify-content-center">
                                   <span class="btn-text">See All </span>
                                   <span class="btn-icon ml-5">
                                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.0017 8.00001H19.9514M19.9514 8.00001L12.9766 1.02515M19.9514 8.00001L12.9766 14.9749" stroke="white" stroke-width="1.77778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                                   <span class="btn-icon ml-5">
                                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.0017 8.00001H19.9514M19.9514 8.00001L12.9766 1.02515M19.9514 8.00001L12.9766 14.9749" stroke="white" stroke-width="1.77778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                               </span> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-listing-area-end -->



     

        <!-- tg-banner-area-start -->

@php
$explorebanner = DB::Table('content')->where('id',6)->first();
@endphp

        <div class="tg-banner-area tg-banner-4-spacing" data-background="{{url('public/media/uploads/content/'.@$explorebanner->image)}}">
            <div class="container">
                <div class="col-lg-12">
                    <div class="tg-banner-2-content tg-banner-4-content text-center">
                        <div class="tg-about-section-title mb-25">
                            <h5 class="tg-section-subtitle mb-20 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">{{@$explorebanner->sub_title}}</h5>
                            <h2 class="tg-section-title-white mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">{{@$explorebanner->title}}</h2>
                        </div>
                        <div class="tp-banner-btn-wrap wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".9s">
                            <a href="{{@$explorebanner->url}}" class="tg-btn tg-btn-transparent tg-btn-switch-animation">
                                <span class="d-flex align-items-center justify-content-center">
                                   <span class="btn-text">Book Your Trip Now</span>
                                   <span class="btn-icon ml-5">
                                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.0017 8.00001H19.9514M19.9514 8.00001L12.9766 1.02515M19.9514 8.00001L12.9766 14.9749" stroke="currentColor" stroke-width="1.77778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                                   <span class="btn-icon ml-5">
                                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.0017 8.00001H19.9514M19.9514 8.00001L12.9766 1.02515M19.9514 8.00001L12.9766 14.9749" stroke="currentColor" stroke-width="1.77778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                               </span> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-banner-bottom pb-150">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tg-banner-2-big-title text-center wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">
                                <h2>{{@$explorebanner->bottom_title}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- tg-banner-area-end -->

       
        <!-- tg-cta-area-start -->
      {{--   <div class="tg-cta-area-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tg-cta-4-spacing tg-primary-bg p-relative z-index-1">
                            <img class="tg-cta-3-shape-2 d-none d-md-block" src="{{url('')}}/assets/img/cta/cta-3/shape-2.png" alt="">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tg-cta-4-thumb mr-25 p-relative z-index-1  pt-85 ">
                                        <img class="w-100" src="{{url('')}}/assets/img/cta/cta-4/thumb.png" alt="">
                                        <img class="tg-cta-3-shape rotate-infinite" src="{{url('')}}/assets/img/cta/cta-3/shape.png" alt="shape">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tg-cta-4-content mb-20 pt-15">
                                        <h2 class="mb-15 tg-cta-title text-white text-capitalize mb-15">Get 5% off on your First app<br> booking Travel with us</h2>
                                        <p class="text-white">Are you tired of the typical tourist destinations and looking 
                                            comfort zonetravelAre you tired of the typical tourist destin
                                            to step out of your comfort zonetravel</p>
                                        <div class="tg-cta-3-apps pt-15 d-flex align-items-center">
                                            <a class="mb-10 d-inline-block mr-10" href="#"><img src="{{url('')}}/assets/img/cta/google.png" alt=""></a>
                                            <a class="mb-10 d-inline-block" href="#"><img src="{{url('')}}/assets/img/cta/app.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div> --}}
        <!-- tg-cta-area-end -->

        <!-- td-testimonial-area-start -->
        <div class="tg-testimonial-area tg-testimonial-su-2 pt-0 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-8">
                        <div class="tg-location-section-title text-center mb-40">
                            <h5 class="tg-section-su-subtitle su-subtitle-2 mb-20 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">Clients Feedback About Us</h5>
                            <h2 class="tg-section-su-title text-capitalize wow fadeInUp mb-15" data-wow-delay=".5s" data-wow-duration=".9s">See Those Lovely Words From Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container tg-testimonial-slider fix">
                        <div class="swiper-wrapper">
                            @php
                            $testimonials = DB::Table('testimonials')->where('status',1)->limit(15)->orderBy('id','desc')->get();
                            @endphp
                            @foreach($testimonials as $key => $data)
                            <div class="swiper-slide">
                                <div class="tg-testimonial-item mb-30">
                                    <div class="tg-testimonial-avatar-top d-flex align-items-start justify-content-between">
                                        <div class="tg-testimonial-avatar-inner d-flex align-items-center mr-20 mb-20">
                                            <div class="tg-testimonial-avatar-thumb mr-15">
                                                <img class="rounded-circale" src="{{url('public/media/uploads/testimonials/'.@$data->image)}}" alt="avatar">
                                            </div>
                                            <div class="tg-testimonial-avatar-content">
                                                <h5>{{@$data->name}}</h5>
                                                <span>{{@$data->position}}</span>
                                            </div>
                                        </div>
                                        <div class="tg-testimonial-avatar-qoute">
                                            <span>
                                                <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.23438 33.5V28.4177L2.53846 28.1579L2.53874 28.1578C5.54288 27.5574 7.72911 26.3475 8.91074 24.4843L8.91078 24.4843L8.91406 24.479C9.51081 23.5115 9.85009 22.4074 9.89965 21.2718L9.92242 20.75H9.40013H2.85938C2.4284 20.75 2.01507 20.5788 1.71033 20.274C1.40558 19.9693 1.23438 19.556 1.23438 19.125V4.25C1.23438 2.18227 2.91664 0.5 4.98438 0.5H17.7344C18.1654 0.5 18.5787 0.671205 18.8834 0.975951C19.1882 1.2807 19.3594 1.69402 19.3594 2.125V19.125V19.1745L19.364 19.1976C19.3646 19.2056 19.3653 19.2163 19.3661 19.2296C19.3684 19.2694 19.3713 19.3294 19.3734 19.4081C19.3776 19.5653 19.3788 19.795 19.3678 20.0841C19.3458 20.6626 19.275 21.4756 19.0821 22.419C18.696 24.3079 17.8253 26.7003 15.8985 28.7905L1.23438 33.5ZM1.23438 33.5H2.85938C8.68388 33.5 13.0411 31.8881 15.8984 28.7906L1.23438 33.5ZM24.6243 33.5V28.4177L25.9283 28.1579L25.9286 28.1578C28.9328 27.5574 31.119 26.3475 32.3006 24.4843L32.3007 24.4843L32.3039 24.479C32.9007 23.5115 33.24 22.4074 33.2895 21.2718L33.3123 20.75H32.79H26.2493C25.8183 20.75 25.4049 20.5788 25.1002 20.274C24.7955 19.9693 24.6243 19.556 24.6243 19.125V4.25C24.6243 2.18227 26.3065 0.5 28.3743 0.5H41.1242C41.5552 0.5 41.9686 0.671206 42.2733 0.975951C42.578 1.2807 42.7492 1.69402 42.7492 2.125V19.125V19.1745L42.7538 19.1975C42.7544 19.2056 42.7551 19.2162 42.7559 19.2294C42.7583 19.2692 42.7611 19.3292 42.7631 19.4079C42.7673 19.5651 42.7685 19.7949 42.7574 20.084C42.7353 20.6625 42.6642 21.4755 42.4712 22.419C42.0848 24.3079 41.2141 26.7003 39.2884 28.7905C36.4311 31.8881 32.0738 33.5 26.2493 33.5H24.6243ZM19.3623 19.1774C19.3622 19.176 19.3623 19.1773 19.3628 19.1823C19.3625 19.1799 19.3623 19.1782 19.3623 19.1774Z" stroke="#D1D1D1" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <p class="tg-testimonial-avatar-para mb-10">“  {{@$data->content}} ”</p>
                                   {{--  <div class="tg-testimonial-ratings">
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    </div> --}}
                                </div>
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- td-testimonial-area-end -->

        <!-- brands-area-start -->
        <div class="tg-brand-area pb-115 z-index-1">
            <div class="container">
                <div class="row">
                    <div class="tg-brand-wrap">
                        <div class="swiper-container tg-brand-slide fix">
                            <div class="swiper-wrapper slide-transtion">
                                @php
                                $partner = DB::Table('partner')
                                        ->where('status',1)
                                        ->orderBy('id','desc')
                                        ->get();
                                @endphp
                                @foreach($partner as $key => $data)
                                <div class="swiper-slide">
                                    <div class="tg-brand-items">
                                        <a href="#!"><img src="{{url('public/media/uploads/partner/'.$data->image)}}" alt="logo"></a>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brands-area-end -->        

        <!-- blog-area-start -->
        <div class="tg-blog-area pt-70 pb-70 include-bg p-relative z-index-1" data-background="{{url('')}}/assets/img/blog/blog-4/blog.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tg-location-section-title text-center mb-30">
                            <h5 class="tg-section-subtitle mb-15 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".9s">Blog And Article</h5>
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">Latest News & Articles</h2>
                            <p class="text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Are you tired of the typical tourist destinations and looking<br> 
                                to step out of your comfort zonetravel</p>
                        </div>
                    </div>

                    @php
                    $query = DB::table('blog')->where('status', 1)->limit(3);
                    $blog = $query->orderBy('id', 'desc')->get();
                    @endphp
                    @foreach($blog as $key => $data)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration=".9s">
                        <div class="tg-blog-item tg-blog-2-item mb-25">
                            <div class="tg-blog-thumb p-relative fix mb-20">
                                <a href="{{$data->slug}}"><img class="w-100" src="{{url('public/media/uploads/blog/'.$data->image)}}" alt="{{@$data->name}}"></a>
                            </div>
                            <div class="tg-blog-content  p-relative">
                                <h3 class="tg-blog-title"><a href="{{$data->slug}}">{{@$data->name}}</a></h3>
                                <div class="tg-blog-date mb-10">
                                    <span class="mr-20"><i class="fa-light fa-calendar"></i> {!! date('d M, Y',strtotime($data->addeddate)) !!}</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach

                    <div class="col-12 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                        <div class="tg-blog-bottom text-center pt-15">
                            <p>Want to see our Recent News & Updates. <a href="{{url('blog')}}">Click here to View More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->

@include('footer')