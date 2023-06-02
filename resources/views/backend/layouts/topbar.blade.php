<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-lg">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            
            <div class="navbar-brand">
                <!-- Logo icon -->
                <a href="">
                    {{-- <img src="{{asset(url('backend/assets/images/freedashDark.svg'))}}" alt="" class="img-fluid"> --}}
                    <span>Vehicle Brakedown</span>
                </a>
            </div>
            <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="#"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                
            </ul>
            <ul class="navbar-nav float-end">
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset(url('backend/assets/images/user.jpg'))}}" alt="user" class="rounded-circle"
                            width="40">
                        <span class="ms-2 d-none d-lg-inline-block"><span> <span
                                class="text-dark">Username</span> <i data-feather="chevron-down"
                                class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="#"><i data-feather="user"
                                class="svg-icon me-2 ms-1"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="#"><i data-feather="power"
                                class="svg-icon me-2 ms-1"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>