<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageContoller;
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

Route::get('/',[PageContoller::class,'index'])->name('home');
Route::get('/about',[PageContoller::class,'about'])->name('about');
Route::get('/services',[PageContoller::class,'services'])->name('services');
Route::get('/posts',[PageContoller::class,'posts'])->name('posts');

Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'submitMessage'])->name('contact');




