@extends('backend.master')
@section('content')

<h1>transaction list</h1>
<a href="{{route('transaction.show')}}" class="btn btn-success">
create new transaction
</a>
  <table class="table">
    <thead class="thead-dark">
   
    <tr>
        <th scope="col">Id</th>
        <th scope="col">trax_head</th>
        <th scope="col">In</th>
        <th scope="col">Out</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
         @foreach($tran as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
        <td>{{$data->trax_head}}</td>
        <td>{{$data->in}}</td>
        <td>{{$data->out}}</td>
        
    

        <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-success">View</a>
            </td>
        

        
    </tr>
    @endforeach 
    
    </tbody>
</table>
{{$tran->links()}}
@endsection