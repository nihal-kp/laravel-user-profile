@extends("master")
@section("content")
<div class="container col-9 col-md-7 col-lg-7 center">
    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username" value="{{ old('username') }}" id="" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password" value="{{ old('password') }}" id="" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection