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

// Route::get('/home/{slug}', function () { // home app trang chu
//     return view('');
// });

Route::any('/ddashboard/{slug}', function(){ // dashboard app trang quanr tri
    return view('dashboard.index');
});
