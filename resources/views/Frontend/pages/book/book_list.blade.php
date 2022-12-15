@extends('Frontend.master')
@section('content')

<br/>
<br/>
<br/>
<br/>


<h1>book list</h1>

<div class="popular_causes_area pt-120">
        <div class="container">
            <div class="row">
                @foreach($books as $book)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_cause">
                            <div class="causes_content">
                                <a href="cause_details.html"><h4>{{$book->book_name}}</h4></a>
                                <p>{{$book->writter_name}}</p>
                                <p>{{$book->category}}</p>
                                <td><img width="50px" src="{{url('/uploads/',$book->file)}}" alt=""></td>
                                @php
                                    $is_alreday_applied = \App\Models\AppliedBook::where('user_id',auth()->user()->id)->where('book_id',$book->id)->first();
                                @endphp
                                @if($is_alreday_applied == null)
                                    <a href="{{ route('apply_for_book', $book->id) }}"class="boxed-btn4">Apply</a>
                                @else
                                    <button class="boxed-btn4">Applied</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection