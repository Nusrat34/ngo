@extends('Frontend.master')
@section('content')
<div style="margin:50px">
    <div style="padding: 35px;">
        <h1>scholarship form</h1>
        <form action="{{route('scholarship.appliation.store')}}" method="post">
            <input name="id" value="{{$scholarship->id}}" hidden>
            <div class="from-group">
                <label for="name">Scholarship</label>
                <input disabled value="{{$scholarship->name}}" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Amount</label>
                <input disabled name="name" type="number" class="form-control" value="{{$scholarship->amount}}">
            </div>
            <div class="form-group">
                <label for="name">Note</label>
                <textarea name="note" class="form-control" placeholder="Note" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection