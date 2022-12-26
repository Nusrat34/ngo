@extends('Frontend.master')
@section('content')

<div style="margin:50px">
    <div style="padding: 35px;">

        <h1>Scholarships</h1>

        <div class="popular_causes_area pt-120">
            <div class="container">
                <div class="row">
                    @foreach($scholar as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_cause">
                            <img src="https://media.istockphoto.com/id/1412583468/photo/study-and-education-concept-autumn-books-back-to-school-halloween-books-autumn-reading-stack.jpg?b=1&s=170667a&w=0&k=20&c=58HUjDuA6d6fAJVSVc5S6fA4PMyrqD1OVtdVOmkUaZY=" alt="">
                            <div class="causes_content">
                                <a href="cause_details.html">
                                    <h4>{{$data->name}}</h4>
                                </a>
                                <p>{{$data->amount}}</p>
                                @php
                                    $is_alreday_applied = \App\Models\ScholarshipApplication::where('user_id',auth()->user()->id)->where('scholarship_id',$data->id)->first();
                                @endphp
                                @if($is_alreday_applied == null)
                                    <a href="{{ route('apply_for_sholarship', $data->id) }}" class="boxed-btn4">Apply for the Sholarship</a>
                                @elseif($is_alreday_applied != null && $is_alreday_applied->status == 0 )
                                    <button class="boxed-btn4">Scholarship Applied</button>
                                @else
                                    <button class="boxed-btn4">Scholarship Approved </button>
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