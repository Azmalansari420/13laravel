@include("wp-includes/header")

        <link rel='stylesheet' id='elementor-post-4-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4.css?ver=1744872227' media='all' />
        
        <link rel='stylesheet' id='elementor-post-2211-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-2211.css?ver=1745036046' media='all' />
        <link rel='stylesheet' id='elementor-post-64-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-64.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-264-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-264.css?ver=1747820298' media='all' />

        <link rel='stylesheet' id='elementor-post-4773-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4773.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-333-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-333.css?ver=1744959329' media='all' />
        
       @include("wp-includes/header-bottom")

    <body class="wp-singular page-template page-template-template-homepage page-template-template-homepage-php page page-id-2211 wp-custom-logo wp-embed-responsive wp-theme-spaciaz wp-child-theme-demo-child ehf-header ehf-footer ehf-template-spaciaz ehf-stylesheet-demo-child chrome theme-spaciaz no-wc-breadcrumb elementor-default elementor-kit-4 elementor-page elementor-page-2211">
        <div id="page" class="hfeed site">
            
            @include("wp-includes/header-navbar")

            <div id="content" class="site-content-page clear" tabindex="-1">
                <div class="col-fluid">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div data-elementor-type="wp-page" data-elementor-id="2211" class="elementor elementor-2211">
                                <div style="background-image:url('https://ik.imagekit.io/51di58p28/bg-products.png?tr=w-1200,h-auto,fo-webp,dpr-1');" class="elementor-element elementor-element-f589763 e-con-full e-flex e-con e-parent" data-id="f589763" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-f1360fe e-flex e-con-boxed e-con e-child" data-id="f1360fe" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-2430424 elementor-widget elementor-widget-page-title" data-id="2430424" data-element_type="widget" data-widget_type="page-title.default">
                                                <div class="elementor-widget-container">
                                                    <div class="hfe-page-title hfe-page-title-wrapper elementor-widget-heading">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Our Products  
                                                        </h2 >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7728834 elementor-widget elementor-widget-hfe-breadcrumbs-widget" data-id="7728834" data-element_type="widget" data-widget_type="hfe-breadcrumbs-widget.default">
                                                <div class="elementor-widget-container">
                                                    <nav aria-label="Breadcrumb">
                                                        <ul class="hfe-breadcrumbs hfe-breadcrumbs-show-home">
                                                            <li class="hfe-breadcrumbs-item hfe-breadcrumbs-first"><span class="hfe-breadcrumbs-home-icon"></span><a href="#!"><span class="hfe-breadcrumbs-text">Home</span></a></li>
                                                            <li class="hfe-breadcrumbs-separator">
                                                                <span class="hfe-breadcrumbs-separator-icon">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-square-full" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M512 512H0V0h512v512z"></path>
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="hfe-breadcrumbs-item hfe-breadcrumbs-last"><span class="hfe-breadcrumbs-text" aria-current="page">Our Products</span></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7b01c05 elementor-widget elementor-widget-spacer" data-id="7b01c05" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-70691d5 e-flex e-con-boxed e-con e-parent" data-id="70691d5" data-element_type="container">
                                    <div class="e-con-inner">
                                        
                                        <div class="elementor-element elementor-element-867dc0d animated-fast elementor-service-style-1 elementor-invisible elementor-widget elementor-widget-spaciaz-services" data-id="867dc0d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="spaciaz-services.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-service-wrapper">
                                                    <div class="d-grid">

                                                        @php
                                                        $products = DB::Table('products')->where('status',1)->get()
                                                        @endphp
                                                        @foreach($products as $data)
                                                        <div class="grid-item service-item service-style-1">
                                                            <div class="service-inner service-style-inner">
                                                                <div class="service-content">
                                                                    <div class="service-post-thumbnail">
                                                                        <img fetchpriority="high" decoding="async" width="388" height="248" src="{{url('public/media/uploads/products/'.$data->image)}}" class="attachment-large size-large wp-post-image"  />                    
                                                                    </div>
                                                                    <div class="service-button-wrap">
                                                                        <a class="service-button" href="{{$data->slug}}">
                                                                        <span class="btn-icon-wrap">
                                                                        <span class="btn-icon"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        <span class="btn-icon-hover"><i class="spaciaz-icon-arrow-long-right"></i></span>
                                                                        </span>
                                                                        </a>
                                                                        <div class="decor-border"> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="service-info">
                                                                    <h4 class="service-title"><a href="{{$data->slug}}">{{$data->name}} </a></h4>
                                                                    <div class="description">
                                                                        {{ Str::limit(strip_tags($data->content), 100) }}
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
                            </div>
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .col-fluid -->
            </div>
        </div>


@include("wp-includes/footer");