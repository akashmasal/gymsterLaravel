<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ClassController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/classes',[ClassController::class,'index']);
Route::get('/team',[TeamController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/detail',[BlogController::class,'detail']);
Route::get('/testimonial',[BlogController::class,'testimonial']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/user-query',[ContactController::class,'userQuery']);