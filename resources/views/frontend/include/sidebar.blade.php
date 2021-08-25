<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">KopKar PT.ISP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Ts</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header"></li>
        <li class="nav-item @yield('dashboard')">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="fas fa-columns"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item @yield('backup')">
            <a class="nav-link" href="{{ route('backup.index') }}">
                <i class="fas fa-file"></i> <span>Backup</span>
            </a>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">

    </div>
</aside>
