<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&family=Raleway:ital@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Login Muebleria Acacia</title>

        <style>
            *{
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }

            body{
                background-color: #9B8E81;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: rgba(255,255,255,0.75);
            }

            nav {
                font-family: "Raleway", sans-serif;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid" id="app">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                <div class="container-fluid">
                    <img src="/storage/logo.jpg" class="rounded-circle" alt="..." style="width: 4%;">
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="MenuNavegacion" class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav ms-3 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item p-2">
                                <a class="nav-link" aria-current="page" href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="{{ url('/') }}"><i class="fab fa-product-hunt"></i></a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="{{ url('/') }}"><i class="far fa-comment"></i></a>
                            </li>
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item p-2">
                                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-edit"></i></a>
                                        </li>
                                    @endif
                                @else   
                                <li class="nav-item dropdown p-2">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu bg-light" aria-labelledby="navbarScrollingDropdown">
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                            </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <br><br><br><br><br><br>
        <main class="container-fluid">
            @yield('content')
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>