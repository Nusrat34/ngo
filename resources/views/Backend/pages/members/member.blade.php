@extends('backend.master')
@section('content')

<h1>member list</h1>
<a href="{{url('member/memberform')}}" class="btn btn-success">
create new user
</a>
  <table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    
    </tbody>
</table>
@endsection()