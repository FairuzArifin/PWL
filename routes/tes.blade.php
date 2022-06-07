   {{-- Cek user login atau belum --}}
   <ul class="nav navbar-nav ml-auto">
    @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </li>
    @else
      <li class="nav-item active">
        <a class="nav-link" href="/login" style="color: rgb(51, 255, 0)">Masuk</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/register" style="color: blue">Mendaftar</a>
      </li>
    @endauth

    Route::get('/login',[ LoginController::class, 'login'])->middleware('guest');


    di route service
    public const HOME = '/dashboard';