<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;

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
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function (){




Route::get('/book',[BookController::class,'book'])->name('book');
Route::get('book/bookform',[BookController::class,'bookform'])->name('book.bookform');
Route::post('book/bookform/store',[BookController::class,'store'])->name('book.bookform.store');

//delete//
Route::get('/book/delete/{book_id}',[BookController::class,'deletebook'])->name('admin.book.delete');
 Route::get('/book/view/{book_id}',[BookController::class,'viewbook'])->name('admin.book.view');
 Route::get('/book/edit/{book_id}',[BookController::class,'editbook'])->name('admin.book.edit');
 Route::put('/book/update/{book_id}',[BookController::class,'update'])->name('admin.book.update');

Route::get('/member',[MemberController::class,'member'])->name('member');
Route::get('/member/memberform',[MemberController::class,'memberform'])->name('member.memberform');
Route::post('/member/memberform',[MemberController::class,'store'])->name('member.memberform.store');

Route ::get('/notice',[NoticeController::class,'notice']) ->name('notice');
Route ::get('/notice/noticeform',[NoticeController::class,'noticeform']) ->name('notice.noticeform');
Route ::post('/notice/noticeform/store',[NoticeController::class,'store'])->name('notice.noticeform.store');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

});
Route::get('/',[WebController::class,'home'])->name('webpage');
Route::post('/registration',[WebController::class,'registration'])->name('registration');
Route::post('/user/login',[WebController::class,'login'])->name('user.login');
Route::get('/user/logout', [WebController::class, 'logout'])->name('user.logout');
