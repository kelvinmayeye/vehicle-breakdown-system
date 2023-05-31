<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li><a><i class="fa fa-users"></i> Customer <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('add/customer') }}">Add Customer</a></li>
                    <li><a href="{{ url('all/customers') }}">View Customer</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> SmartBin <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('all/smartbin') }}">SmartBin</a></li>
                    <li><a href="#">Location</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> Collections <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('schedules') }}">Schedule</a></li>
                    <li><a href="#">Log</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-map-o"></i> Locations <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('locations')}}">Add Locations</a></li>
                    {{-- <li><a href="#"></a></li> --}}
                </ul>
            </li>
            <li><a href="{{ url('user-management') }}"><i class="fa fa-cogs"></i> User Management</a></li>
        </ul>
    </div>
</div>
