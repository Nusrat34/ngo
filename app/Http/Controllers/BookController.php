<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book (){
        return view ('backend.pages.books.book');
    }

    public function bookform() {
        return view ('backend.pages.books.bookform');
    }
}
