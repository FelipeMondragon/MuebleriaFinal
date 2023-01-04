<!-- Navbar -->
<header class="header">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <img src="/storage/logo.jpg" class="rounded-circle" alt="..." style="width: 4%;">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="MenuNavegacion" class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-3 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item p-2">
                        <a class="nav-link" aria-current="page" href="#inicio"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#galeria"><i class="fab fa-product-hunt"></i></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#footer"><i class="far fa-comment"></i></a>
                    </li>
                    @auth
                        @if(Auth::user()->tipo == 0 )
                            <li class="nav-item p-2">
                                <a class="nav-link" href="/cargainfo"><i class="fas fa-pen-alt"></i></a> 
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" aria-current="page" href="/ver-muebles"><i class="fas fa-archive"></i></a>
                            </li>
                        @endif
                    @endauth
                    <ul class="navbar-nav">
                        <li class="nav-item p-2">
                            @if (Route::has('login'))
                                @auth
                                    <a class="nav-link" href="{{ url('/home') }}"><i class="far fa-user-circle"></i></a>
                                @else
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-edit"></i></a>
                                @endauth
                            @endif
                        </li>
                    </ul>
                    @auth 
                        @if(Auth::user()->tipo == 1)
                            <li class="nav-item p-2">
                                <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i></a> 
                            </li>
                        @endif
                    @endauth
                </ul>
                </div>
        </div>
    </nav>
    
    <div class="titulo">
        <h1 class="display-1 border text-center text-white fw-bold p-1">Muebleria Acacia</h1>
        
    </div>
</header>
