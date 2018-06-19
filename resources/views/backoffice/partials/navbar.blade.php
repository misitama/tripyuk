<nav class="navbar navbar-default yamm" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse large-icons-nav" id="horizontal-navbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-user"></i> <span>Users <i class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('indexUser')}}">All Users</a></li>
                    <li><a href="{{route('indexRole')}}">User Role</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-briefcase"></i> <span>Holiday</span></a></li>
            <li><a href="#"><i class="fa fa-plane"></i> <span>Air Lines</span></a></li>
            <li><a href="#"><i class="fa fa-train"></i> <span>Train</span></a></li>
            <li><a href="#"><i class="fa fa-dollar"></i> <span>Finance</span></a></li>
            <li><a href="#"><i class="fa fa-line-chart"></i> <span>Reports</span></a></li>
        </ul>
    </div>
</nav>