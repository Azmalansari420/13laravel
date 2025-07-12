@php
$catid = @$EDITDATA[0]->id;
if(!empty($catid))
{
    $blogs = DB::Table('blog')->where('status',1)->orderBy('id','desc')->where('blog_cat_id',$catid)->paginate(2);
}
else
{
    $blogs = DB::Table('blog')->where('status',1)->orderBy('id','desc')->paginate(2);
}
@endphp
@include("wp-includes/header")
        <link rel='stylesheet' id='elementor-post-4-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4.css?ver=1744872227' media='all' />

        <link rel='stylesheet' id='elementor-post-3356-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-3356.css?ver=1745043187' media='all' />
        <link rel='stylesheet' id='elementor-post-64-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-64.css?ver=1744872230' media='all' />
        <link rel='stylesheet' id='elementor-post-264-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-264.css?ver=1747820298' media='all' />
        
        <link rel='stylesheet' id='elementor-post-4773-css' href='{{url('')}}/wp-content/uploads/elementor/css/post-4773.css?ver=1744872230' media='all' />
        
@include("wp-includes/header-bottom")
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

    <body class="wp-singular page-template page-template-template-homepage page-template-template-homepage-php page page-id-3356 wp-custom-logo wp-embed-responsive wp-theme-spaciaz wp-child-theme-demo-child ehf-header ehf-footer ehf-template-spaciaz ehf-stylesheet-demo-child chrome theme-spaciaz no-wc-breadcrumb elementor-default elementor-kit-4 elementor-page elementor-page-3356">
        <div id="page" class="hfeed site">
            
            @include("wp-includes/header-navbar")

            <div id="content" class="site-content-page clear" tabindex="-1">
                <div class="col-fluid">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div data-elementor-type="wp-page" data-elementor-id="3356" class="elementor elementor-3356">
                                <div style="background-image:url('https://www.cliffordchance.com/content/dam/cliffordchance/header/blogs/header-blog-construction.jpg?tr=w-1200,h-auto,fo-webp,dpr-1');" class="elementor-element elementor-element-8cf7674 e-con-full e-flex e-con e-parent" data-id="8cf7674" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-307655e e-flex e-con-boxed e-con e-child" data-id="307655e" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-8df3906 elementor-widget elementor-widget-page-title" data-id="8df3906" data-element_type="widget" data-widget_type="page-title.default">
                                                <div class="elementor-widget-container">
                                                    <div class="hfe-page-title hfe-page-title-wrapper elementor-widget-heading">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Blog & News 
                                                        </h2 >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ed4ffca e-con-full e-flex e-con e-child" data-id="ed4ffca" data-element_type="container">
                                                <div class="elementor-element elementor-element-9bcfd1f elementor-widget elementor-widget-hfe-breadcrumbs-widget" data-id="9bcfd1f" data-element_type="widget" data-widget_type="hfe-breadcrumbs-widget.default">
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
                                                                <li class="hfe-breadcrumbs-item hfe-breadcrumbs-last"><span class="hfe-breadcrumbs-text" aria-current="page">Blog & News</span></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-57f13d8 elementor-widget elementor-widget-spacer" data-id="57f13d8" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-57fbeb1 e-flex e-con-boxed e-con e-parent" data-id="57fbeb1" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-ae5edf7 elementor-widget elementor-widget-spaciaz-post-grid" data-id="ae5edf7" data-element_type="widget" data-widget_type="spaciaz-post-grid.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-post-wrapper elementor-post-list">
                                                    <div class="d-grid">
                                                        <div class="grid-item">

                                                            @php
                                                            $blog = DB::Table('blog')->orderBy('id','desc')->limit(1)->where('status',1)->first();
                                                            @endphp
                                                            @php
                                                            $cat = DB::Table('blog_category')->where('id',$blog->blog_cat_id)->first();
                                                            @endphp
                                                            <article id="post-38" class="article-default post-38 post type-post status-publish format-standard has-post-thumbnail hentry category-tips-tricks">
                                                                <div class="post-inner blog-list">
                                                                    <div class="post-content">
                                                                        <div class="post-left">
                                                                            <div class="post-thumbnail"><img fetchpriority="high" decoding="async" width="593" height="391" src="{{url('public/media/uploads/blog/'.@$blog->image)}}" class="attachment-large size-large wp-post-image"  /></div>
                                                                        </div>
                                                                        <div class="post-right">
                                                                            <div class="entry-meta">
                                                                                <div class="entry-meta-inner">
                                                                                    <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="{{url(@$cat->slug)}}" rel="category tag">{{@$cat->name}}</a></div>
                                                                                    <div class="posted-on"><a href="{{url($blog->slug)}}" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:47+00:00">{{date('d M, Y',strtotime(@$blog->addeddate)) }}</time><time class="updated" datetime="2025-04-17T01:52:36+00:00">{{date('d M, Y',strtotime(@$blog->addeddate)) }}</time></a></div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="delta entry-title"><a href="{{url($blog->slug)}}" rel="bookmark">{{@$blog->name}}</a></h3>
                                                                            <div class="entry-excerpt">
                                                                               {{ Str::limit(strip_tags($blog->content), 100) }}
                                                                            </div>
                                                                            <div class="more-link-wrap">
                                                                                <a class="more-link" href="{{url($blog->slug)}}">Continue Reading</a>                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <!-- #post-## -->                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-079f4c5 e-flex e-con-boxed e-con e-parent" data-id="079f4c5" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-4cecf79 elementor-widget elementor-widget-heading" data-id="4cecf79" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Latest</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e38ca75 elementor-widget elementor-widget-spaciaz-post-filter" data-id="e38ca75" data-element_type="widget" data-widget_type="spaciaz-post-filter.default">
                                            <div class="elementor-widget-container">
                                                <div class="navigation-post-filter">
                                                    <a class="" href="{{url('blog')}}">All Posts</a>
                                                    @php
                                                    $blogcat = DB::Table('blog_category')->where('status',1)->get();
                                                    @endphp
                                                    @foreach($blogcat as $data)
                                                    <a class="" href="{{url(@$data->slug)}}">{{@$data->name}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2557fae elementor-widget elementor-widget-spaciaz-post-grid" data-id="2557fae" data-element_type="widget" data-widget_type="spaciaz-post-grid.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-post-wrapper elementor-post-style-1">
                                                    <div class="d-grid">

                                                        @foreach($blogs as $data)
                                                        @php
                                                            $cats = DB::Table('blog_category')->where('id',$data->blog_cat_id)->first();
                                                            @endphp
                                                        <div class="grid-item">
                                                            <div class="post-inner blog-grid">
                                                                <div class="post-thumbnail"><img fetchpriority="high" decoding="async" width="410" height="281" src="{{url('public/media/uploads/blog/'.@$data->image)}}" alt="image" /></div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-meta-inner">
                                                                            <div class="categories-link"><span class="screen-reader-text">Categories</span><a href="{{url(@$cats->slug)}}" rel="category tag">{{@$cats->name}}</a></div>
                                                                            <div class="posted-on"><a href="{{url(@$data->slug)}}" rel="bookmark"><time class="entry-date published" datetime="2025-03-18T08:29:47+00:00">{{date('d M, Y',strtotime(@$data->addeddate)) }}</time><time class="updated" datetime="2025-04-17T01:52:36+00:00">{{date('d M, Y',strtotime(@$data->addeddate)) }}</time></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="omega entry-title"><a href="{{url(@$data->slug)}}" rel="bookmark">{{@$data->name}}</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        
                                                        
                                                    </div>

                                                    <div class="pagination-wrapper text-center mt-4">
                                                        {{ $blogs->links('pagination::bootstrap-4') }}
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