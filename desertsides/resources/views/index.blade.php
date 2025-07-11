@include("wp-includes/header")
        
        <link rel='stylesheet' id='elementor-post-4-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4.css?ver=1744872227' media='all' />

        <link rel='stylesheet' id='elementor-post-45-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-45b190.css?ver=1744872278' media='all' />
        <link rel='stylesheet' id='elementor-post-64-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-64.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-264-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-26489dc.css?ver=1744872230' media='all' />

        <link rel='stylesheet' id='elementor-post-4773-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-477389dc.css?ver=1744872230' media='all' />

    @include("wp-includes/header-bottom")


    <body class="wp-singular page-template page-template-template-homepage page-template-template-homepage-php page page-id-45 wp-custom-logo wp-embed-responsive wp-theme-spaciaz wp-child-theme-demo-child ehf-header ehf-footer ehf-template-spaciaz ehf-stylesheet-demo-child chrome theme-spaciaz no-wc-breadcrumb elementor-default elementor-kit-4 elementor-page elementor-page-45">
        <div id="page" class="hfeed site">
            
            @include("wp-includes/header-navbar")

            <div id="content" class="site-content-page clear" tabindex="-1">
                <div class="col-fluid">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div data-elementor-type="wp-page" data-elementor-id="45" class="elementor elementor-45">

                                <section class="banner_swiper">
                                <nav thumbsNavbar="" class="swiper_btn swiper">
                                    <div class="swiper-wrapper">
                                    @php
                                    $slider = DB::Table('slider')->where('status',1)->get();
                                    @endphp
                                    @foreach($slider as $key => $data)
                                      <div class="swiper-slide">
                                        <button button>SLIDE <?=$key+1 ?></button>
                                      </div>
                                    @endforeach
                                  
                                    </div>
                                  </nav>
                                  
                                  <div thumbsContent class="banner_area swiper">
                                    <div class="swiper-wrapper">
                                        @php
                                        $slider = DB::Table('slider')->where('status',1)->get();
                                        @endphp
                                        @foreach($slider as $data)

                                      <div class="swiper-slide">
                                        <img src="{{url('public/media/uploads/slider/'.$data->image)}}" loading="lazy" alt="{{env('website_name')}}" />
                                      </div>
                                      @endforeach
                                  
                                    </div>
                                    
                                  </div>
                                </section>

                               

                                <div class="elementor-element elementor-element-96a5443 e-flex e-con-boxed e-con e-parent" data-id="96a5443" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-10d5b65 e-con-full e-flex e-con e-child" data-id="10d5b65" data-element_type="container">
                                            <div class="elementor-element elementor-element-152b739 box-width-yes elementor-widget__width-initial animated-fast spaciaz-scrolling-ltr elementor-invisible elementor-widget elementor-widget-spaciaz-slide-scrolling" data-id="152b739" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-helix&quot;}" data-widget_type="spaciaz-slide-scrolling.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-scrolling">
                                                        <div class="elementor-scrolling-wrapper">
                                                            <div class="elementor-scrolling-inner">
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                            <a href="#"  title="who we are"><span>who we are</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-9398599">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                            <a href="#"  title="who we are"><span>who we are</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-194a249">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-scrolling-inner">
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                            <a href="#"  title="who we are"><span>who we are</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-9398599">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                            <a href="#"  title="who we are"><span>who we are</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-194a249">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-scrolling-inner">
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                            <a href="#"  title="who we are"><span>who we are</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-9398599">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                            <a href="#"  title="who we are"><span>who we are</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-194a249">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-145be92 e-con-full e-flex e-con e-child" data-id="145be92" data-element_type="container">
                                            <div class="elementor-element elementor-element-ca4325e animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="ca4325e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Creating An Innovative Future</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6350aee e-grid e-con-boxed e-con e-parent" data-id="6350aee" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-831cbad e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="831cbad" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;opal-move-right&quot;}">
                                            <div class="elementor-element elementor-element-2243224 elementor-widget elementor-widget-heading" data-id="2243224" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">01.</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5ac469b e-con-full e-flex e-con e-child" data-id="5ac469b" data-element_type="container">
                                                <div class="elementor-element elementor-element-1db4008 elementor-widget elementor-widget-heading" data-id="1db4008" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">Why DSI</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f3692b6 elementor-widget elementor-widget-text-editor" data-id="f3692b6" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Company in the kingdom and since its renaissance in 2009, DSI has always been a key contributor to Saudi Arabia construction sector.</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3e1cecc elementor-button-link line-effect-yes elementor-widget elementor-widget-spaciaz-button" data-id="3e1cecc" data-element_type="widget" data-widget_type="spaciaz-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="why-dsi.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text" data-name="Our Solutions">
                                                            <span>Know more</span>
                                                            </span>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-dce7c4d elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer" data-id="dce7c4d" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;spaciaz_decor_top_right&quot;:&quot;yes&quot;,&quot;spaciaz_decor_bottom_left&quot;:&quot;yes&quot;}" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5ff4a38 elementor-button-default enable-style-icon-yes elementor-absolute icon-spaciaz-right elementor-widget elementor-widget-spaciaz-button" data-id="5ff4a38" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spaciaz-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="about-us/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                        <span class="btn-icon-wrap">
                                                        <span class="btn-icon">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        <span class="btn-icon-hover">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        </span>
                                                        </span>
                                                        <span class="elementor-button-text" data-name="">
                                                        <span></span>
                                                        </span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a72c663 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="a72c663" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;opal-move-up&quot;}">
                                            <div class="elementor-element elementor-element-bb28e0f elementor-widget elementor-widget-heading" data-id="bb28e0f" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">02.</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ff58b5c e-con-full e-flex e-con e-child" data-id="ff58b5c" data-element_type="container">
                                                <div class="elementor-element elementor-element-0f21fe9 elementor-widget elementor-widget-heading" data-id="0f21fe9" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">Let's Work Together</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-020563e elementor-widget elementor-widget-text-editor" data-id="020563e" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>We are always up to discover new talents, kindly mail us your resume and portfolio link to</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-95e9406 elementor-button-link line-effect-yes elementor-widget elementor-widget-spaciaz-button" data-id="95e9406" data-element_type="widget" data-widget_type="spaciaz-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="careers.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text" data-name="See Projects">
                                                            <span>Apply now</span>
                                                            </span>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a2da9a3 elementor-absolute elementor-widget elementor-widget-image" data-id="a2da9a3" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img fetchpriority="high" decoding="async" width="351" height="272" src="{{url('')}}/wp-content/uploads/2025/03/h3_img-1.png" class="attachment-full size-full wp-image-841" alt="" srcset="{{url('')}}/wp-content/uploads/2025/03/h3_img-1.png 351w, /wp-content/uploads/2025/03/h3_img-1-300x232.png 300w" sizes="(max-width: 351px) 100vw, 351px" />															
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e0158d4 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer" data-id="e0158d4" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;spaciaz_decor_top_right&quot;:&quot;yes&quot;,&quot;spaciaz_decor_bottom_left&quot;:&quot;yes&quot;}" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-958f875 elementor-button-default enable-style-icon-yes elementor-absolute icon-spaciaz-right elementor-widget elementor-widget-spaciaz-button" data-id="958f875" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spaciaz-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="projects/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                        <span class="btn-icon-wrap">
                                                        <span class="btn-icon">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        <span class="btn-icon-hover">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        </span>
                                                        </span>
                                                        <span class="elementor-button-text" data-name="">
                                                        <span></span>
                                                        </span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-de0c0e5 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="de0c0e5" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;opal-move-left&quot;}">
                                            <div class="elementor-element elementor-element-9fc20c8 elementor-widget elementor-widget-heading" data-id="9fc20c8" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">03.</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8ed3159 e-con-full e-flex e-con e-child" data-id="8ed3159" data-element_type="container">
                                                <div class="elementor-element elementor-element-6f6390f elementor-widget elementor-widget-heading" data-id="6f6390f" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">Core values</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-75edd92 elementor-widget elementor-widget-text-editor" data-id="75edd92" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>We align our services with changing trends and are proud to be a preferred partner who encourages high expectations, sets ambitious goals</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cdc373c elementor-button-link line-effect-yes elementor-widget elementor-widget-spaciaz-button" data-id="cdc373c" data-element_type="widget" data-widget_type="spaciaz-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="our-company.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text" data-name="Discover more">
                                                            <span>Our motto</span>
                                                            </span>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9f66e40 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer" data-id="9f66e40" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;spaciaz_decor_top_right&quot;:&quot;yes&quot;,&quot;spaciaz_decor_bottom_left&quot;:&quot;yes&quot;}" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4edc022 elementor-button-default enable-style-icon-yes elementor-absolute icon-spaciaz-right elementor-widget elementor-widget-spaciaz-button" data-id="4edc022" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spaciaz-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="core-values/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                        <span class="btn-icon-wrap">
                                                        <span class="btn-icon">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        <span class="btn-icon-hover">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        </span>
                                                        </span>
                                                        <span class="elementor-button-text" data-name="">
                                                        <span></span>
                                                        </span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="elementor-element elementor-element-5cba0f9 e-con-full e-flex e-con e-parent" data-id="5cba0f9" data-element_type="container">
                                    <div class="elementor-element elementor-element-4a98d68 elementor-absolute elementor-widget elementor-widget-image" data-id="4a98d68" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;laptop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;],&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="2000" height="1125" src="{{url('')}}/wp-content/uploads/2025/04/h3_bg-1.jpg" class="attachment-full size-full wp-image-5732" alt="" srcset="{{url('')}}/wp-content/uploads/2025/04/h3_bg-1.jpg 2000w, wp-content/uploads/2025/04/h3_bg-1.jpg 300w, wp-content/uploads/2025/04/h3_bg-1.jpg 1024w, wp-content/uploads/2025/04/h3_bg-1.jpg 768w, wp-content/uploads/2025/04/h3_bg-1.jpg 1536w" sizes="(max-width: 2000px) 100vw, 2000px" />															
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bcd9f63 e-grid e-con-boxed e-con e-child" data-id="bcd9f63" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-4b217e6 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="4b217e6" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;}">
                                                <div class="elementor-element elementor-element-804922e elementor-widget__width-initial elementor-absolute rotate elementor-view-default elementor-widget elementor-widget-icon" data-id="804922e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <div class="elementor-icon">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5318093 elementor-widget elementor-widget-counter" data-id="5318093" data-element_type="widget" data-widget_type="counter.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-counter">
                                                            <div class="elementor-counter-title">Happy <br> Clients</div>
                                                            <div class="elementor-counter-number-wrapper">
                                                                <span class="elementor-counter-number-prefix"></span>
                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="48" data-from-value="0" data-delimiter=",">0</span>
                                                                <span class="elementor-counter-number-suffix"><sup>+</sup></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b4ecfac e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="b4ecfac" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;}">
                                                <div class="elementor-element elementor-element-07291dc elementor-widget__width-initial elementor-absolute rotate elementor-view-default elementor-widget elementor-widget-icon" data-id="07291dc" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <div class="elementor-icon">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0179836 elementor-widget elementor-widget-counter" data-id="0179836" data-element_type="widget" data-widget_type="counter.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-counter">
                                                            <div class="elementor-counter-title">Successful <br> Projects</div>
                                                            <div class="elementor-counter-number-wrapper">
                                                                <span class="elementor-counter-number-prefix"></span>
                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="52" data-from-value="0" data-delimiter=",">0</span>
                                                                <span class="elementor-counter-number-suffix"><sup>+</sup></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5ce92eb e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="5ce92eb" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;}">
                                                <div class="elementor-element elementor-element-87e32bb elementor-widget__width-initial elementor-absolute rotate elementor-view-default elementor-widget elementor-widget-icon" data-id="87e32bb" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <div class="elementor-icon">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-58e63f0 elementor-widget elementor-widget-counter" data-id="58e63f0" data-element_type="widget" data-widget_type="counter.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-counter">
                                                            <div class="elementor-counter-title">Satisfied <br> Customer</div>
                                                            <div class="elementor-counter-number-wrapper">
                                                                <span class="elementor-counter-number-prefix"></span>
                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="2.3" data-from-value="0" data-delimiter=",">0</span>
                                                                <span class="elementor-counter-number-suffix">b<sup>+</sup></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c7528a3 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="c7528a3" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;}">
                                                <div class="elementor-element elementor-element-93cb7a1 elementor-widget__width-initial elementor-absolute rotate elementor-view-default elementor-widget elementor-widget-icon" data-id="93cb7a1" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <div class="elementor-icon">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3548d4c elementor-widget elementor-widget-counter" data-id="3548d4c" data-element_type="widget" data-widget_type="counter.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-counter">
                                                            <div class="elementor-counter-title">Completed <br> Projects</div>
                                                            <div class="elementor-counter-number-wrapper">
                                                                <span class="elementor-counter-number-prefix"></span>
                                                                <span class="elementor-counter-number" data-duration="2000" data-to-value="18" data-from-value="0" data-delimiter=",">0</span>
                                                                <span class="elementor-counter-number-suffix">m<sup>+</sup></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-elementor-parallax" data-id="bcd9f63" data-settings="{&quot;type&quot;:&quot;scroll&quot;,&quot;speed&quot;:&quot;1.2&quot;,&quot;keepImg&quot;:&quot;true&quot;,&quot;imgSize&quot;:&quot;cover&quot;,&quot;imgPosition&quot;:&quot;50% 0%&quot;,&quot;noAndroid&quot;:&quot;false&quot;,&quot;noIos&quot;:&quot;false&quot;}"></div>
                                </div>
                                <div class="elementor-element elementor-element-31c53cb e-flex e-con-boxed e-con e-parent" data-id="31c53cb" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-9da093e e-con-full e-flex e-con e-child" data-id="9da093e" data-element_type="container" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;laptop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;],&quot;sticky_offset&quot;:30,&quot;sticky_parent&quot;:&quot;yes&quot;,&quot;sticky_effects_offset&quot;:0}">
                                            <div class="elementor-element elementor-element-295a6e6 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="295a6e6" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;opal-move-up&quot;}">
                                                <div class="elementor-element elementor-element-4da4432 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="4da4432" data-element_type="widget" data-settings="{&quot;spaciaz_decor_top_left&quot;:&quot;yes&quot;,&quot;spaciaz_decor_bottom_right&quot;:&quot;yes&quot;}" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-947e412 box-width-yes elementor-widget__width-initial animated-fast spaciaz-scrolling-ltr elementor-invisible elementor-widget elementor-widget-spaciaz-slide-scrolling" data-id="947e412" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="spaciaz-slide-scrolling.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-scrolling">
                                                        <div class="elementor-scrolling-wrapper">
                                                            <div class="elementor-scrolling-inner">
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                            <a href="#"  title="Our commitment"><span>Our commitment</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-9398599">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                            <a href="#"  title="Our commitment"><span>Our commitment</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-194a249">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-scrolling-inner">
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                            <a href="#"  title="Our commitment"><span>Our commitment</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-9398599">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                            <a href="#"  title="Our commitment"><span>Our commitment</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-194a249">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-scrolling-inner">
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                            <a href="#"  title="Our commitment"><span>Our commitment</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-9398599">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                            <a href="#"  title="Our commitment"><span>Our commitment</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-scrolling-item">
                                                                    <div class="elementor-scrolling-item-inner">
                                                                        <div class="scrolling-title elementor-repeater-item-194a249">
                                                                            <a href="#"  title="·"><span>·</span></a>                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ee07076 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="ee07076" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Committed To Superior Quality</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8e05f75 enable-style-icon-yes animated-fast elementor-button-outline icon-spaciaz-right elementor-invisible elementor-widget elementor-widget-spaciaz-button" data-id="8e05f75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="spaciaz-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="core-values/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                        <span class="btn-icon-wrap">
                                                        <span class="btn-icon">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        <span class="btn-icon-hover">
                                                        <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                        </span>
                                                        </span>
                                                        <span class="elementor-button-text" data-name="learn more">
                                                        <span>learn more</span>
                                                        </span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b8bcd02 e-con-full e-grid e-con e-child" data-id="b8bcd02" data-element_type="container">
                                            <div class="elementor-element elementor-element-6da845c elementor-view-stacked show-divider-yes animated-fast elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="6da845c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-am-popup&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span  class="elementor-icon">
                                                            <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-like"></i>				</span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span>Professional Services</span>
                                                            </h5>
                                                            <p class="elementor-icon-box-description">
                                                                DSI is a reliable and innovative manufacturer, service and solution provider.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f319bf2 elementor-view-stacked show-divider-yes animated-fast elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="f319bf2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-am-popup&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span  class="elementor-icon">
                                                            <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-people"></i>				</span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span>Committed to Integrity</span>
                                                            </h5>
                                                            <p class="elementor-icon-box-description">
                                                                We have set our sights on a future of further growth and development.				
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2626888 elementor-view-stacked show-divider-yes animated-fast elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="2626888" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-am-popup&quot;,&quot;_animation_delay&quot;:150}" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span  class="elementor-icon">
                                                            <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-shield-tick"></i>				</span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span>Quality Policy</span>
                                                            </h5>
                                                            <p class="elementor-icon-box-description">
                                                                We access the requirements to produce products of the highest standards.				
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d6d7825 elementor-view-stacked show-divider-yes animated-fast elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="d6d7825" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-am-popup&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span  class="elementor-icon">
                                                            <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-share"></i>				</span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span  >
                                                                Diversity, Equity & <br>  Inclusion						</span>
                                                            </h5>
                                                            <p class="elementor-icon-box-description">
                                                                We maintain this by ensuring transparency and professional conduct in every aspect.					
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d7d188e elementor-view-stacked show-divider-yes animated-fast elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="d7d188e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-am-popup&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span  class="elementor-icon">
                                                            <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-medal-star"></i>				</span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span  >
                                                                Construction and <br>  Fixture Warranty						</span>
                                                            </h5>
                                                            <p class="elementor-icon-box-description">
                                                                Our multi-skilled team provides innovative, forward-thinking solutions.					
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9364720 elementor-view-stacked show-divider-yes animated-fast elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="9364720" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-am-popup&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span  class="elementor-icon">
                                                            <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-ruler-pen"></i>				</span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h5 class="elementor-icon-box-title">
                                                                <span  >
                                                                Easy Customisation <br>  Process						</span>
                                                            </h5>
                                                            <p class="elementor-icon-box-description">
                                                                We maintain this by ensuring transparency and professional conduct in every aspect.					
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-80aa14d e-flex e-con-boxed e-con e-parent" data-id="80aa14d" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-1342c2b e-flex e-con-boxed e-con e-child" data-id="1342c2b" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-303639e e-con-full e-flex e-con e-child" data-id="303639e" data-element_type="container">
                                                    <div class="elementor-element elementor-element-0349a29 box-width-yes elementor-widget__width-initial animated-fast spaciaz-scrolling-ltr elementor-invisible elementor-widget elementor-widget-spaciaz-slide-scrolling" data-id="0349a29" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-helix&quot;}" data-widget_type="spaciaz-slide-scrolling.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-scrolling">
                                                                <div class="elementor-scrolling-wrapper">
                                                                    <div class="elementor-scrolling-inner">
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                                    <a href="#"  title="selected projects"><span>selected projects</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-9398599">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                                    <a href="#"  title="selected projects"><span>selected projects</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-194a249">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-scrolling-inner">
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                                    <a href="#"  title="selected projects"><span>selected projects</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-9398599">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                                    <a href="#"  title="selected projects"><span>selected projects</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-194a249">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-scrolling-inner">
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                                    <a href="#"  title="selected projects"><span>selected projects</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-9398599">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                                    <a href="#"  title="selected projects"><span>selected projects</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-194a249">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6de82e1 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="6de82e1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Done Projects</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6cb337b e-con-full e-flex e-con e-child" data-id="6cb337b" data-element_type="container">
                                                    <div class="elementor-element elementor-element-a96dfe1 enable-style-icon-yes elementor-button-default animated-fast icon-spaciaz-right elementor-invisible elementor-widget elementor-widget-spaciaz-button" data-id="a96dfe1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="spaciaz-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="projects.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-icon">
                                                                <span class="btn-icon-wrap">
                                                                <span class="btn-icon">
                                                                <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                                <span class="btn-icon-hover">
                                                                <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                                </span>
                                                                </span>
                                                                <span class="elementor-button-text" data-name="view all projects">
                                                                <span>view all projects</span>
                                                                </span>
                                                                </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d400460 animated-fast elementor-invisible elementor-widget elementor-widget-spaciaz-projects-expand" data-id="d400460" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="spaciaz-projects-expand.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-project-expand-wrapper">
                                                    <div class="d-grid">
                                                        <div class="grid-item project-inner ">
                                                            <div class="project-item project-style-5">
                                                                <div class="project-post-thumbnail">
                                                                    <img decoding="async" width="1920" height="1344" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" 
                                                                    srcset="https://www.sipeurope.eu/wp-content/uploads/2020/03/Modular-buildings-SIPEUROPE-MODULSIP-Modula%CC%81rny-dom-1.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1920w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://www.sipeurope.eu/wp-content/uploads/2020/03/Modular-buildings-SIPEUROPE-MODULSIP-Modula%CC%81rny-dom-1.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1536w" 
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" />            
                                                                </div>
                                                                <!-- .post-thumbnail -->
                                                                <div class="project-content">
                                                                    <div class="project-location"><i class="spaciaz-icon-marker"></i><a href="single-projetc.php?location=" rel="tag">New York, NY</a></div>
                                                                    <h4 class="project-title delta"><a href="single-projetc.php">Mixed-Use Development</a></h4>
                                                                    <div class="project-button-wrap">
                                                                        <a class="project-button" href="single-projetc.php">
                                                                        <span class="project-button-text">
                                                                        explore project                </span>
                                                                        <span class="project-button-icon">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item project-inner ">
                                                            <div class="project-item project-style-5">
                                                                <div class="project-post-thumbnail">
                                                                    <img decoding="async" width="1920" height="1344" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" 
                                                                    srcset="https://5.imimg.com/data5/SELLER/Default/2024/9/454792424/GC/KA/QG/224511262/steel-frame-structure-services.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1920w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://5.imimg.com/data5/SELLER/Default/2024/9/454792424/GC/KA/QG/224511262/steel-frame-structure-services.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1536w" 
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                                </div>
                                                                <!-- .post-thumbnail -->
                                                                <div class="project-content">
                                                                    <div class="project-location"><i class="spaciaz-icon-marker"></i><a href="single-projetc.php?location=" rel="tag">Hollywood, Florida</a></div>
                                                                    <h4 class="project-title delta"><a href="single-projetc.php">Greenview Apartments</a></h4>
                                                                    <div class="project-button-wrap">
                                                                        <a class="project-button" href="single-projetc.php">
                                                                        <span class="project-button-text">
                                                                        explore project                </span>
                                                                        <span class="project-button-icon">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item project-inner ">
                                                            <div class="project-item project-style-5">
                                                                <div class="project-post-thumbnail">
                                                                    <img decoding="async" width="1920" height="1344" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" 
                                                                    srcset="https://www.karmod.eu/media/blog/41/Office-and-Accommodation-Complex_4.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1920w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://www.karmod.eu/media/blog/41/Office-and-Accommodation-Complex_4.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1536w" 
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                                </div>
                                                                <!-- .post-thumbnail -->
                                                                <div class="project-content">
                                                                    <div class="project-location"><i class="spaciaz-icon-marker"></i><a href="single-projetc.php?location=" rel="tag">Spotswood, NJ</a></div>
                                                                    <h4 class="project-title delta"><a href="single-projetc.php">Premier Office Tower</a></h4>
                                                                    <div class="project-button-wrap">
                                                                        <a class="project-button" href="single-projetc.php">
                                                                        <span class="project-button-text">
                                                                        explore project                </span>
                                                                        <span class="project-button-icon">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item project-inner ">
                                                            <div class="project-item project-style-5">
                                                                <div class="project-post-thumbnail">
                                                                    <img decoding="async" width="1920" height="1344" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" 
                                                                    srcset="https://www.oilandgasmiddleeast.com/cloud/2022/11/16/shutterstock_1596842587-scaled.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1920w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://www.oilandgasmiddleeast.com/cloud/2022/11/16/shutterstock_1596842587-scaled.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1536w" 
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                                </div>
                                                                <!-- .post-thumbnail -->
                                                                <div class="project-content">
                                                                    <div class="project-location"><i class="spaciaz-icon-marker"></i><a href="single-projetc.php?location=" rel="tag">New York, NY</a></div>
                                                                    <h4 class="project-title delta"><a href="single-projetc.php">Urban Heights Residence</a></h4>
                                                                    <div class="project-button-wrap">
                                                                        <a class="project-button" href="single-projetc.php">
                                                                        <span class="project-button-text">
                                                                        explore project                </span>
                                                                        <span class="project-button-icon">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item project-inner ">
                                                            <div class="project-item project-style-5">
                                                                <div class="project-post-thumbnail">
                                                                    <img decoding="async" width="1920" height="1344" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" 
                                                                    srcset="https://img.freepik.com/premium-photo/cctv-camera_69709-345.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1920w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://img.freepik.com/premium-photo/cctv-camera_69709-345.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1536w" 
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                                </div>
                                                                <!-- .post-thumbnail -->
                                                                <div class="project-content">
                                                                    <div class="project-location"><i class="spaciaz-icon-marker"></i><a href="single-projetc.php?location=" rel="tag">Bay Shore, NY</a></div>
                                                                    <h4 class="project-title delta"><a href="single-projetc.php">Apartment Building</a></h4>
                                                                    <div class="project-button-wrap">
                                                                        <a class="project-button" href="single-projetc.php">
                                                                        <span class="project-button-text">
                                                                        explore project                </span>
                                                                        <span class="project-button-icon">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item project-inner ">
                                                            <div class="project-item project-style-5">
                                                                <div class="project-post-thumbnail">
                                                                    <img decoding="async" width="1920" height="1344" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" 
                                                                    srcset="https://www.sonaeuk.org/wp-content/uploads/2018/09/inst-2.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1920w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://www.sonaeuk.org/wp-content/uploads/2018/09/inst-2.jpg?tr=w-800,h-auto,fo-webp,dpr-1 1536w" 
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                                </div>
                                                                <!-- .post-thumbnail -->
                                                                <div class="project-content">
                                                                    <div class="project-location"><i class="spaciaz-icon-marker"></i><a href="single-projetc.php?location=" rel="tag">Spotswood, NJ</a></div>
                                                                    <h4 class="project-title delta"><a href="single-projetc.php">Commercial &#038; Residential Building</a></h4>
                                                                    <div class="project-button-wrap">
                                                                        <a class="project-button" href="single-projetc.php">
                                                                        <span class="project-button-text">
                                                                        explore project                </span>
                                                                        <span class="project-button-icon">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-e147712 e-flex e-con-boxed e-con e-parent" data-id="e147712" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-5ff7b05 e-flex e-con-boxed e-con e-child" data-id="5ff7b05" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-4a4665e e-con-full e-flex e-con e-child" data-id="4a4665e" data-element_type="container">
                                                    <div class="elementor-element elementor-element-f74c1dc box-width-yes elementor-widget__width-initial animated-fast spaciaz-scrolling-ltr elementor-invisible elementor-widget elementor-widget-spaciaz-slide-scrolling" data-id="f74c1dc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-helix&quot;}" data-widget_type="spaciaz-slide-scrolling.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-scrolling">
                                                                <div class="elementor-scrolling-wrapper">
                                                                    <div class="elementor-scrolling-inner">
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                                    <a href="#"  title="Articles &amp; insights"><span>Articles & insights</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-9398599">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                                    <a href="#"  title="Articles &amp; insights"><span>Articles & insights</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-194a249">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-scrolling-inner">
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                                    <a href="#"  title="Articles &amp; insights"><span>Articles & insights</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-9398599">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                                    <a href="#"  title="Articles &amp; insights"><span>Articles & insights</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-194a249">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-scrolling-inner">
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-3eace46">
                                                                                    <a href="#"  title="Articles &amp; insights"><span>Articles & insights</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-9398599">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-18b9ba4">
                                                                                    <a href="#"  title="Articles &amp; insights"><span>Articles & insights</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-scrolling-item">
                                                                            <div class="elementor-scrolling-item-inner">
                                                                                <div class="scrolling-title elementor-repeater-item-194a249">
                                                                                    <a href="#"  title="·"><span>·</span></a>                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-04a1b97 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="04a1b97" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Discover inspiration and trends</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4108676 e-con-full e-flex e-con e-child" data-id="4108676" data-element_type="container">
                                                    <div class="elementor-element elementor-element-ff72217 enable-style-icon-yes animated-fast elementor-button-outline icon-spaciaz-right elementor-invisible elementor-widget elementor-widget-spaciaz-button" data-id="ff72217" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="spaciaz-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="blog/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-icon">
                                                                <span class="btn-icon-wrap">
                                                                <span class="btn-icon">
                                                                <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                                <span class="btn-icon-hover">
                                                                <i aria-hidden="true" class="spaciaz-icon- spaciaz-icon-arrow-long-right"></i>                        </span>
                                                                </span>
                                                                </span>
                                                                <span class="elementor-button-text" data-name="view all posts">
                                                                <span>view all posts</span>
                                                                </span>
                                                                </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4ce9298 elementor-widget__width-inherit animated-fast overflow-to-none elementor-invisible elementor-widget elementor-widget-spaciaz-post-grid" data-id="4ce9298" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:3,&quot;slides_to_show_laptop&quot;:&quot;3&quot;,&quot;slides_to_show_tablet_extra&quot;:&quot;2.5&quot;,&quot;slides_to_show_tablet&quot;:&quot;2.5&quot;,&quot;slides_to_show_mobile_extra&quot;:&quot;2.5&quot;,&quot;slides_to_show_mobile&quot;:&quot;1.2&quot;,&quot;spaceBetween_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;spaceBetween_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;spaceBetween_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;spaceBetween_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;opal-move-up&quot;,&quot;spaceBetween&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;spaceBetween_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;swiper_overflow&quot;:&quot;none&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;enable_scrollbar&quot;:&quot;no&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;loopAdditionalSlides&quot;:0,&quot;speed&quot;:500}" data-widget_type="spaciaz-post-grid.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-post-wrapper elementor-post-style-1 spaciaz-swiper swiper " dir="ltr">
                                                    <div class="swiper-wrapper">
                                                        <div class="grid-item swiper-slide">
                                                            <div class="post-inner blog-grid">
                                                                <div class="post-thumbnail"><img loading="lazy" decoding="async" width="900" height="599" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-large size-large wp-post-image" alt="" 
                                                                srcset="https://daptemautomation.com/wp-content/uploads/2023/12/black-engineer-2.jpg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://daptemautomation.com/wp-content/uploads/2023/12/black-engineer-2.jpg?tr=w-600,h-auto,fo-webp,dpr-1 1400w"
                                                                sizes="(max-width: 900px) 100vw, 900px" /></div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-meta-inner">
                                                                            <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="category/company-insights/index.html" rel="category tag">Company Insights</a></div>
                                                                            <div class="posted-on"><a href="tiny-homes-big-benefits/index.html" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:45+00:00">March 18, 2025</time><time class="updated" datetime="2025-04-16T01:33:11+00:00">April 16, 2025</time></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="omega entry-title"><a href="tiny-homes-big-benefits/index.html" rel="bookmark">Tiny Homes: Big Benefits</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item swiper-slide">
                                                            <div class="post-inner blog-grid">
                                                                <div class="post-thumbnail"><img loading="lazy" decoding="async" width="900" height="599" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-large size-large wp-post-image" alt="" 
                                                                srcset="https://5.imimg.com/data5/SELLER/Default/2021/8/PJ/YU/LF/134284477/1546505895839.jpg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://5.imimg.com/data5/SELLER/Default/2021/8/PJ/YU/LF/134284477/1546505895839.jpg?tr=w-600,h-auto,fo-webp,dpr-1 1400w"
                                                                sizes="(max-width: 900px) 100vw, 900px" /></div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-meta-inner">
                                                                            <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="category/tips-tricks/index.html" rel="category tag">Tips &amp; Tricks</a></div>
                                                                            <div class="posted-on"><a href="how-to-get-started-in-buying-your-first-home/index.html" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:47+00:00">March 18, 2025</time><time class="updated" datetime="2025-04-17T01:52:36+00:00">April 17, 2025</time></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="omega entry-title"><a href="how-to-get-started-in-buying-your-first-home/index.html" rel="bookmark">How to Get Started in Buying Your First Home</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="grid-item swiper-slide">
                                                            <div class="post-inner blog-grid">
                                                                <div class="post-thumbnail"><img loading="lazy" decoding="async" width="900" height="599" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-large size-large wp-post-image" alt="" 
                                                                srcset="https://www.saebu.com/sites/default/files/styles/md_1024/public/2019-08/modulstellung-baustelle-zinfue-lbb-diez-unterkunftsgebaeude.JPG?itok=gagsSUBD?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://www.saebu.com/sites/default/files/styles/md_1024/public/2019-08/modulstellung-baustelle-zinfue-lbb-diez-unterkunftsgebaeude.JPG?itok=gagsSUBD?tr=w-600,h-auto,fo-webp,dpr-1 1400w"
                                                                sizes="(max-width: 900px) 100vw, 900px" /></div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-meta-inner">
                                                                            <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="category/social-media/index.html" rel="category tag">Social Media</a></div>
                                                                            <div class="posted-on"><a href="how-design-shapes-well-being/index.html" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:43+00:00">March 18, 2025</time><time class="updated" datetime="2025-04-16T01:33:11+00:00">April 16, 2025</time></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="omega entry-title"><a href="how-design-shapes-well-being/index.html" rel="bookmark">How Design Shapes Well-Being</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item swiper-slide">
                                                            <div class="post-inner blog-grid">
                                                                <div class="post-thumbnail"><img loading="lazy" decoding="async" width="900" height="599" src="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1" class="attachment-large size-large wp-post-image" alt="" srcset="https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1024w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-300,h-auto,fo-webp,dpr-1 300w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-768,h-auto,fo-webp,dpr-1 768w, https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-600,h-auto,fo-webp,dpr-1 1400w" sizes="(max-width: 900px) 100vw, 900px" /></div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-meta-inner">
                                                                            <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="category/social-media/index.html" rel="category tag">Social Media</a></div>
                                                                            <div class="posted-on"><a href="eco-friendly-construction-trends/index.html" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:42+00:00">March 18, 2025</time><time class="updated" datetime="2025-04-17T01:53:07+00:00">April 17, 2025</time></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="omega entry-title"><a href="eco-friendly-construction-trends/index.html" rel="bookmark">Eco-Friendly Construction Trends</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-1e442f7 e-con-full e-flex e-con e-child" data-id="1e442f7" data-element_type="container">
                                    <div class="elementor-element elementor-element-76152b0 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="76152b0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Who We've Worked With</h2>
                                        </div>
                                    </div><br>
                                    <div class="elementor-element elementor-element-801eddd box-width-yes spaciaz-scrolling-ltr elementor-widget elementor-widget-spaciaz-slide-scrolling" data-id="801eddd" data-element_type="widget" data-widget_type="spaciaz-slide-scrolling.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-scrolling">
                                                <div class="elementor-scrolling-wrapper">
                                                    <div class="elementor-scrolling-inner">
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients27_home-olagy6e1s8jp2t4ykudgbzgsxi5mlgwosq4kfodvfy.png">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-271ba15">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients26_home-olagy4idekh4fl7ovtk76zxvqqew62p84gtlh4gnse.png">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-d48e2db">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients25-olagy2mp0wejsdaf6sqy20eyjyo5qohrg7imikjg4u.png">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-fa93bff">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients5-Copy-olagxcb7pjeiracnghde4721x69vr5la0l912tmgz2.jpg">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-271ba15"></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients4-Copy-olagxafjbvby42fdrgk4z7j4qej5brdtcby249p9bi.jpg">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-d48e2db">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients3-olagx9hp51ansggqwy5iepro50ns42a307akmzqnhq.jpg">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-fa93bff">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients3-olagx9hp51ansggqwy5iepro50ns42a307akmzqnhq.jpg">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-29fade0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients2-olagx7m0rd8358jh7xc99q8qy8x1oo2mbxzloftfu6.jpg">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-79b2575">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-scrolling-item">
                                                            <div class="elementor-scrolling-item-inner">
                                                                <div class="elementor-icon">
                                                                    <img class="img-fluid" src="https://desertsides.com/wp-content/uploads/elementor/thumbs/DSI_clients16-olagxpgyd7wj9ttjbn2633qi8kh0qx1iqedtsp2yjy.png">
                                                                </div>
                                                                <div class="scrolling-title elementor-repeater-item-a94fb7f">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .col-fluid -->
            </div>
            

@include("wp-includes/footer");