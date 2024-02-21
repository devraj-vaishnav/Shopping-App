<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ContactController;
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

Auth::routes();


Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/',[LayoutController::class,'index'])->name('index');
    Route::get('/about',[LayoutController::class,'about'])->name('about');
    Route::get('/contact',[LayoutController::class,'contact'])->name('contact');
    Route::get('/course',[LayoutController::class,'course'])->name('course');
    
    
    Route::post('contact/store',[contactController::class,'store'])->name('contact/store');
    
    
});