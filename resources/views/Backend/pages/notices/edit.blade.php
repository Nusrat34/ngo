@extends('backend.master')
@section('content')
<h1>notice update</h1>

<form action="{{route('notice.update',$not->id)}}" method="post"> 
@method('put')
@if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif

    @csrf      
         
         
   <div class="form-group">
    <label for="name"> Notice Name</label>
   <input required value="{{$not->notice_name}}" name="notice_name" type="text" class="form-control" id="name" placeholder="Enter Notice Name">
</div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option @if($not->status=='active')selected @endif value="active">Active</option>
                <option @if($not->status=='inactive')selected @endif value="inactive">inactive</option>
                
            </select>
        </div>
        
        <div class="form-group">
            <label for="name">published_Date</label>
            <input  required value="{{$not->published_date}}" name="published_date" type="date" class="form-control" id="name" placeholder="published_date">
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" value="{{$not->description}}" name="description" id=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>

@endsection