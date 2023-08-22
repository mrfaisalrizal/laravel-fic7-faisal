<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">User Management</li>
            <li class="nav-item dropdown {{ $type_menu === 'users' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('layout-default-layout') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('user.index') }}">Users</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('transparent-sidebar') }}">Transparent Sidebar</a>
                    </li>
                    <li class="{{ Request::is('layout-top-navigation') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('layout-top-navigation') }}">Top Navigation</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
