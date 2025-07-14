@php
$p_status = request()->get('status');
$type = request()->get('type');

if (!empty($p_status) && !empty($type)) {
    // Both filters applied
    $project = DB::table('projects')
                ->where('status', 1)
                ->where('p_status', $p_status)
                ->where('cat_id', $type)
                ->paginate(1);
} elseif (!empty($p_status)) {
    // Only status filter
    $project = DB::table('projects')
                ->where('status', 1)
                ->where('p_status', $p_status)
                ->paginate(1);
} elseif (!empty($type)) {
    // Only type filter
    $project = DB::table('projects')
                ->where('status', 1)
                ->where('cat_id', $type)
                ->paginate(1);
} else {
    // No filters
    $project = DB::table('projects')
                ->where('status', 1)
                ->paginate(1);
}
@endphp

<style>
    .pagination-wrapper {
    text-align: center;
    margin-top: 30px;
}
.pagination {
    display: inline-flex;
    list-style: none;
    padding-left: 0;
}
.pagination-wrapper {
    text-align: center;
    margin-top: 30px;
}

.pagination {
    display: inline-flex;
    list-style: none;
    padding-left: 0;
}

.page-item {
    margin: 0 5px;
}

.page-item.disabled .page-link,
.page-item.disabled .page-link:hover {
    color: #ccc;
    cursor: not-allowed;
    background-color: #f5f5f5;
    border-color: #ddd;
}

.page-item .page-link {
    padding: 8px 16px;
    border: 1px solid #ccc;
    background-color: #fff;
    color: #333;
    text-decoration: none;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.page-item .page-link:hover {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.page-item.active .page-link {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
    pointer-events: none;
}
</style>
@include("wp-includes/header")

        <link rel='stylesheet' id='elementor-post-4-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4.css?ver=1744872227' media='all' />
        <link rel='stylesheet' id='elementor-post-64-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-64.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-264-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-264.css?ver=1747820298' media='all' />

        <link rel='stylesheet' id='elementor-post-4773-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4773.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-4326-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4326.css?ver=1745036121' media='all' />
        
  @include("wp-includes/header-bottom")

        <style type="text/css">#page .site-content{margin-top:0px;margin-bottom:0px;}</style>

    <body class="archive post-type-archive post-type-archive-spaciaz_project wp-custom-logo wp-embed-responsive wp-theme-spaciaz wp-child-theme-demo-child ehf-header ehf-footer ehf-template-spaciaz ehf-stylesheet-demo-child chrome theme-spaciaz no-wc-breadcrumb spaciaz-full-width-content has-post-thumbnail elementor-default elementor-kit-4">
        <div id="page" class="hfeed site">
            
            @include("wp-includes/header-navbar")

            <div class="breadcrumb-wrap" style="background-image:url('https://sc0.blr1.cdn.digitaloceanspaces.com/article/195869-nomryjdgor-1699964440.jpg?tr=w-1200,h-auto,fo-webp,dpr-1');">
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
                                                    <span property="name" class="archive post-spaciaz_project-archive current-item">Projects</span>
                                                    <meta property="url" content="projects/">
                                                    <meta property="position" content="2">
                                                </span>
                                            </div>
                                            <h1 class="spaciaz-title">Our Projects</h1>
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
                                <div class="project-archive-content has-filter-style-1">
                                    <div class="spaciaz-project-filter">
                                        <form method="get" class="project-form-filter spaciaz-project-has-filter-style-1" action="projects/">
                                            <h4 class="filter-title">Filter</h4>
                                            <select name="status">
                                                <option selected value="">Project Status</option>
                                                <option  value="1" @if($p_status == 1) selected @endif>Completed</option>
                                                <option  value="2" @if($p_status==2) selected @endif>Under Construction</option>
                                            </select>
                                            <select name="type">
                                                <option selected value="">Project Type</option>
                                                @php
                                                $cat = DB::Table('projects_cate')->where('status',1)->get();
                                                @endphp
                                                @foreach($cat as $data)
                                                <option  value="{{$data->id}}" @if($type==$data->id) selected :  @endif >{{$data->name}}</option>
                                                @endforeach
                                            </select>
                                            
                                            <div class="filter-wrap filter-wrap-button"><button type="submit">Search</button></div>
                                        </form>
                                    </div>
                                    <div class="archive-content-inner">
                                        <div style="--gutter-width: 30px;" class="d-grid grid-columns-desktop-3 grid-columns-tablet-2 grid-columns-1">

                                            @foreach($project as $data)
                                            <div class="grid-item">
                                                <div class="project-item project-style-2">
                                                    <div class="project-post-thumbnail">
                                                        <img width="410" height="500" src="{{url('public/media/uploads/projects/'.$data->image)}}" class="attachment-spaciaz-project size-spaciaz-project wp-post-image" alt="" />            
                                                    </div>
                                                    <!-- .post-thumbnail -->
                                                    <div class="project-content">
                                                        <div class="project-status">{!! p_status($data->p_status) !!}</div>
                                                        <div class="project-location"><i class="spaciaz-icon-marker"></i>{{$data->location}}</div>
                                                        <h4 class="project-title delta"><a href="{{url($data->slug)}}">{{$data->name}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            
                                        </div>
                                        <div class="pagination " style="    margin-top: 27px;">
                                            {{ $project->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                </div>
                <!-- .col-fluid -->
            </div>
            


@include("wp-includes/footer");