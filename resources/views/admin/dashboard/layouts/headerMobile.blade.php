<header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
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
                        <i class="fa fa-group"></i> USERS MANAGEMENT</a>
                    </li>
@endcan
@can('list-role')
                    <li>
                        <a href="{{route('admin.roles.index')}}">
                        <i class="fa fa-cogs"></i> ROLES MANAGEMENT</a>
                    </li>
@endcan
                </ul>
            </div>
        </nav>
    </header>
