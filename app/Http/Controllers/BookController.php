<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
class BookController extends Controller
{
    public function book (){
        return view ('backend.pages.books.book');
    }

    public function bookform() {
        return view ('backend.pages.books.bookform');
    }

    public function store(Request $request){
    
//        dd($request->all());
        book::create([
            //database column name => input field name
                'book_name'=>$request->Book_name,
                'writter_name'=>$request->Writter_name,
                'catagory'=>$request->Catagory_name,
                'image'=>$request->File,

        ]);

           
        return redirect()->back();

    }
    
}
