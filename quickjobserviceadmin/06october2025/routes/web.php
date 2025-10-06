<?php
require __DIR__.'/adminroute.php';
require __DIR__.'/userroute.php';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');



// Route::post('/contact-submit', [WebController::class, 'store']);
Route::post('/contact', [WebController::class, 'store'])->name('contact.store');

Route::post('/job', [WebController::class, 'applynow'])->name('jobapply.store');

Route::get('/searchjob', [WebController::class, 'searchjob'])->name('search.searchjob');
// Route::get('/job', [WebController::class, 'jobList'])->name('job.list');

/*purchase pdf*/
Route::post('/pdf', [WebController::class, 'purchasePDF'])->name('pdf.purchasePDF');

Route::post('/updateTranstion', [WebController::class, 'updateTranstion'])->name('updateTranstion');
    
// Catch-all route at the end
Route::get('/{slug?}', [WebController::class, 'loadPage'])->where('slug', '.*');