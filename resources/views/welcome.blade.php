<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&family=Raleway:ital@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Muebleria Acacia</title>

        <style>
            *{
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }

            body{
                background-color: #9B8E81;
                font-family: 'Raleway', sans-serif;
            }

            .content{
                background-image: url(storage/fondo.jpg);
                width: 100%;
                height: 100vh;
                background-position: center;
                background-size: cover;
            }

            .header {
                min-height: 100vh;
            }

            .header .navbar {
                background-color: transparent !important;
                font-family: 'Raleway', sans-serif;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: rgba(255,255,255,0.75);
            }
            
            .titulo{
                height:80vh;
                width:80%;
                display: flex;
                justify-content: start;
                align-items: center;
                background-color: transparent !important;
            }

            h1{
                font-family: 'Noto Serif Display', serif;
            }

            #galeria .col-lg-4{
                margin: 0;
                padding: 25px;
            }

            #galeria img{
                width: 100%;
                height: 300px;
            }

            #galeria img:hover{
                border: 1px solid white;
            }

            #body{
                margin: 8px;
            }

            #modal-img{
                float: left;
                width: 300px;
                height: 260px;
                padding: 0 10px 0 0;
                margin-right: 10px;
            }

            #descripcion, #precio, #stock, #tipo{
                text-align: justify;
            }   

            .modal-header .btn-close{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        
        <div class="content">
            <div class="container-fluid" id="inicio">
                @section('NavbarG')
                    @include('layouts.navbarg')

                <!-- Seccion del Catalogo -->
                @section('galeria')
                    @include('layouts.catalogo')
            </div>
            <div id="footer">
                @section('Footer')
                    @include('layouts.footer')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>