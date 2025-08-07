<?php

use App\Http\Controllers\admin_con\AdminAuthController;
use App\Http\Controllers\admin_con\Profile_update;
use App\Http\Controllers\admin_con\Site_setting;
use App\Http\Controllers\admin_con\Slider;
use App\Http\Controllers\admin_con\Contact;
use App\Http\Controllers\admin_con\Testimonials;
use App\Http\Controllers\admin_con\Multipleimage;
use App\Http\Controllers\admin_con\Blog;
use App\Http\Controllers\admin_con\Content;
use App\Http\Controllers\admin_con\Partner;
use App\Http\Controllers\admin_con\Gallery;
use App\Http\Controllers\admin_con\Meta_tags;
use App\Http\Controllers\admin_con\Country;
use App\Http\Controllers\admin_con\City;
use App\Http\Controllers\admin_con\Sight_seeing;
use App\Http\Controllers\admin_con\Package;
use Illuminate\Support\Facades\Route;

// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminAuthController::class, 'index']);
    Route::post('/', [AdminAuthController::class, 'adminlogin'])->name('admin.adminlogin');
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin/dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin/logout');
});

/*-----------------------------profile update-------------------------------*/
Route::prefix('admin/profile')->group(function () {
    Route::get('/form', [Profile_update::class, 'loadForm'])->name('admin/profile_update');
    Route::post('/form', [Profile_update::class, 'submitForm'])->name('admin/profile_form');
});

/*-------------------------site settings---------------------------*/
Route::prefix('admin/site_setting')->group(function () {
    Route::get('/edit/{id}', [Site_setting::class, 'loadForm'])->name('admin/site_setting/edit');
    Route::post('/edit/{id}', [Site_setting::class, 'submitForm'])->name('admin/site_setting/update');
});


/*-------------------------site settings---------------------------*/
Route::prefix('admin/meta_tags')->group(function () {
    Route::get('/edit/{id}', [Meta_tags::class, 'loadForm'])->name('admin/meta_tags/edit');
    Route::post('/edit/{id}', [Meta_tags::class, 'submitForm'])->name('admin/meta_tags/update');
});


/*-------------------------content---------------------------*/
Route::prefix('admin/content')->group(function () {
    Route::get('/edit/{id}', [Content::class, 'loadForm'])->name('admin/content/edit');
    Route::post('/home-about/{id}', [Content::class, 'submitForm'])->name('admin/content/update');


    /*about Us*/
    Route::get('/about/{id}', [Content::class, 'about_loadForm'])->name('admin/content/about');
    Route::post('/about/{id}', [Content::class, 'aboutsubmitForm'])->name('admin/content/aboutupdate');

    /*privacy Us*/
    Route::get('/privacy/{id}', [Content::class, 'privacy_loadForm'])->name('admin/content/privacy');
    Route::post('/privacy/{id}', [Content::class, 'privacysubmitForm'])->name('admin/content/privacyupdate');
    /*explore Us*/
    Route::get('/explore/{id}', [Content::class, 'explore_loadForm'])->name('admin/content/explore');
    Route::post('/explore/{id}', [Content::class, 'exploresubmitForm'])->name('admin/content/exploreupdate');

   

});


/*------------------------slider----------------------*/
Route::prefix('admin/slider')->group(function () {
    Route::get('/', [Slider::class, 'listing'])->name('admin/slider/list');
    Route::post('/table', [Slider::class, 'getTableData'])->name('admin/slider/table');
    /*------add------*/
    Route::get('/add', [Slider::class, 'add_page_url'])->name('admin/slider/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Slider::class, 'edit_page_url'])->name('admin/slider/edit');
    /*----view----*/
    Route::get('/view/{id}', [Slider::class, 'view_page_url'])->name('admin/slider/view');
    /*--single update -delete--*/
    Route::post('/store', [Slider::class, 'storeOrUpdate'])->name('admin_con/slider/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Slider::class, 'updateStatus'])->name('admin/slider/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Slider::class, 'delete_data'])->name('admin_con/slider/delete_data');
    Route::delete('/multiple_delete_data', [Slider::class, 'multiple_delete_data'])->name('admin_con/slider/multiple_delete_data');
});


/*------------------------contact----------------------*/
Route::prefix('admin/contact')->group(function () {
    Route::get('/', [Contact::class, 'listing'])->name('admin/contact/list');
    Route::post('/table', [Contact::class, 'getTableData'])->name('admin/contact/table');
    /*------View------*/
    Route::get('/view/{id}', [Contact::class, 'view_page_url'])->name('admin/contact/view');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Contact::class, 'delete_data'])->name('admin_con/contact/delete_data');
    Route::delete('/multiple_delete_data', [Contact::class, 'multiple_delete_data'])->name('admin_con/contact/multiple_delete_data');
});



/*------------------------testimonials----------------------*/
Route::prefix('admin/testimonials')->group(function () {
    Route::get('/', [Testimonials::class, 'listing'])->name('admin/testimonials/list');
    Route::post('/table', [Testimonials::class, 'getTableData'])->name('admin/testimonials/table');
    /*------add------*/
    Route::get('/add', [Testimonials::class, 'add_page_url'])->name('admin/testimonials/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Testimonials::class, 'edit_page_url'])->name('admin/testimonials/edit');
    /*----view----*/
    Route::get('/view/{id}', [Testimonials::class, 'view_page_url'])->name('admin/testimonials/view');
    /*--single update -delete--*/
    Route::post('/store', [Testimonials::class, 'storeOrUpdate'])->name('admin_con/testimonials/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Testimonials::class, 'updateStatus'])->name('admin/testimonials/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Testimonials::class, 'delete_data'])->name('admin_con/testimonials/delete_data');
    Route::delete('/multiple_delete_data', [Testimonials::class, 'multiple_delete_data'])->name('admin_con/testimonials/multiple_delete_data');
});



/*------------------------multipleimage----------------------*/

Route::prefix('admin/multipleimage')->group(function () {
    Route::get('/', [Multipleimage::class, 'listing'])->name('admin/multipleimage/list');
    Route::post('/table', [Multipleimage::class, 'getTableData'])->name('admin/multipleimage/table');
    /*------add------*/
    Route::get('/add', [Multipleimage::class, 'add_page_url'])->name('admin/multipleimage/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Multipleimage::class, 'edit_page_url'])->name('admin/multipleimage/edit');
    /*----view----*/
    Route::get('/view/{id}', [Multipleimage::class, 'view_page_url'])->name('admin/multipleimage/view');
    /*--single update -delete--*/
    Route::post('/store', [Multipleimage::class, 'storeOrUpdate'])->name('admin_con/multipleimage/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Multipleimage::class, 'updateStatus'])->name('admin/multipleimage/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Multipleimage::class, 'delete_data'])->name('admin_con/multipleimage/delete_data');
    Route::delete('/multiple_delete_data', [Multipleimage::class, 'multiple_delete_data'])->name('admin_con/multipleimage/multiple_delete_data');
    /*addmore single*/
    Route::post('/load_more_singleimage', [Multipleimage::class, 'load_more_singleimage'])->name('admin/multipleimage/load_more_singleimage');
    /*add morre multiple*/
    Route::post('/load-more-multiple-image', [Multipleimage::class, 'load_more_multiimage'])->name('admin/multipleimage/load_more_multiimage');

});


/*------------------------blog----------------------*/
Route::prefix('admin/blog')->group(function () {
    Route::get('/', [Blog::class, 'listing'])->name('admin/blog/list');
    Route::post('/table', [Blog::class, 'getTableData'])->name('admin/blog/table');
    /*------add------*/
    Route::get('/add', [Blog::class, 'add_page_url'])->name('admin/blog/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Blog::class, 'edit_page_url'])->name('admin/blog/edit');
    /*----view----*/
    Route::get('/view/{id}', [Blog::class, 'view_page_url'])->name('admin/blog/view');
    /*--single update -delete--*/
    Route::post('/store', [Blog::class, 'storeOrUpdate'])->name('admin_con/blog/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Blog::class, 'updateStatus'])->name('admin/blog/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Blog::class, 'delete_data'])->name('admin_con/blog/delete_data');
    Route::delete('/multiple_delete_data', [Blog::class, 'multiple_delete_data'])->name('admin_con/blog/multiple_delete_data');
});


/*------------------------partner----------------------*/
Route::prefix('admin/partner')->group(function () {
    Route::get('/', [Partner::class, 'listing'])->name('admin/partner/list');
    Route::post('/table', [Partner::class, 'getTableData'])->name('admin/partner/table');
    /*------add------*/
    Route::get('/add', [Partner::class, 'add_page_url'])->name('admin/partner/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Partner::class, 'edit_page_url'])->name('admin/partner/edit');
    /*----view----*/
    Route::get('/view/{id}', [Partner::class, 'view_page_url'])->name('admin/partner/view');
    /*--single update -delete--*/
    Route::post('/store', [Partner::class, 'storeOrUpdate'])->name('admin_con/partner/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Partner::class, 'updateStatus'])->name('admin/partner/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Partner::class, 'delete_data'])->name('admin_con/partner/delete_data');
    Route::delete('/multiple_delete_data', [Partner::class, 'multiple_delete_data'])->name('admin_con/partner/multiple_delete_data');
});


/*------------------------gallery----------------------*/
Route::prefix('admin/gallery')->group(function () {
    Route::get('/', [Gallery::class, 'listing'])->name('admin/gallery/list');
    Route::post('/table', [Gallery::class, 'getTableData'])->name('admin/gallery/table');
    /*------add------*/
    Route::get('/add', [Gallery::class, 'add_page_url'])->name('admin/gallery/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Gallery::class, 'edit_page_url'])->name('admin/gallery/edit');
    /*----view----*/
    Route::get('/view/{id}', [Gallery::class, 'view_page_url'])->name('admin/gallery/view');
    /*--single update -delete--*/
    Route::post('/store', [Gallery::class, 'storeOrUpdate'])->name('admin_con/gallery/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Gallery::class, 'updateStatus'])->name('admin/gallery/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Gallery::class, 'delete_data'])->name('admin_con/gallery/delete_data');
    Route::delete('/multiple_delete_data', [Gallery::class, 'multiple_delete_data'])->name('admin_con/gallery/multiple_delete_data');
});


/*------------------------country----------------------*/
Route::prefix('admin/country')->group(function () {
    Route::get('/', [Country::class, 'listing'])->name('admin/country/list');
    Route::post('/table', [Country::class, 'getTableData'])->name('admin/country/table');
    /*------add------*/
    Route::get('/add', [Country::class, 'add_page_url'])->name('admin/country/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Country::class, 'edit_page_url'])->name('admin/country/edit');
    /*----view----*/
    Route::get('/view/{id}', [Country::class, 'view_page_url'])->name('admin/country/view');
    /*--single update -delete--*/
    Route::post('/store', [Country::class, 'storeOrUpdate'])->name('admin_con/country/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Country::class, 'updateStatus'])->name('admin/country/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Country::class, 'delete_data'])->name('admin_con/country/delete_data');
    Route::delete('/multiple_delete_data', [Country::class, 'multiple_delete_data'])->name('admin_con/country/multiple_delete_data');
});


/*------------------------city----------------------*/
Route::prefix('admin/city')->group(function () {
    Route::get('/', [City::class, 'listing'])->name('admin/city/list');
    Route::post('/table', [City::class, 'getTableData'])->name('admin/city/table');
    /*------add------*/
    Route::get('/add', [City::class, 'add_page_url'])->name('admin/city/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [City::class, 'edit_page_url'])->name('admin/city/edit');
    /*----view----*/
    Route::get('/view/{id}', [City::class, 'view_page_url'])->name('admin/city/view');
    /*--single update -delete--*/
    Route::post('/store', [City::class, 'storeOrUpdate'])->name('admin_con/city/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [City::class, 'updateStatus'])->name('admin/city/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [City::class, 'delete_data'])->name('admin_con/city/delete_data');
    Route::delete('/multiple_delete_data', [City::class, 'multiple_delete_data'])->name('admin_con/city/multiple_delete_data');
});



/*------------------------sight_seeing----------------------*/
Route::prefix('admin/sight_seeing')->group(function () {
    Route::get('/', [Sight_seeing::class, 'listing'])->name('admin/sight_seeing/list');
    Route::post('/table', [Sight_seeing::class, 'getTableData'])->name('admin/sight_seeing/table');
    /*------add------*/
    Route::get('/add', [Sight_seeing::class, 'add_page_url'])->name('admin/sight_seeing/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Sight_seeing::class, 'edit_page_url'])->name('admin/sight_seeing/edit');
    /*----view----*/
    Route::get('/view/{id}', [Sight_seeing::class, 'view_page_url'])->name('admin/sight_seeing/view');
    /*--single update -delete--*/
    Route::post('/store', [Sight_seeing::class, 'storeOrUpdate'])->name('admin_con/sight_seeing/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Sight_seeing::class, 'updateStatus'])->name('admin/sight_seeing/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Sight_seeing::class, 'delete_data'])->name('admin_con/sight_seeing/delete_data');
    Route::delete('/multiple_delete_data', [Sight_seeing::class, 'multiple_delete_data'])->name('admin_con/sight_seeing/multiple_delete_data');
    /*addmore single*/
    Route::post('/load_more', [Sight_seeing::class, 'load_more'])->name('admin/sight_seeing/load_more');
    /*addmore single*/
    Route::post('/load_expierience_more', [Sight_seeing::class, 'load_expierience_more'])->name('admin/sight_seeing/load_expierience_more');


    Route::post('/load_art_therter_more', [Sight_seeing::class, 'load_art_therter_more'])->name('admin/sight_seeing/load_art_therter_more');
    Route::post('/load_park_garden_more', [Sight_seeing::class, 'load_park_garden_more'])->name('admin/sight_seeing/load_park_garden_more');
    Route::post('/load_hotels_more', [Sight_seeing::class, 'load_hotels_more'])->name('admin/sight_seeing/load_hotels_more');
});


/*------------------------package----------------------*/
Route::prefix('admin/package')->group(function () {
    Route::get('/', [Package::class, 'listing'])->name('admin/package/list');
    Route::post('/table', [Package::class, 'getTableData'])->name('admin/package/table');
    /*------add------*/
    Route::get('/add', [Package::class, 'add_page_url'])->name('admin/package/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Package::class, 'edit_page_url'])->name('admin/package/edit');
    /*----view----*/
    Route::get('/view/{id}', [Package::class, 'view_page_url'])->name('admin/package/view');
    /*--single update -delete--*/
    Route::post('/store', [Package::class, 'storeOrUpdate'])->name('admin_con/package/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Package::class, 'updateStatus'])->name('admin/package/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Package::class, 'delete_data'])->name('admin_con/package/delete_data');
    Route::delete('/multiple_delete_data', [Package::class, 'multiple_delete_data'])->name('admin_con/package/multiple_delete_data');

    Route::post('/load_more', [Package::class, 'load_more'])->name('admin/package/load_more');
});

