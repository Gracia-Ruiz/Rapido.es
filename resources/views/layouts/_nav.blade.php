<nav class="navbar navbar-expand-sm navbar-dark shadow-lg sticky-top bg-nav" id="nav" aria-label="Main navigation">
    <div class="container-fluid mx-0">
        <a class="navbar-brand fs-2 fst-italic" href="{{route('welcome')}}"><i class="fa-solid fa-truck-fast fs-1 pe-4 fst-italic text-seccondary logo"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
        </button> 
        <div class="collapse navbar-collapse justify-content-between">
            <form action="{{route('search')}}" method="GET" class="d-flex">
                <input class="form-control me-2" type="text" name="q" placeholder={{__("Buscar")}} aria-label="Search">
                <button class="btn box-radius btn-accent links" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <div class="navbar-nav mb-sm-0 d-flex align-items-center">
                @auth
                @if (Auth::user()->is_revisor)
                <a href="{{route('revisor.home')}}">
                    <span class="badge fs-4 btn-accent text-seccondary links">
                        {{\App\Models\Ad::ToBeRevisionedCount()}}
                    </span>
                </a>
                @endif
                @endauth 
                <a class="fs-6 mx-3 text-decoration-none badge box-radius btn-accent links" href="{{route('ad.new')}}"><lord-icon
                    src="https://cdn.lordicon.com/mecwbjnp.json"
                    trigger="loop">
                </lord-icon> {{__("Anuncio")}}</a>
                @guest
                <a type="button" class="mx-1 fs-2" href="{{route('login')}}"><i class="fas fa-user-circle text-seccondary icon-link"></i></a>
                @endguest
                @auth 
                <form action="{{route('logout')}}" method="POST">
                @csrf
                    <button type="submit" class="border-0 bg-transparent mx-1 fs-4" href="#"><i class="fas fa-sign-out-alt text-seccondary icon-link"></i></button> 
                </form>
                @endauth
                <ul class="navbar-nav">
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link fs-2 text-uppercase fw-bold" href="#" id="dropdown04"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-globe-americas text-seccondary icon-link"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark menu-global " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item icon-banderas"
                                href="#">@include('layouts.flags._locale',["lang"=>'en','nation'=>'gb'])</a></li>
                            <li><a class="dropdown-item icon-banderas"
                                href="#">@include('layouts.flags._locale',["lang"=>'it','nation'=>'it'])</a></li>
                            <li><a class="dropdown-item icon-banderas"
                                href="#">@include('layouts.flags._locale',["lang"=>'es','nation'=>'es'])</a></li>
                        </ul>
                    </li>
                </ul>
            
            </div>
        </div>
    </div>
   
</nav>
