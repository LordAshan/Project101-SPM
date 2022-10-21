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
    return view('welcome');
});

// Route::get('/tasks', function(){
//     return view('tasks');
// });

// Route::get('/about', function(){
//     return view('aboutUs');
// });

Route::get('/dashboard', function(){
    return view('adminDashboard');
});

Route::get('/empaddmenu', function(){
    return view('empAddMenu');
});

Route::get('/about','PagesController@indexAboutUs');

// Route::get('/dashboard','PagesController@indexAdminDashboard');


//Customer Create Account
Route::get('/createaccount', function(){
    return view('cusCreateAccount');
});

Route::post('/saveUser','App\Http\Controllers\UserController@store');