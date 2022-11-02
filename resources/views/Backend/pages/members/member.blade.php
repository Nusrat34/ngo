@extends('backend.master')
@section('content')

<h1>member list</h1>
<a href="{{url('member/memberform')}}" class="btn btn-success">
create new user
</a>

@endsection()