<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BController extends Controller
{
    public function book_form (){
        return view('Frontend.pages.book.abook');
    }
} 
