<ul class="navbar-nav navbar-right">
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i></a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Notifications
          <div class="float-right">
            <a href="#">Mark All As Read</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
          {{-- <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-icon bg-primary text-white">
              <i class="fas fa-bell"></i>
            </div>
            <div class="dropdown-item-desc">
              {{ ucfirst(App\User::latest()->first()->name) }} has been join to GINUMERIK
              <div class="time text-primary">{{App\User::latest()->first()->created_at}}</div>
            </div>
          </a> --}}
        </div>
    </li>
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="{{ asset('assets/Stisla/img/avatar/avatar-2.png') }}" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, Jarwo</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Welcome, Jarwo</div>
        <a href="#" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Account Info
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>