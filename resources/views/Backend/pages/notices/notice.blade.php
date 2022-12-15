@extends('backend.master')

@section('content')
<h1>Notice list</h1>
<a href="{{route('notice.noticeform')}}" class="btn btn-success">
    create new notice

</a>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Notice_name</th>
            <th scope="col">Status</th>
            <th scope="col">published_Date</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>



        </tr>
    </thead>
    <tbody>
        @foreach($not as $key=> $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->notice_name}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->published_date}}</td>
            <td>{{$data->Description}}</td>

            <td>

                <a href="{{route('notice.edit',$data->id)}}" class="btn btn-primary">edit</a>
                <a href="{{route('notice.delete',$data->id)}}" class="btn btn-danger">Delete</a>

            </td>



        </tr>
        @endforeach

    </tbody>
</table>

{{$not->links()}}


@endsection()