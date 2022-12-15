<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Http\Request;
use App\Models\book;

class BController extends Controller
{
    public function book_list (){
        $books = Book::all();
        return view('Frontend.pages.book.book_list', compact('books'));
    }
    public function bookshow(Request $request){
          
        Apply::create([
            //database column name => input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'book_name'=>$request->book_name,
            'writter_name'=>$request->writter_name,
            'category'=>$request->category,
        ]);

        

           
        return redirect()->route('webpage');
    }

    
    
}
