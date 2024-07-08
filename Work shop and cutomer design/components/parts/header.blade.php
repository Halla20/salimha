<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">
                <img height="75px" src="{{asset('lo.png')}}">
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('site.home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('site.about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('site.services')}}" class="nav-item nav-link">Services</a>

                @if(auth('customers')->check())
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ auth('customers')->user()->firstName }}</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{route('customer.orders.index')}}" class="dropdown-item">My Orders</a>
                        <a href="testimonial.html" class="dropdown-item">Cards</a>
                        <a href="team.html" class="dropdown-item">Contacts</a>
                        <a href="testimonial.html" class="dropdown-item">feedbacks</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endif
                @if(auth('workshops')->check())
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ auth('workshops')->user()->shopName }}</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{route('workshop.spare_parts.index')}}" class="dropdown-item">Spare Parts</a>
                        <a href="{{route('workshop.services.index')}}" class="dropdown-item">Services</a>
                        <a href="testimonial.html" class="dropdown-item">feedbacks</a>
                        <a href="testimonial.html" class="dropdown-item">contacts</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('workshop.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endif
            </div>
            @if(!auth('customers')->check() && !auth('workshops')->check())
            <a href="{{route('site.auth')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
        </div>
    </nav>
