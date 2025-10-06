<?php


use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;



Route::post('/userregistration', [Users::class, 'userRegistration'])->name('userregistration');

Route::post('/userLogin', [Users::class, 'userLogin'])->name('userLogin');

Route::get('/userlogout', [Users::class, 'userlogout'])->name('userlogout');

Route::post('/userProfileUpdate', [Users::class, 'userProfileUpdate'])->name('userProfileUpdate');
Route::post('/usersocialUpdate', [Users::class, 'usersocialUpdate'])->name('usersocialUpdate');
Route::post('/userLogoUpload', [Users::class, 'userLogoUpload'])->name('userLogoUpload');