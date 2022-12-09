<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\Frontend\DonourController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\StudentDonationController;
use App\Http\Controllers\TranscationController;
use App\Http\Controllers\Frontend\BController;

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

Route::get('/donor',[DonorController::class,'donor'])->name('donor');
Route::get('/donor/donorform',[DonorController::class,'donorform'])->name('donor.donorform');
Route::post('/donor/donorform',[DonorController::class,'store'])->name('donor.donorform.store');
// donor approve//
Route::get('/donor/approve/{donor_id}',[DonorController::class,'donorapprove'])->name('donor.approve');

Route::get('/donation',[DonationController::class,'list'])->name('donation');
//student donationapply//
Route::get('/student_request',[StudentDonationController::class,'requestlist'])->name('request.list');
//student donation approve//
Route::get('/student/approve/{student_id}',[StudentDonationController::class,'studentdonation'])->name('approve.studentd');
//scholarship//
Route::get('/scholarship',[ScholarshipController::class,'scholarshiplist'])->name('scholarship.list');
//scholarship aprove//
Route::get('/scholarship/update/{id}',[ScholarshipController::class,'scholarupdate'])->name('scholarship.update');
Route::get('/transaction',[TranscationController::class,'transaction'])->name('transaction.list');
Route::get('/transaction/show',[TranscationController::class,'transaction_show'])->name('transaction.show');
Route::post('/transaction/store',[TranscationController::class,'t_store'])->name('transaction.store');


Route::get('/loan',[LoanController::class,'loanlist'])->name('loan.list');

Route ::get('/notice',[NoticeController::class,'notice']) ->name('notice');
Route ::get('/notice/noticeform',[NoticeController::class,'noticeform']) ->name('notice.noticeform');
Route ::post('/notice/noticeform/store',[NoticeController::class,'store'])->name('notice.noticeform.store');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

});
//frontend routes

Route::get('/',[WebController::class,'home'])->name('webpage');
Route::post('/registration',[WebController::class,'registration'])->name('registration');
Route::post('/user/login',[WebController::class,'login'])->name('user.login');
Route::get('/user/logout', [WebController::class, 'logout'])->name('user.logout');

Route::get('/donor/form',[DonourController::class,'donateform'])->name('user.donor.form');
Route::post('/donor/form/store',[DonourController::class,'store'])->name('user.store');
Route::post('/donation/form',[DonationController::class,'applydonation'])->name('apply.donation');
Route::get('/donationlist/form',[DonationController::class,'donationlist'])->name('donation.list');
Route::get('/memberlist/form',[MemberController::class,'memberlist'])->name('member.list');


Route::get('/studentdonation/form',[StudentDonationController::class,'studentlist'])->name('student.list');
Route::post('/applydonation/form',[StudentDonationController::class,'sdonation'])->name('sdonation.list');

Route::get('/sapply/form',[ScholarshipController::class,'s_apply'])->name('s.apply');
Route::post('/applyscholarship/form',[ScholarshipController::class,'scholarship'])->name('scholarship.form');
Route::get('/scholarship/show',[ScholarshipController::class,'scholarshipshow'])->name('scholarship.show');
Route::get('/notice/show',[NoticeController::class,'noticeshow'])->name('notice.list');
//loan apply
Route::get('/loanform',[LoanController::class,'loan_form'])->name('loan.form');
Route::post('/loan/apply',[LoanController::class,'loan_store'])->name('loan.store');
Route::get('/book/form',[BController::class,'book_form'])->name('book.apply');
