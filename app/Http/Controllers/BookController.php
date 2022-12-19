<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Apply;
use App\Models\AppliedBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Response;

class BookController extends Controller
{
    public function book (){

       // $boi=book::all();//
        $boi=book::paginate(8);
        //dd($boi);
        return view ('backend.pages.books.book',compact('boi'));
    }

    public function bookform() {
        return view ('backend.pages.books.bookform');
    }

    public function store(Request $request){
    
        //dd($request->all()); //

          $request->validate(['book_name'=>'required|unique:books,book_name',]);
          $fileName='';
          if($request->hasFile('file'))
          {
              // generate name
               
              $fileName=date('Ymdhmi').'.'.$request->file('file')->getClientOriginalExtension();
              $request->file('file')->storeAs('/uploads',$fileName);
          }
   
        book::create([
            //database column name => input field name
                'book_name'=>$request->book_name,
                'writter_name'=>$request->writter_name,
                'category'=>$request->category,
                'file'=>$fileName

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
        $fileName=$book->file;

        if($request->hasFile('file'))
        {
            // unsave file
            $removeFile=public_path().'/uploads/'.$fileName;
              File::delete($removeFile);
            
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('file')->getClientOriginalExtension();
            $request->file('file')->storeAs('/uploads',$fileName);
      
      
        }

        $book->update ([
            //database column name => input field name
                'book_name'=>$request->book_name,
                'writter_name'=>$request->writter_name,
                'catagory'=>$request->Catagory_name,
                'file'=>$fileName,
           ]);
           return redirect()->route('book')->with('message','Update success.');
        
     }
     
      public function bapply(){
        
        $applied_books = AppliedBook::orderBy('id','desc')->paginate(8);
        return view ('backend.pages.bapply.blist', compact('applied_books') );
      }

      public function book_list(){
        $applied_books = AppliedBook::orderBy('id','desc')->where('user_id',auth()->user()->id)->get();
        return view('Frontend.pages.book.applied_book_list',compact('applied_books'));
      }

   
       
  public function bookapprove($id){
    $applied_book = AppliedBook::find($id);
    $applied_book->status =  1;
    $applied_book->save();
    
    notify()->success('Approved Successfully');
    return back();

  }

         public function bookDownloadFromServer($id)
         {
            $book_id = AppliedBook::find($id)->pluck('book_id');
            // dd($book_id[0]);
            $book = Book::find($book_id[0]);
            // dd($book);
            // $file = public_path()."\uploads\".$book->file;
          	$path = public_path('/uploads/'.$book->file);
    	$fileName = $book->file;

    	return Response::download($path, $fileName, ['Content-Type: application/file']);
   
          
          
         
         }
         public function bookPreview($id){
          $book_id = AppliedBook::find($id)->pluck('book_id');
            $book = Book::find($book_id[0]);
            

    	return view('Frontend.pages.book.singleview',compact('book'));
         }
      }
       
    



