<?php

use App\Http\Controllers\AppliedBookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScholarshiptypeController;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.master');
});



Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/do-login', [UserController::class, 'doLogin'])->name('do.login');


Route::group(['middleware' => 'adminMiddleware', 'prefix' => 'admin'], function () {




    Route::get('/logout', [UserController::class, 'logout'])->name('logout');


    Route::get('/book', [BookController::class, 'book'])->name('book');
    Route::get('book/bookform', [BookController::class, 'bookform'])->name('book.bookform');
    Route::post('book/bookform/store', [BookController::class, 'store'])->name('book.bookform.store');
    //contact//
    Route::get('/contact/list', [ContactController::class, 'message'])->name('contact.message');
    Route::get('/contact/delete{contact_id}', [ContactController::class, 'delete'])->name('contact.delete');
    //delete//
    Route::get('/book/view/{book_id}', [BookController::class, 'viewbook'])->name('admin.book.view');
    Route::get('/book/edit/{book_id}', [BookController::class, 'editbook'])->name('admin.book.edit');
    Route::put('/book/update/{book_id}', [BookController::class, 'update'])->name('admin.book.update');
    Route::get('/book/delete/{book_id}', [BookController::class, 'deletebook'])->name('admin.book.delete');

    // Applied Books
    Route::get('/book/sapply', [BookController::class, 'bapply'])->name('b.apply');
    Route::get('/book/approve/{id}', [BookController::class, 'bookapprove'])->name('bookapply.approve');

    Route::get('/member', [MemberController::class, 'member'])->name('member');
    Route::get('/member/memberform', [MemberController::class, 'memberform'])->name('member.memberform');
    Route::post('/member/memberform', [MemberController::class, 'store'])->name('member.memberform.store');
    Route::get('/member/edit/{member_id}', [MemberController::class, 'edit'])->name('member.edit');
    Route::put('/member/update/{member_id}', [MemberController::class, 'update'])->name('member.update');
    Route::get('/member/delete/{member_id}', [MemberController::class, 'delete'])->name('member.delete');

    Route::get('/donor', [DonorController::class, 'donor'])->name('donor');
    Route::get('/donor/donorform', [DonorController::class, 'donorform'])->name('donor.donorform');
    Route::post('/donor/donorform', [DonorController::class, 'store'])->name('donor.donorform.store');
    // donor approve//
    Route::get('/donor/approve/{donor_id}', [DonorController::class, 'donorapprove'])->name('donor.approve');
    //student donationapply//
    Route::get('/student_request', [StudentDonationController::class, 'requestlist'])->name('request.list');
    //student donation approve//
    Route::get('/student/approve/{student_id}', [StudentDonationController::class, 'studentdonation'])->name('approve.studentd');

    //scholarship//
    Route::get('/scholarship', [ScholarshipController::class, 'index'])->name('scholarships.index');
    Route::get('/scholarship/create', [ScholarshipController::class, 'create'])->name('scholarship.create');
    Route::post('/scholarship/store', [ScholarshipController::class, 'store'])->name('scholarship.store');

    Route::get('/scholarship/appliations', [ScholarshipController::class, 'scholarship_applications'])->name('scholarship.appliations');
    Route::get('/scholarship/appliation/approve/{id}', [ScholarshipController::class, 'approve_scholarship'])->name('approve.scholarship');

    //scholarship aprove//
    Route::get('/scholarship/update/{id}', [ScholarshipController::class, 'scholarupdate'])->name('scholarship.update');
    Route::get('/scholarship/edit/{id}', [ScholarshipController::class, 'scholaredit'])->name('scholarship.edit');
    Route::put('/scholarship/showw/{id}', [ScholarshipController::class, 'scholareshoww'])->name('scholarship.showw');
    //scholarship aprove//

    //book apply approve//
    Route::get('/transaction', [TranscationController::class, 'transaction'])->name('transaction.list');
    Route::get('/transaction/show', [TranscationController::class, 'transaction_show'])->name('transaction.show');
    Route::post('/transaction/store', [TranscationController::class, 't_store'])->name('transaction.store');


    Route::get('/loan', [LoanController::class, 'loanlist'])->name('loan.list');

    Route::get('/notice', [NoticeController::class, 'notice'])->name('notice');
    Route::get('/notice/noticeform', [NoticeController::class, 'noticeform'])->name('notice.noticeform');
    Route::post('/notice/noticeform/store', [NoticeController::class, 'store'])->name('notice.noticeform.store');
    //notice update//
    Route::get('/notice/edit/{notice_id}', [NoticeController::class, 'notice_edit'])->name('notice.edit');
    Route::put('/notice/update/{notice_id}', [NoticeController::class, 'notice_update'])->name('notice.update');
    Route::get('/notice/delete/{notice_id}', [NoticeController::class, 'notice_delete'])->name('notice.delete');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/report', [ReportController::class, 'report'])->name('report.list');
    Route::get('/scholarshipreport', [ReportController::class, 'scholarshipreport'])->name('scholarship.report');
    Route::get('/transactionreport', [ReportController::class, 'transactionreport'])->name('transation.report');
    Route::get('/transactionreport/search', [ReportController::class, 'transactionreport_search'])->name('transation.reportsearch');
    Route::get('/report/search', [ReportController::class, 'reportSearch'])->name('tran.report.search');
    Route::get('/scholarship/search', [ReportController::class, 'scholarshipsearch'])->name('scholarship.search');
});

//frontend routes

Route::get('/', [WebController::class, 'home'])->name('webpage');
Route::get('/homepage', [WebController::class, 'home_page'])->name('home.page');
Route::post('/registration', [WebController::class, 'registration'])->name('registration');
Route::post('/user/login', [WebController::class, 'login'])->name('user.login');
Route::get('/user/logout', [WebController::class, 'logout'])->name('user.logout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.us');
    Route::put('/profile/update', [ProfileController::class, 'updateprofile'])->name('profile.update');


    Route::get('/donor/form', [DonourController::class, 'donateform'])->name('user.donor.form');

    Route::post('/donor/form/store', [DonourController::class, 'store'])->name('user.store');
    //approvedonorlist
    Route::get('/donationlist/form', [DonorController::class, 'donorlist'])->name('donation.list');


    Route::get('/studentdonation/form', [StudentDonationController::class, 'studentlist'])->name('student.list');
    Route::post('/applydonation/form', [StudentDonationController::class, 'sdonation'])->name('sdonation.list');
    Route::get('/sdonation/show', [StudentDonationController::class, 'studentshow'])->name('s.donation');

    Route::get('/sapply/form', [ScholarshipController::class, 's_apply'])->name('s.apply');
    Route::post('/applyscholarship/form', [ScholarshipController::class, 'scholarship'])->name('scholarship.form');
    Route::get('/scholarship/show', [ScholarshipController::class, 'scholarshipshow'])->name('scholarship.show');
    //applied scholarship list
    Route::get('/scholarship/applied', [ScholarshipController::class, 'scholarship_applied'])->name('scholarship.applied');
    Route::get('/notice/show', [NoticeController::class, 'noticeshow'])->name('notice.list');
    Route::get('/books', [BController::class, 'book_list'])->name('books');
    Route::post('/book/show', [BController::class, 'bookshow'])->name('book.show');
    //contact
    Route::get('/contact/us', [ContactController::class, 'contactus'])->name('contact.us');
    Route::post('/contact', [ContactController::class, 'contact'])->name('contact.store');


    Route::get('/book/apply/{id}', [AppliedBookController::class, 'apply_for_book'])->name('apply_for_book');

    Route::get('/book/list', [BookController::class, 'book_list'])->name('apply.booklist');
    Route::get('/book/download/{id}', [BookController::class, 'bookDownloadFromServer'])->name('apply.booklist.bookDownloadFromServer');
    Route::get('/preview/book/{id}', [BookController::class, 'bookPreview'])->name('book.preview.frontend');

    // apply for the sholarship
    Route::get('/scholarship/apply/{id}', [ScholarshipController::class, 'apply_for_sholarship'])->name('apply_for_sholarship');
    Route::post('/scholarship/apply/store', [ScholarshipController::class, 'scholarship_appliation_store'])->name('scholarship.appliation.store');
});

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('ssl.payment');
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
