<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserController;

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
    return view('backend.master');
});



Route::get('/login',[UserController::class,'login'])->name('login');



Route::get('/book',[BookController::class,'book']);
Route::get('book/bookform',[BookController::class,'bookform']);
Route::post('book/bookform/store',[BookController::class,'store'])->name('book.bookform.store');

Route::get('/member',[MemberController::class,'member']);
Route::get('/member/memberform',[MemberController::class,'memberform']);
Route::post('/member/memberform',[MemberController::class,'store'])->name('member.memberform.store');

Route ::get('/notice',[NoticeController::class,'notice']);
Route ::get('/notice/noticeform',[NoticeController::class,'noticeform']);
Route ::post('/notice/noticeform/store',[NoticeController::class,'store'])->name('notice.noticeform.store');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');


