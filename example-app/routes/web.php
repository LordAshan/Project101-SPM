<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;

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

Route::get('/empAddMenu', function(){
    return view('empAddMenu');
});

Route::get('/adminAddMenu', function(){
    return view('adminAddMenu');
});

Route::get('/adminMenuView', function(){
    return view('adminMenuView');
});
Route::get('/adminMenuView', function(){
    return view('adminMenuView');
});
Route::get('/customerReviewAdd', function(){
    return view('customerReviewAdd');
});

Route::post('/addFood', 'App\Http\Controllers\FoodMenuController@store' );
Route::get('/imageView', 'App\Http\Controllers\FoodMenuController@food_view' );

//admin view employee details
Route::get('/employeeEmployeeList', 'App\Http\Controllers\AdminController@emp_view' );

// Route::get('/about','PagesController@indexAboutUs');

Route::get('/about', 'App\Http\Controllers\PagesController@indexAboutUs' );

// Route::get('/dashboard','PagesController@indexAdminDashboard');

//image View
Route::get('/add-image',[FoodMenuController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[FoodMenuController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/employeeMenuView',[FoodMenuController::class,'viewImage'])->name('images.view');


Route::post('/store-image',[AdminController::class,'storeImage'])
->name('image.store');


Route::get('/add-image',[FoodMenuController::class,'addImage'])->name('images.add');

Route::get('/adminMenuView',[AdminController::class,'viewImage'])->name('images.view');


//search
Route::get('/search', 'App\Http\Controllers\AdminController@search_emp');

Route::get('/admin/pdf', [AdminController::class, 'downloadPdf']);

//delete menu 

Route::get('/deleteMenu/{id}', 'App\Http\Controllers\AdminController@deleteMenu' );

//review
Route::get('/add-image',[AdminController::class,'addImage'])->name('image.add');

//For storing an image
Route::post('/store-image',[AdminController::class,'storeImage'])
->name('image.store');

Route::get('/customerReviewView',[AdminController::class,'viewImage'])->name('images.view');

//update admin food menu
Route::get('/updateFood/{id}', 'App\Http\Controllers\AdminController@updateFoodDetails' );
Route::post('/updateFood', 'App\Http\Controllers\AdminController@updateFood' );



Route::get('/updateEmpFood/{id}', 'App\Http\Controllers\AdminController@updateFoodDetails' );
Route::post('/updateEmpFood', 'App\Http\Controllers\AdminController@updateEmpFood' );
=======
// Route::get('/dashboard','PagesController@indexAdminDashboard');


//Customer Create Account
Route::get('/createaccount', function(){
    return view('cusCreateAccount');
});

Route::post('/saveUser','App\Http\Controllers\UserController@store');

//Admin Customer View
Route::get('/admincustomer', function(){

    $data=App\Models\User::all();

    return view('adminCusView')->with('users',$data);
});

//Admin Order View
Route::get('/adminorder', function(){

    $data=App\Models\Order::all();
    
    return view('adminOrderView')->with('orders',$data);
});

//Admin Customer Search
Route::get('/customersearch', 'App\Http\Controllers\UserController@search_cus');

