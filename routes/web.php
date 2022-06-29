<?php

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
    return redirect(route('login'));
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/admindashboard', function () { return view('dashboard');})->name('dashboard');
    Route::get('/dashboard', function () { return view('userdashboard');});
    Route::get('/product', function () { return view('product');});
    Route::get('/jobdetail', function () { return view('jobdetail');});
    
});
