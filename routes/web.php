<?php

use App\Http\Controllers\penggunaController;
use App\Http\Controllers\produkbagController;
use App\Http\Controllers\produkbiscuitsController;
use App\Http\Controllers\produkblokController;
use App\Http\Controllers\produkdrinkController;
use App\Http\Controllers\produksingleController;
use App\Http\Controllers\transaksiController;
use Illuminate\Support\Facades\Route;

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
    return view('landingpage.landing');
});

Route::get('/product', function () {
    return view('landingpage.product');
});

Route::get('/creation', function () {
    return view('landingpage.creation');
});


Route::get('/dashboard/user', [penggunaController::class, 'index']);
Route::get('/dashboard/product-single', [produksingleController::class, 'index']);
Route::get('/dashboard/product-blocks', [produkblokController::class, 'index']);
Route::get('/dashboard/product-bags', [produkbagController::class, 'index']);
Route::get('/dashboard/product-drinks', [produkdrinkController::class, 'index']);
Route::get('/dashboard/product-biscuits', [produkbiscuitsController::class, 'index']);
Route::get('/dashboard/range', [transaksiController::class, 'index']);


// routes prefix
Route::prefix("dashboard")->group(function() {
    Route::get('/', function(){
        return view('dashboard.dashboard');
    })->name('db');

    Route::get('gift', function(){
        return view('dashboard.gift');
    })->name('gift');

    Route::get('admin', function(){
        return view('dashboard.admin');
    })->name('admin');

    // Route::get('user', function(){
    //     return view('dashboard.user');
    // })->name('user');

    // Route::get('range', function(){
    //     return view('dashboard.range');
    // })->name('range');

    // Route::get('product-single', function(){
    //     return view('dashboard.ps');
    // })->name('single-bar');

    // Route::get('product-blocks', function(){
    //     return view('dashboard.pb');
    // })->name('block');

    // Route::get('product-bags', function(){
    //     return view('dashboard.pbb');
    // })->name('bag');

    // Route::get('product-drinks', function(){
    //     return view('dashboard.pd');
    // })->name('drink');

    // Route::get('product-biscuits', function(){
    //     return view('dashboard.pbskt');
    // })->name('biscuits');




    Route::get('form-productsingle', function(){
        return view('dashboard.form.formsingle');
    })->name('brg');

    Route::get('form-productblock', function(){
        return view('dashboard.form.formblock');
    })->name('brg');

    Route::get('form-productbag', function(){
        return view('dashboard.form.formbag');
    })->name('brg');

    Route::get('form-productbiscuits', function(){
        return view('dashboard.form.formbskt');
    })->name('brg');

    Route::get('form-productdrink', function(){
        return view('dashboard.form.formdrink');
    })->name('brg');
});