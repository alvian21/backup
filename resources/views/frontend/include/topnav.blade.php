<form class="form-inline mr-auto" action="">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        {{-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> --}}
    </ul>
    {{-- <div class="search-element">
    <input class="form-control" value="" name="query" type="search" placeholder="Search" aria-label="Search"
      data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    <div class="search-backdrop"></div>
    @include('admin.partials.searchhistory')
  </div> --}}
</form>
<ul class="navbar-nav navbar-right mr-3">

    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::guard('web')->user()->UserLogin }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Keluar
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>
