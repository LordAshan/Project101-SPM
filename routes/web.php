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
    return view('adminDashboard');
});

// Route::get('/tasks', function(){
//     return view('tasks');
// });

// Route::get('/about', function(){
//     return view('aboutUs');
// });

//Login
Route::get('/login', function(){
    return view('login');
});

//Admin Dashboard
Route::get('/adminDashboard', function(){
    return view('adminDashboard');
});

//Employee List - Admin
Route::get('/adminEmployeeList', function(){
    return view('adminEmployeeList');
});

//Employee Add - Admin
Route::get('/adminEmployeeAdd', function(){
    return view('adminEmployeeAdd');
});

//Employee Edit - Admin
Route::get('/adminEmployeeEdit', function(){
    return view('adminEmployeeEdit');
});

//Employee Edit - Admin
Route::get('/team', function(){
    return view('team');
});


Route::get('/login','PagesController@indexLogin');

// Route::get('/dashboard','PagesController@indexAdminDashboard');

Route::post('/addEmp', 'App\Http\Controllers\EmpController@store' );

//employee view employee list
Route::get('/adminEmployeeList', 'App\Http\Controllers\EmpController@emp_view' );


//search
Route::get('/search', 'App\Http\Controllers\EmpController@search_emp');

Route::get('/admin/pdf', [EmpController::class, 'downloadPdf']);