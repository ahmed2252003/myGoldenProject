<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('admin') }}" class="nav-link">Home</a>
    </li>
    
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('admin/Contact-us') }}" class="nav-link">Contact us</a>
    </li>
    
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('admin/FAQ') }}" class="nav-link">FAQ</a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" width="35" height="35" class="rounded-circle">
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ url('admin/Profile') }}">Profile</a>
        @auth
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
    @endauth
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->