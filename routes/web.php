<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\HelloController;
use App\Http\Controllers\NewsController;
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


Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    Route::get('/', [UserController::class, 'show']);
Route::post('/add', [UserController::class, 'ajouterUser']);
});
Route::group(['namespace'=>'Front'],function(){
    Route::get('/hello',[HelloController::class,'showString']);
});
 

//  Route::namespace('Front')->group(function(){
//     Route::get('/hello',[HelloController::class,'showString']);
// });

Route::get('/page1',[HelloController::class,'index']);


Route::resource('news',NewsController::class);

Route::get('/landing',function(){
    return view('lading');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
