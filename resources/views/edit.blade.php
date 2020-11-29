@extends("master")
@section("content")
<div class="container col-9 col-md-7 col-lg-7 center">
    <h3 class="py-4">Welcome {{$user->username}}</h3>
    <form action="/update" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" value="{{$user->username}}" name="username" id="" required>
           @error("username")
            <p style="color:red">{{$errors->first("username")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="text" class="form-control" placeholder="Enter password" value="{{$user->password}}" name="password" id="" required>
            @error("password")
            <p style="color:red">{{$errors->first("password")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" value="{{$user_detail->email}}" name="email" id="" required>
            @error("email")
            <p style="color:red">{{$errors->first("email")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="dob">Date of birth:</label>
            <input type="date" class="form-control" placeholder="" value="{{$user_detail->date_of_birth}}" name="date_of_birth" id="" required>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" placeholder="Enter city" value="{{$user_detail->city}}" name="city" id="" required>
            @error("city")
            <p style="color:red">{{$errors->first("city")}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mx-3">Update</button>
        <a class="btn btn-info mx-3" href="/profile">Go back</a>
    </form>
</div>
@endsection