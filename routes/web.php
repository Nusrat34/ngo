<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;



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
Route::get('/',function(){
    return view('backend.adminpanel');
});

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/contact',[AdminController::class,'contact'])->name('contact');



