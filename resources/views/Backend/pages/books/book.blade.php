@extends('backend.master')
@section('content')


<h1> book list</h1>
<a href="{{url('/book/bookform')}}" class="btn btn-success">
    
Create New User
</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">book_name</th>
        <th scope="col">writter_name</th>
        <th scope="col">catagory</th>
        <th scope="col">image</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($boi as $data)

    <tr>
    <th scope="row">{{$data->id}}
        <td>{{$data->book_name}}</td>
        <td>{{$data->writter_name}}</td>
        <td>{{$data->catagory}}</td>
        <td>
                
                <img width ="50px style="border- radius: 15px; src="{{url('/uploads/'.$data->image)}}" alt="book_image">
            </td>

            <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-success">View</a>
            </td>
        
    </tr>
    @endforeach
    
    </tbody>
</table>

  {{$boi->links()}}






@endsection