<nav class="navbar navbar-expand-lg navbar-light bg-light">
  @if(Session::has('user'))
  <a class="navbar-brand" href="/profile">User Profile</a>
  @else
  <a class="navbar-brand" href="#">User Profile</a>
  @endif
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
    </ul> -->
    <ul class="navbar-nav ml-auto mr-5">
      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi {{Session::get('user')['username']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/edit">Edit</a>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
      @else
      <li><a class="nav-link" href="/">Login</a></li>
      <li><a class="nav-link" href="/register">Register</a></li>
      @endif
    </ul>
  </div>
</nav>