<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
class BookController extends Controller
{
    public function book (){

       // $boi=book::all();//
        $boi=book::paginate(3);
        //dd($boi);
        return view ('backend.pages.books.book',compact('boi'));
    }

    public function bookform() {
        return view ('backend.pages.books.bookform');
    }

    public function store(Request $request){
    
        //dd($request->all()); //

          $request->validate(['Book_name'=>'required|unique:books,book_name',]);

         
           
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
