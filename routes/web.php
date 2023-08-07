<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Product\ProductComponent;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/product_details', function () {
    return view('products.product_details');
});

Route::get('/signupin', function () {
    return view('signupin');
});

//Authentication Multi Login

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

//User Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/",[HomeController::class,'index'])->name('index');
// });

Route::get("/",[HomeController::class,'index'])->name('index');

//Admin Route
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/dashboard",[HomeController::class,'adminHome'])->name('dashboard');
});


// Products - CRUD
Route::get('/products',[ProductController::class,'index']);

Route::get('/create',[ProductController::class,'create']);

Route::post('/post',[ProductController::class,'store']);
Route::delete('/delete/{id}',[ProductController::class,'destroy']);
Route::get('/edit/{id}',[ProductController::class,'edit']);

Route::delete('/deleteimage/{id}',[ProductController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[ProductController::class,'deletecover']);

Route::put('/update/{id}',[ProductController::class,'update']);
// Route::resource('products', ProductController::class);

// Product Detail
Route::get('/product_details/{id}',[HomeController::class,'product_details']);

// Add to Cart
Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

// Show Cart
Route::get('/show_cart',[HomeController::class,'show_cart']);

Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

//Show Order
Route::get('/show_order',[HomeController::class,'show_order']);
Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);


// COD
Route::get('/cash_order',[HomeController::class,'cash_order']);

Route::controller(HomeController::class)->group(function() {
    Route::get('/payment/{totalprice}','payment');
    Route::post('/payment/{totalprice}','paymentPost')->name('payment.post');
});

// Route::get('/payment/{totalprice}',[HomeController::class,'payment']);

// Route::post('/payment/{totalprice}',[HomeController::class,'paymentPost'])->name('payment.post');


//Order View (admin)
Route::get('/order',[HomeController::class,'order']);

Route::get('/delivered/{id}',[HomeController::class,'delivered']);
