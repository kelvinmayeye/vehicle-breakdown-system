<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('dashboard')}}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('/')}}"
                    aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                        class="hide-menu">Home</span></a></li>
            <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('mechanic-services')}}"
                    aria-expanded="false"><i data-feather="archive" class="feather-icon"></i><span
                        class="hide-menu">Mechanic Service</span></a></li>
            <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{url('request-history')}}"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">My Requests
                        </span></a>
                </li>

                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="{{url('/')}}"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Services </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{url('all-services')}}" class="sidebar-link"><span
                                    class="hide-menu"> All Services
                                </span></a>
                        </li>

                        <li class="sidebar-item"><a href="add-services" class="sidebar-link"><span
                            class="hide-menu"> Add Service
                        </span></a>
                </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="{{url('/')}}"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">Mechanics </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{url('mechanics')}}" class="sidebar-link"><span
                                    class="hide-menu"> All Mechanics
                                </span></a>
                        </li>                        
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>