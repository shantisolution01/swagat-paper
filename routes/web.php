<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\CareerController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\EnquiryController;
use App\Http\Controllers\web\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/career',[CareerController::class,'index'])->name('career');
Route::get('/product/kraft-paper',[ProductController::class,'kraftpaper'])->name('product.kraft-paper');
Route::get('/product/duplex-board',[ProductController::class,'duplexboard'])->name('product.duplex-board');
Route::get('/enquiry',[EnquiryController::class,'index'])->name('enquiry');
Route::post('/enquiry/send-message',[EnquiryController::class,'sendMessage'])->name('enquiry.send-message');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/change', [HomeController::class, 'change'])->name('changeLang');

