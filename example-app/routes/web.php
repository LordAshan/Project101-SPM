<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\AdminController;

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

//admin dashboard
Route::get('/adminDashboard', function(){
    return view('adminDashboard');
});

//admin add menu form
Route::get('/adminAddMenu', function(){
    return view('adminAddMenu');
});

//admin view menu
Route::get('/adminMenuView', function(){
    return view('adminMenuView');
});

//employee view menu
Route::get('/employeeMenuView', function(){
    return view('employeeMenuView');
});

//employee add menu form
Route::get('/empAddMenu', function(){
    return view('empAddMenu');
});

//employee view emplloyee list
Route::get('/employeeEmployeeList', function(){
    return view('employeeEmployeeList');
});


//through controller
Route::get('/about','PagesController@indexAboutUs');
Route::post('/addFood', 'App\Http\Controllers\FoodMenuController@storeImage' );
Route::get('/imageView', 'App\Http\Controllers\FoodMenuController@food_view' );
//employee view employee list
Route::get('/employeeEmployeeList', 'App\Http\Controllers\AdminController@emp_view' );

Route::get('/about', 'App\Http\Controllers\PagesController@indexAboutUs' );

//image View
//image View
Route::get('/add-image',[FoodMenuController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[FoodMenuController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/employeeMenuView',[FoodMenuController::class,'viewImage'])->name('images.view');

// Route::get('/dashboard','PagesController@indexAdminDashboard');
Route::get('/adminMenuView',[AdminController::class,'viewImage'])->name('images.view');

Route::post('/store-image',[AdminController::class,'storeImage'])
->name('image.store');

//search
Route::get('/search', 'App\Http\Controllers\AdminController@search_emp');

Route::get('/admin/pdf', [AdminController::class, 'downloadPdf']);


//delete menu 

Route::get('/deleteMenu/{id}', 'App\Http\Controllers\AdminController@deleteMenu' );