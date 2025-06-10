<?php

use App\Http\Controllers\admin_con\AdminAuthController;
use App\Http\Controllers\admin_con\Profile_update;
use App\Http\Controllers\admin_con\Site_setting;
use App\Http\Controllers\admin_con\Content;
use App\Http\Controllers\admin_con\Slider;
use App\Http\Controllers\admin_con\Contact;
use App\Http\Controllers\admin_con\Packageenquiry;
use App\Http\Controllers\admin_con\Testimonials;
use App\Http\Controllers\admin_con\Multipleimage;
use App\Http\Controllers\admin_con\Destination;
use App\Http\Controllers\admin_con\Package;
use App\Http\Controllers\admin_con\Gallery;
use App\Http\Controllers\admin_con\Instagramgallery;
use App\Http\Controllers\admin_con\Faq;
use App\Http\Controllers\admin_con\Blog;
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
    Route::get('/edit/{id}', [Site_setting::class, 'loadForm'])->name('admin.site_setting.edit');
    Route::post('/edit/{id}', [Site_setting::class, 'submitForm'])->name('admin.site_setting.update');
});

/*-------------------------ontent---------------------------*/
Route::prefix('admin/content')->group(function () {
    Route::get('/edit/{id}', [Content::class, 'loadForm'])->name('admin.content.edit');
    Route::post('/edit/{id}', [Content::class, 'submitForm'])->name('admin.content.update');
});


/*------------------------slider----------------------*/
Route::prefix('admin/slider')->group(function () {
    Route::get('/', [Slider::class, 'listing'])->name('admin/slider/list');
    Route::post('/table', [Slider::class, 'getTableData'])->name('admin/slider/table');
    /*------add------*/
    Route::get('/add', [Slider::class, 'add_page_url'])->name('admin/slider/add');
    Route::post('/', [Slider::class, 'datastore_in_database'])->name('admin_con/slider/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Slider::class, 'edit_page_url'])->name('admin/slider/edit');
    Route::post('/edit/{id}', [Slider::class, 'dataupdate_in_database'])->name('admin_con/slider/update_data');
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


/*------------------------contact----------------------*/
Route::prefix('admin/packageenquiry')->group(function () {
    Route::get('/', [Packageenquiry::class, 'listing'])->name('admin/packageenquiry/list');
    Route::post('/table', [Packageenquiry::class, 'getTableData'])->name('admin/packageenquiry/table');
    /*------View------*/
    Route::get('/view/{id}', [Packageenquiry::class, 'view_page_url'])->name('admin/packageenquiry/view');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Packageenquiry::class, 'delete_data'])->name('admin_con/packageenquiry/delete_data');
    Route::delete('/multiple_delete_data', [Packageenquiry::class, 'multiple_delete_data'])->name('admin_con/packageenquiry/multiple_delete_data');
});



/*------------------------testimonials----------------------*/
Route::prefix('admin/testimonials')->group(function () {
    Route::get('/', [Testimonials::class, 'listing'])->name('admin/testimonials/list');
    Route::post('/table', [Testimonials::class, 'getTableData'])->name('admin/testimonials/table');
    /*------add------*/
    Route::get('/add', [Testimonials::class, 'add_page_url'])->name('admin/testimonials/add');
    Route::post('/', [Testimonials::class, 'datastore_in_database'])->name('admin_con/testimonials/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Testimonials::class, 'edit_page_url'])->name('admin/testimonials/edit');
    Route::post('/edit/{id}', [Testimonials::class, 'dataupdate_in_database'])->name('admin_con/testimonials/update_data');
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
    Route::post('/', [Multipleimage::class, 'datastore_in_database'])->name('admin_con/multipleimage/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Multipleimage::class, 'edit_page_url'])->name('admin/multipleimage/edit');
    Route::post('/edit/{id}', [Multipleimage::class, 'dataupdate_in_database'])->name('admin_con/multipleimage/update_data');
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













/*------------------------destination----------------------*/
Route::prefix('admin/destination')->group(function () {
    Route::get('/', [Destination::class, 'listing'])->name('admin/destination/list');
    Route::post('/table', [Destination::class, 'getTableData'])->name('admin/destination/table');
    /*------add------*/
    Route::get('/add', [Destination::class, 'add_page_url'])->name('admin/destination/add');
    Route::post('/', [Destination::class, 'datastore_in_database'])->name('admin_con/destination/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Destination::class, 'edit_page_url'])->name('admin/destination/edit');
    Route::post('/edit/{id}', [Destination::class, 'dataupdate_in_database'])->name('admin_con/destination/update_data');
    /*------status------*/
    Route::post('/update_status', [Destination::class, 'updateStatus'])->name('admin/destination/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Destination::class, 'delete_data'])->name('admin_con/destination/delete_data');
    Route::delete('/multiple_delete_data', [Destination::class, 'multiple_delete_data'])->name('admin_con/destination/multiple_delete_data');
});



/*------------------------destination----------------------*/
Route::prefix('admin/package')->group(function () {
    Route::get('/', [Package::class, 'listing'])->name('admin/package/list');
    Route::post('/table', [Package::class, 'getTableData'])->name('admin/package/table');
    /*------add------*/
    Route::get('/add', [Package::class, 'add_page_url'])->name('admin/package/add');
    Route::post('/', [Package::class, 'datastore_in_database'])->name('admin_con/package/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Package::class, 'edit_page_url'])->name('admin/package/edit');
    Route::post('/edit/{id}', [Package::class, 'dataupdate_in_database'])->name('admin_con/package/update_data');
    /*------status------*/
    Route::post('/update_status', [Package::class, 'updateStatus'])->name('admin/package/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Package::class, 'delete_data'])->name('admin_con/package/delete_data');
    Route::delete('/multiple_delete_data', [Package::class, 'multiple_delete_data'])->name('admin_con/package/multiple_delete_data');
    /*faq*/
    Route::post('/load_more_singlefaq', [Package::class, 'load_more_singlefaq'])->name('admin/package/load_more_singlefaq');
    Route::post('/load_more_singleitinerary', [Package::class, 'load_more_singleitinerary'])->name('admin/package/load_more_singleitinerary');
});



/*------------------------gallery----------------------*/
Route::prefix('admin/gallery')->group(function () {
    Route::get('/', [Gallery::class, 'listing'])->name('admin/gallery/list');
    Route::post('/table', [Gallery::class, 'getTableData'])->name('admin/gallery/table');
    /*------add------*/
    Route::get('/add', [Gallery::class, 'add_page_url'])->name('admin/gallery/add');
    Route::post('/', [Gallery::class, 'datastore_in_database'])->name('admin_con/gallery/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Gallery::class, 'edit_page_url'])->name('admin/gallery/edit');
    Route::post('/edit/{id}', [Gallery::class, 'dataupdate_in_database'])->name('admin_con/gallery/update_data');
    /*------status------*/
    Route::post('/update_status', [Gallery::class, 'updateStatus'])->name('admin/gallery/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Gallery::class, 'delete_data'])->name('admin_con/gallery/delete_data');
    Route::delete('/multiple_delete_data', [Gallery::class, 'multiple_delete_data'])->name('admin_con/gallery/multiple_delete_data');
});




/*------------------------gallery----------------------*/
Route::prefix('admin/instagramgallery')->group(function () {
    Route::get('/', [Instagramgallery::class, 'listing'])->name('admin/instagramgallery/list');
    Route::post('/table', [Instagramgallery::class, 'getTableData'])->name('admin/instagramgallery/table');
    /*------add------*/
    Route::get('/add', [Instagramgallery::class, 'add_page_url'])->name('admin/instagramgallery/add');
    Route::post('/', [Instagramgallery::class, 'datastore_in_database'])->name('admin_con/instagramgallery/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Instagramgallery::class, 'edit_page_url'])->name('admin/instagramgallery/edit');
    Route::post('/edit/{id}', [Instagramgallery::class, 'dataupdate_in_database'])->name('admin_con/instagramgallery/update_data');
    /*------status------*/
    Route::post('/update_status', [Instagramgallery::class, 'updateStatus'])->name('admin/instagramgallery/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Instagramgallery::class, 'delete_data'])->name('admin_con/instagramgallery/delete_data');
    Route::delete('/multiple_delete_data', [Instagramgallery::class, 'multiple_delete_data'])->name('admin_con/instagramgallery/multiple_delete_data');
});

/*------------------------gallery----------------------*/
Route::prefix('admin/faq')->group(function () {
    Route::get('/', [Faq::class, 'listing'])->name('admin/faq/list');
    Route::post('/table', [Faq::class, 'getTableData'])->name('admin/faq/table');
    /*------add------*/
    Route::get('/add', [Faq::class, 'add_page_url'])->name('admin/faq/add');
    Route::post('/', [Faq::class, 'datastore_in_database'])->name('admin_con/faq/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Faq::class, 'edit_page_url'])->name('admin/faq/edit');
    Route::post('/edit/{id}', [Faq::class, 'dataupdate_in_database'])->name('admin_con/faq/update_data');
    /*------status------*/
    Route::post('/update_status', [Faq::class, 'updateStatus'])->name('admin/faq/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Faq::class, 'delete_data'])->name('admin_con/faq/delete_data');
    Route::delete('/multiple_delete_data', [Faq::class, 'multiple_delete_data'])->name('admin_con/faq/multiple_delete_data');
});

/*------------------------blog----------------------*/
Route::prefix('admin/blog')->group(function () {
    Route::get('/', [Blog::class, 'listing'])->name('admin/blog/list');
    Route::post('/table', [Blog::class, 'getTableData'])->name('admin/blog/table');
    /*------add------*/
    Route::get('/add', [Blog::class, 'add_page_url'])->name('admin/blog/add');
    Route::post('/', [Blog::class, 'datastore_in_database'])->name('admin_con/blog/add_data');
    /*------upadte------*/
    Route::get('/edit/{id}', [Blog::class, 'edit_page_url'])->name('admin/blog/edit');
    Route::post('/edit/{id}', [Blog::class, 'dataupdate_in_database'])->name('admin_con/blog/update_data');
    /*------status------*/
    Route::post('/update_status', [Blog::class, 'updateStatus'])->name('admin/blog/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Blog::class, 'delete_data'])->name('admin_con/blog/delete_data');
    Route::delete('/multiple_delete_data', [Blog::class, 'multiple_delete_data'])->name('admin_con/blog/multiple_delete_data');
});