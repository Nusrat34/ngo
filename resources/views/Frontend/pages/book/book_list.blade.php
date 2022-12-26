@extends('Frontend.master')
@section('content')

<br />
<br />
<br />
<br />

<div style="margin:50px">
    <div style="padding: 35px;">

        <h1>book list</h1>

        <div class="popular_causes_area pt-120">
            <div class="container">
                <div class="row">
                    @foreach($books as $book)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_cause">
                            <img src="https://media.istockphoto.com/id/1412583468/photo/study-and-education-concept-autumn-books-back-to-school-halloween-books-autumn-reading-stack.jpg?b=1&s=170667a&w=0&k=20&c=58HUjDuA6d6fAJVSVc5S6fA4PMyrqD1OVtdVOmkUaZY=" alt="">
                            <div class="causes_content">
                                <a href="cause_details.html">
                                    <h4>{{$book->book_name}}</h4>
                                </a>
                                <p>{{$book->writter_name}}</p>
                                <p>{{$book->category}}</p>
                                <td><img width="50px" src="{{url('/uploads/',$book->file)}}" alt=""></td>
                                @php
                                $is_alreday_applied = \App\Models\AppliedBook::where('user_id',auth()->user()->id)->where('book_id',$book->id)->first();
                                @endphp
                                @if($is_alreday_applied == null)
                                <a href="{{ route('apply_for_book', $book->id) }}" class="boxed-btn4">Apply</a>
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
    </div>
</div>
@endsection