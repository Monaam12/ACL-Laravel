<aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
@can('list-role')
                    <li>
                        <a href="{{route('admin.')}}">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                    </li>
@endcan
@can('list-users')
                    <li>
                       <a href="{{route('admin.users.index')}}">
                        <i class="fa fa-group"></i>USERS MANAGEMENT</a>
                   </li>
@endcan
@can('list-role')
                    <li>
                        <a href="{{route('admin.roles.index')}}">
                        <i class="fa fa-cogs"></i>ROLES MANAGEMENT</a>
                    </li>
@endcan
                    <li>
                        <a href="#">
                        <i class="fa fa-user"></i>ACCOUNT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
