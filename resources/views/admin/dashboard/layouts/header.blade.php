    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button float-right">

                        <div class="account-wrap">
                                <div class="content">
                                    <h4 class="js-acc-btn" href="#">{{Auth::user()->name}}</h4>
                                    <span class="email">{{Auth::user()->email}}</span>
                                </div>
                        </div>
                        <div class="ml-5">
                                <a class="btn-sm btn btn-primary" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>
                                            {{ __('Logout') }}
                                </a>                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
