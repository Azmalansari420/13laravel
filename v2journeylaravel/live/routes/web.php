<?php
require __DIR__.'/adminroute.php';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('index');
});


Route::get('about', function () 
{
    return view('about');
});
Route::get('destinations', function () 
{
    return view('destinations');
});





Route::get('blog', function () 
{
    return view('blog');
});


Route::get('gallery', function () 
{
    return view('gallery');
});
Route::get('faq', function () 
{
    return view('faq');
});


Route::get('packages', function () 
{
    return view('packages');
});




Route::get('contact', function () 
{
    return view('contact');
});


Route::get('privacy-policy', function () 
{
    return view('privacy-policy');
});


Route::get('term-condition', function () 
{
    return view('term-condition');
});


Route::get('thankyou', function () {
    return view('thankyou');
})->name('thankyou');


// Route::post('/contact-submit', [WebController::class, 'store']);
Route::post('/contact', [WebController::class, 'store'])->name('contact.store');
Route::post('/packagedata', [WebController::class, 'packagedata'])->name('packagedata');

Route::post('/packageenquiry', [WebController::class, 'packageenquiry'])->name('packageenquiry.store');

/*destination list*/
Route::get('/destination-list/{slug}', [WebController::class, 'showDestination'])->name('destination.show');

/*destination list*/
Route::get('/package-details/{slug}', [WebController::class, 'showpackagedetails'])->name('packagedetails.show');

Route::get('/blog-details/{slug}', [WebController::class, 'blogdetails'])->name('blogdetails.show');

