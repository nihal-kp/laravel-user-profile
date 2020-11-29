@extends("master")
@section("content")
<div class="container col-9">
    <h3 class="py-4">Welcome {{$user->username}}</h3>
    <table class="table">
    <tr>
        <th>Username:</th> <td>{{$user->username}}</td>
    </tr>
    <tr>
        <th>Password:</th> <td>{{$user->password}}</td>
    </tr>
    <tr>
        <th>Email:</th> <td>{{$user_detail->email}}</td>
    </tr>
    <tr>
        <th>Date of birth:</th> <td>{{$user_detail->date_of_birth}}</td>
    </tr>
    <tr>
        <th>City:</th> <td>{{$user_detail->city}}</td>
    </tr>
    </table>
    <a class="btn btn-info m-3" href="/edit">Edit</a>
    <a class="btn btn-danger m-3" href="/logout">Logout</a>
</div>
@endsection 