<?php

use App\Http\Controllers\ActiorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

Route::get('/',[MainController::class,'index']);
//Route::get('{id}',[MainController::class, 'show']);

//Route::resource('/user', UserController::class);
Route::get('/user',[UserController::class,'index'])->name('userindex');
Route::get('/user/create',[UserController::class,'create'])->name('usercrete');
Route::post('/user',[UserController::class,'store'])->name('userstory');
Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('useredit');
Route::post('/user/{id}/edit',[UserController::class,'update'])->name('userupdate');

//actior routes ///
Route::get('/actior', [ActiorController::class, 'index'])->name('actiorindex');
Route::get('/actior/create', [ActiorController::class, 'create'])->name('actiorcreate');
Route::get('/actior/{id}', [ActiorController::class, 'show'])->name('actiorshow');
Route::post('/actior',[ActiorController::class,'store'])->name('actiorstore');
Route::get('/actior/{id}/edit',[ActiorController::class,'edit'])->name('actioredit');
Route::post('actiorimage/{id}', [ImageController::class, 'image'])->name('actiorimage');
Route::post('/actior/{id}/edit',[ActiorController::class,'update'])->name('actiorupdate');


//Route::resource('/tag', TagController::class);
Route::get('/tag/create',[TagController::class,'create'])->name('tagcreate');
Route::post('/tag',[TagController::class,'store'])->name('tagstore');
Route::get('/tag',[TagController::class,'index'])->name('tagindex');
Route::post('/tag.{id}/edit',[TagController::class,'update'])->name('tagupdate');
Route::get('/tag/{id}/edit',[TagController::class,'edit'])->name('tagedit');


//Route::resource('/category', CategoryController::class);
Route::get('/category',[CategoryController::class,'index'])->name('categoryindex');
Route::post('/category',[CategoryController::class,'store'])->name('categorystore');
Route::get('/category/create',[CategoryController::class, 'create'])->name('categorycreate');
Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('categoryedit');
Route::post('/category/{id}/edit',[CategoryController::class,'update'])->name('categoryupdate');


//Route::resource('/movie', MovieController::class);
Route::get('/movie',[MovieController::class,'index'])->name('movieindex');
