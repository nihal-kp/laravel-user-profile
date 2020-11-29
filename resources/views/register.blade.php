@extends("master")
@section("content")
<div class="container col-9 col-md-7 col-lg-7 center mt-4">
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username" value="{{ old('username') }}" required>
            @error("username")
            <p style="color:red">{{$errors->first("username")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password" value="{{ old('password') }}" required>
            @error("password")
            <p style="color:red">{{$errors->first("password")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="cpwd">Confirm password:</label>
            <input type="password" class="form-control" placeholder="Enter password again" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
            
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}" required>
            @error("email")
            <p style="color:red">{{$errors->first("email")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="dob">Date of birth:</label>
            <input type="date" class="form-control" placeholder="" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
            @error("date_of_birth")
            <p style="color:red">{{$errors->first("date_of_birth")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" placeholder="Enter city" name="city" value="{{ old('city') }}" required>
            @error("city")
            <p style="color:red">{{$errors->first("city")}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Signup</button>
    </form>
</div>
@endsection