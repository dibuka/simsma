<header class="main-header">
    <a class="logo">
        <span class="logo-mini"><b>Sim</b>SMA</span>
        <span class="logo-lg"><b>Sim</b>SMA</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown messages-menu">
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">0</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="user user-menu">
                    <a>
                        <img src="{{ asset('') }}assets/images/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
