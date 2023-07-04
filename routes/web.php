<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[SiteController::class, 'index'])->name('index');
Route::get('/about',[SiteController::class, 'about'])->name('about');
Route::get('/destination',[SiteController::class, 'destination'])->name('destination');
Route::get('/destination-details',[SiteController::class, 'destinationDetail'])->name('destination-detail');
Route::get('/service',[SiteController::class, 'service'])->name('service');
Route::get('/service-detail',[SiteController::class, 'serviceDetail'])->name('service-detail');
Route::get('/contacts',[SiteController::class, 'contact'])->name('contact');
Route::get('/enquiry',[SiteController::class, 'enquiry'])->name('enquiry');




Route::get('/colleges',[SiteController::class, 'colleges'])->name('college');
Route::get('/college-details',[SiteController::class, 'collegeDetail'])->name('college-detail');

Route::get('/blogs',[SiteController::class, 'blog'])->name('blog');





// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');
