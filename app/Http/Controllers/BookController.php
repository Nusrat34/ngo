<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use Illuminate\Support\Facades\File;

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
          $fileName=null;
          if($request->hasFile('image'))
          {
              // generate name
               
              $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
              $request->file('image')->storeAs('/uploads',$fileName);
          }
  

          

         
           
        book::create([
            //database column name => input field name
                'book_name'=>$request->Book_name,
                'writter_name'=>$request->Writter_name,
                'category'=>$request->category,
                'image'=>$fileName,
                
                



        ]);

        

           
        return redirect()->back();

    }
    public function deletebook($book_id) 
    {
        book::findOrFail($book_id)->delete();
        return redirect()->back()->with('message','book deleted successfully');

        
  
  
  }

     public function viewbook($book_id){
        $book=book::find($book_id);
     return view('backend.pages.books.view',compact('book'));
     }


     public function editbook($book_id)
     {
         $book=book::find($book_id);
         return view('backend.pages.books.edit',compact('book'));
     }

     public function update(Request $request,$book_id)
     {

        $book=book::find($book_id);
        $fileName=$book->image;

        if($request->hasFile('image'))
        {
            // unsave file
            $removeFile=public_path().'/uploads/'.$fileName;
              File::delete($removeFile);
            
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
      
      
        }

        $book->update ([
            //database column name => input field name
                'book_name'=>$request->Book_name,
                'writter_name'=>$request->Writter_name,
                'catagory'=>$request->Catagory_name,
                'image'=>$fileName,
                
                
    
        
    
           ]);
           return redirect()->route('book')->with('message','Update success.');
          

     }
     
         
    
    }



