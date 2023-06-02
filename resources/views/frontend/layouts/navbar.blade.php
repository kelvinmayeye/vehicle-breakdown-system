<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Vehicle Brakedown</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    @auth
                        {{auth()->user()->name}}
                    @endauth
                    @guest
                    Accounts 
                    @endguest
                    
                </a>
                <div class="dropdown-menu fade-up m-0">
                    @auth
                        <a href="{{url('dashboard')}}" class="dropdown-item">My Dashboard</a>
                        <form action="{{'logout'}}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <a href="" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#registerModal">Register As Mechanic</a>
                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</button>
                    @endguest
                </div>
                
            </div>
        </div>
        <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Request Service<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>