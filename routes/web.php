<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', function () {
    return view('index')->with('count',1);
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::post('/contact-us',[ContactUsController::class,'sendContactUs'] );
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about-us', function () {
    return view('about')->with('count',1);;
});
Route::get('/causes-details', function () {
    return view('causes-detail');
});
Route::get('our-causes', function () {
    return view('causes');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
