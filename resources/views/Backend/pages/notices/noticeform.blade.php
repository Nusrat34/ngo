@extends('backend.master')
@section('content')
<form action="{{route('notice.noticeform.store')}}" method="post"> 
    @csrf      
         
         
   <div class="form-group">
    <label for="name"> Notice Name</label>
   <input name="notice_name" type="text" class="form-control" id="name" placeholder="Enter Notice Name">
</div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="name">published_Date</label>
            <input name="published_date" type="text" class="form-control" id="name" placeholder="published_date">
            
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id=""></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection()