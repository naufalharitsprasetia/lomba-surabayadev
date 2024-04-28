<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 -4px 13px 3px black;">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <a class="navbar-brand ml-5" href="#">
    <img src="/assets/logo/logo.png" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <style>
            .nav-item{
                margin: auto 2rem;
            }
        </style>
        <ul class="navbar-nav mr-auto ml-3">
        <li class="nav-item {{ $active == 'home' ? 'active' :  ''}}">
            <a class="nav-link" href="/"><i class="bi bi-house"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ $active == 'products' ? 'active' :  ''}}">
            <a class="nav-link" href="/products"><i class="bi bi-laptop"></i> Products</a>
        </li>
        <li class="nav-item {{ $active == 'contact' ? 'active' :  ''}}">
            <a class="nav-link" href="/contact"><i class="bi bi-person-lines-fill"></i> Contact Us</a>
        </li>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Products" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
        </form>
        </ul>
        <div class="nav-item dropdown pr-4">
            @guest
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> Akun 
            </a>
            @endguest
            @auth
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> Welcome Back, {{auth()->user()->name}} 
            </a>
            @endauth
            <div class="dropdown-menu dropdown-menu-left" style="min-width:8rem;">
            @guest
            <a class="dropdown-item" href="/register"><i class="bi bi-plus-circle"></i> Register</a>
            <a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            @endguest
            @auth
            <div class="dropdown-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
                </form>
            </div>
            @can('admin')
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/dashboard"><i class="bi bi-menu-button-wide"></i> Dashboard</a>
                <div class="dropdown-divider"></div>
            @endcan
            <a class="dropdown-item" href="/cart"><i class="bi bi-cart"></i> Cart <span class="badge badge-primary">
            @if(count(auth()->user()->carts) == 0)  
            0
            @else
            {{count(auth()->user()->carts)}}
            @endif
            </span></a>
            @endauth
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/help"><i class="bi bi-question-circle"></i> Help</a>
            </div>
        </div>
    </div>
    </nav>