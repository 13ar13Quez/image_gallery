<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"
               href="#"> @if(isset($title)) {{ $title }} @else {{ config('app.name', 'Q Laravel') }}@endif</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false" aria-haspopup="true">
                            Admin <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person</i>
                            <p class="hidden-lg hidden-md">Profile</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                        <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>