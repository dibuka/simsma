<aside class="main-sidebar">
    <section class="sidebar">
        <div class="sidebar-menu">
            <div class="header-menu">
                <br>&nbsp;
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-flat btn-sm">
                    <span class="fa fa-home"></span><br>Dashboard
                </a>
                <a class="btn btn-success btn-flat btn-sm" href="?pg=pengaturan">
                    <span class="fa fa-cog"></span><br>Pengaturan
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-flat btn-sm">
                    <span class="fa fa-sign-out"></span><br>Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                </a>
            </li>
        </ul>
    </section>
  </aside>
