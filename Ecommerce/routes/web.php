<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Payment;
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

// Route::get('/', function () {
//     return view('user.home');
// });

// Route::get('/product', function () {
//     return view('user.product');
// });

// Route::get('/showcart', function () {
//     return view('user.home');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/', [HomeController::class, 'index']);

route::get('/product', [AdminController::class, 'product']);

route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

route::get('/boy', [BoyController::class,'boy']);

route::post('/uploadboy', [BoyController::class, 'uploadboy']);

route::get('/showboy', [BoyController::class, 'showboy']);

route::get('/deleteboy/{id}', [BoyController::class, 'deleteboy']);

route::get('/updateboy/{id}', [BoyController::class, 'updateboy']);

route::post('/updateboys/{id}', [BoyController::class, 'updateboys']);

route::get('/showproduct', [AdminController::class,'showproduct']);

route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

route::get('/updateview/{id}', [AdminController::class, 'updateview']);

route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

route::get('/search', [HomeController::class, 'search']);

route::post('/addcart/{id}', [HomeController::class, 'addcart']);

route::get('/showcart', [HomeController::class, 'showcart']);

route::get('/delete/{id}', [HomeController::class, 'deletecart']);

route::post('/order', [HomeController::class, 'confirmorder']);

route::get('/showorder', [AdminController::class, 'showorder']);

route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

Route::get('/rating', function () {
    return view('rating');
});
// Route::get('/payment', function () {
//     return view('payment');
// });
route::get('/payment', [HomeController::class, 'payment']);

Route::get('/pro', function () {
    return view('pro');
});

// route::get('/boy', [BoyController::class,'boy']);
// route::post('/uploadboy', [BoyController::class,'uploadboy']);

//Route::get('view_delivery_boy', [boyController::class, 'index']);
// route::get('/deleteproduct/{id}', [boyController::class, 'deleteproduct']);

// Route::get('edit-student/{id}', [boyController::class, 'edit']);
// Route::put('update-student/{id}', [boyController::class, 'update']);

Route::get('/submit',[Payment::class,'submit']);
Route::get('/instamojo_redirect',[Payment::class,'instamojo_redirect']);

Route::get('/changeStatus',[BoyController::class,'changeMemberStatus'])->name('changeStatus');

route::get('/rating', [RatingController::class,'rating']);

route::post('/uploadrating', [RatingController::class, 'uploadrating']);
route::get('/showrating', [RatingController::class, 'showrating']);
route::get('/deleterating/{id}', [RatingController::class, 'deleterating']);

route::get('/contact', [ContactController::class,'contact']);
route::post('/uploadcontact', [ContactController::class, 'uploadcontact']);


