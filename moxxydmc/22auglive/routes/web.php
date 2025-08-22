<?php
require __DIR__.'/adminroute.php';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/thankyou', function () {
//     return view('thankyou');
// })->name('thankyou');



// Route::post('/contact-submit', [WebController::class, 'store']);
Route::post('/contact', [WebController::class, 'store'])->name('contact.store');
Route::post('/package_form', [WebController::class, 'package_data'])->name('package.store');


    
// Catch-all route at the end
Route::get('/{slug?}', [WebController::class, 'loadPage'])->where('slug', '.*');