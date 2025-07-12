@include("wp-includes/header")

@php
$cat = DB::Table('blog_category')->where('id',$EDITDATA[0]->blog_cat_id)->first();
@endphp

        <link rel='stylesheet' id='elementor-post-4-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4.css?ver=1744872227' media='all' />
        <link rel='stylesheet' id='elementor-post-64-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-64.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-264-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-264.css?ver=1747820298' media='all' />
        
        <link rel='stylesheet' id='elementor-post-4773-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4773.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-2399-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-2399.css?ver=1744872233' media='all' />
        
       @include("wp-includes/header-bottom")

    <body class="wp-singular post-template-default single single-post postid-38 single-format-standard wp-custom-logo wp-embed-responsive wp-theme-spaciaz wp-child-theme-demo-child ehf-header ehf-footer ehf-template-spaciaz ehf-stylesheet-demo-child chrome theme-spaciaz no-wc-breadcrumb spaciaz-full-width-content has-post-thumbnail elementor-default elementor-kit-4">
        <div id="page" class="hfeed site">
            
            @include("wp-includes/header-navbar")

            <div class="breadcrumb-wrap" style="background-image:url('https://ik.imagekit.io/9sqym9p8y/@inabilansari/image.svg?tr=w-1200,h-auto,fo-webp,dpr-1');">
                <div class="breadcrumb-overlay"></div>
                <div data-elementor-type="wp-post" data-elementor-id="2399" class="elementor elementor-2399">
                    <div class="elementor-element elementor-element-2e5eb79 e-con-full e-flex e-con e-parent" data-id="2e5eb79" data-element_type="container">
                        <div class="elementor-element elementor-element-1b51338 e-flex e-con-boxed e-con e-child" data-id="1b51338" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-17a4b8a elementor-widget elementor-widget-hfe-breadcrumbs-widget" data-id="17a4b8a" data-element_type="widget" data-widget_type="hfe-breadcrumbs-widget.default">
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
                                                <li class="hfe-breadcrumbs-item "><a href="{{url(@$cat->slug)}}"><span class="hfe-breadcrumbs-text">{{@$cat->name}}</span></a></li>
                                                <li class="hfe-breadcrumbs-separator">
                                                    <span class="hfe-breadcrumbs-separator-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-square-full" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M512 512H0V0h512v512z"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="hfe-breadcrumbs-item hfe-breadcrumbs-last"><span class="hfe-breadcrumbs-text" aria-current="page">{{@$EDITDATA[0]->name}}</span></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c50fdb1 elementor-widget elementor-widget-spacer" data-id="c50fdb1" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content" class="site-content clear" tabindex="-1">
                <div class="col-full">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article id="post-38" class="post-38 post type-post status-publish format-standard has-post-thumbnail hentry category-tips-tricks">
                                <div class="single-content">
                                    <header class="entry-header header-post-thumbnail">
                                        <div class="entry-meta">
                                            <div class="entry-meta-inner">
                                                <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="{{url(@$cat->slug)}}" rel="category tag">{{@$cat->name}}</a></div>
                                                <div class="posted-on"><a href="how-to-get-started-in-buying-your-first-home/" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:47+00:00">{{date('d M, Y',strtotime(@$EDITDATA[0]->addeddate)) }}</time><time class="updated" datetime="2025-04-17T01:52:36+00:00">{{date('d M, Y',strtotime(@$EDITDATA[0]->addeddate)) }}</time></a></div>
                                            </div>
                                        </div>
                                        <h2 class="beta entry-title">{{@$EDITDATA[0]->name}}</h2>
                                    </header>
                                    <!-- .entry-header -->
                                    <div class="post-thumbnail"><img width="1290" height="600" src="{{url('public/media/uploads/blog/'.$EDITDATA[0]->image)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="image" decoding="async" /></div>
                                    <div class="entry-content">
                                        {!! $EDITDATA[0]->content !!}
                                    </div>
                                    <!-- .entry-content -->
                                    
                                </div>
                            </article>
                            <!-- #post-## -->
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .col-fluid -->
            </div>
            <!-- #content -->
            

@include("wp-includes/footer");