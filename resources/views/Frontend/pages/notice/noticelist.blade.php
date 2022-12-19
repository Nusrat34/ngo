@extends('Frontend.master')
@section('content')
<div style="margin:50px">
    <div style="padding: 35px;">
        <h1>Notice list</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Notice_name</th>
                    <th scope="col">Status</th>
                    <th scope="col">published_Date</th>
                    <th scope="col">Description</th>




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




                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

{{$not->links()}}

@endsection