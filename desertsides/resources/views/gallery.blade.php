@include("wp-includes/header")

        <link rel='stylesheet' id='elementor-post-4-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4.css?ver=1744872227' media='all' />
        <link rel='stylesheet' id='elementor-post-64-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-64.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-264-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-264.css?ver=1747820298' media='all' />
        
        <link rel='stylesheet' id='elementor-post-4326-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4326.css?ver=1745036121' media='all' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"    />

       
@include("wp-includes/header-bottom")

        <style type="text/css">#page .site-content{margin-top:0px;margin-bottom:0px;}</style>

    <body class="archive post-type-archive post-type-archive-spaciaz_project wp-custom-logo wp-embed-responsive wp-theme-spaciaz wp-child-theme-demo-child ehf-header ehf-footer ehf-template-spaciaz ehf-stylesheet-demo-child chrome theme-spaciaz no-wc-breadcrumb spaciaz-full-width-content has-post-thumbnail elementor-default elementor-kit-4">
        <div id="page" class="hfeed site">
            
     @include("wp-includes/header-navbar")

            <div class="breadcrumb-wrap" style="background-image:url('https://social-innovation.hitachi/-/media/project/hitachi/sib/en-in/knowledge-hub/viewpoint/fueling-construction-industry/images/construction-equipment-industry.png?la=en-IN&upd=20230905061220Z&hash=0A0A2EF03FCE341E223DB687B99077FB?tr=w-1200,h-auto,fo-webp,dpr-1');">
                <div class="breadcrumb-overlay"></div>
                <div data-elementor-type="wp-post" data-elementor-id="4326" class="elementor elementor-4326">
                    <div class="elementor-element elementor-element-01909e9 e-con-full e-flex e-con e-parent" data-id="01909e9" data-element_type="container">
                        <div class="elementor-element elementor-element-c4ae009 e-flex e-con-boxed e-con e-child" data-id="c4ae009" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-295b751 hidden-spaciaz-list-item-yes elementor-widget elementor-widget-spaciaz-breadcrumb" data-id="295b751" data-element_type="widget" data-widget_type="spaciaz-breadcrumb.default">
                                    <div class="elementor-widget-container">
                                        <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
                                            <div class="breadcrumb-listItem">
                                                <!-- Breadcrumb NavXT 7.4.1 -->
                                                <span property="itemListElement" typeof="ListItem">
                                                    <a property="item" typeof="WebPage" title="Go to Home." href="#!" class="home" ><span property="name">Home</span></a>
                                                    <meta property="position" content="1">
                                                </span>
                                                &gt; 
                                                <span property="itemListElement" typeof="ListItem">
                                                    <span property="name" class="archive post-spaciaz_project-archive current-item">Media & Gallery</span>
                                                    <meta property="url" content="projects/">
                                                    <meta property="position" content="2">
                                                </span>
                                            </div>
                                            <h1 class="spaciaz-title">Media & Gallery</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5b44ace elementor-widget elementor-widget-hfe-breadcrumbs-widget" data-id="5b44ace" data-element_type="widget" data-widget_type="hfe-breadcrumbs-widget.default">
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
                                                <li class="hfe-breadcrumbs-item hfe-breadcrumbs-last"><span class="hfe-breadcrumbs-text" aria-current="page">Projects</span></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2638992 elementor-widget elementor-widget-spacer" data-id="2638992" data-element_type="widget" data-widget_type="spacer.default">
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
                <div class="col-fluid">
                    <div class="project-archive-style-2 col-full">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">


                            <div class="masonry">

                                @php
                                $gallery = DB::Table('gallery')->orderBy('id','desc')->where('status',1)->get();
                                @endphp
                                @foreach($gallery as $data)
                                <div class="brick">
                                  <a href="{{url('public/media/uploads/gallery/'.$data->image)}}" data-fancybox="media">
                                    <img src="{{url('public/media/uploads/gallery/'.$data->image)}}">
                                  </a>
                                </div>
                                @endforeach

                              </div>
                                
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                </div>
                <!-- .col-fluid -->
            </div>
            

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
Fancybox.bind('[data-fancybox="media"]', {
//   dragToClose: false,
  Thumbs: false,
  Image: {
    zoom: true,
    click: false,
  }
});
</script>

@include("wp-includes/footer");