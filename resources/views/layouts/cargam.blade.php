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
    <title>Alta de Muebles</title>

    <style>
        body {
            background-color: #9B8E81;
            width: 100%;
            height: 100%;
        }

        h1 {
            font-family: "Noto Serif Display", serif;
            color: rgba(0,0,0);
        }

        .navbar{
            font-family: "Raleway", sans-serif;
        }

        .navbar .nav-link{
            color: rgba(255,255,255,0.75);
        }

        #formulario{
            font-family: "Raleway", sans-serif;
        }
    </style>
</head>
    <body>
        <ul class="navbar navbar-expand-md navbar-dark fixed-top nav justify-content-end">
            <li class="nav-item p-2">
                <a class="nav-link" aria-current="page" href="/"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link" href="/home"><i class="far fa-user-circle"></i></a>
            </li>
            <img src="/storage/logo.jpg" class="rounded-circle" alt="..." style="width: 4%; margin: 5px;">
        </ul>
        <div class="container justify-content-center align-items-center">
            <br>
            @if ($message = Session::get('success'))
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
            </svg>
            <div class="alert alert-success d-flex align-items-center" role="alert" style="width:40%;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
            @endif

            <br><br><br><br>
            <h1 class="display-4 text-center text-white fw-bold p-1">Alta de Muebles</h1>
            <br><br>
            
            <!-- Formulario para subir la informacion de un mueble -->
            <div class="container" id="formulario">
                <div class="card">
                    <div class="card-header text-center">
                        Formulario Muebles
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="/guardamueble" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-2">
                                <label for="inputPrice" class="form-label">Precio</label>
                                <input type="number" name="precio" class="form-control" id="inputPrice">
                            </div>
                            <div class="col-md-2">
                                <label for="inputStock" class="form-label">Stock</label>
                                <input type="number" name="stock" class="form-control" id="inputStock">
                            </div>
                            <div class="col-md-4">
                                <label for="inputMadera" class="form-label">Tipo de Madera</label>
                                <select class="form-select" aria-label="Default select example" id="inputMadera" name="tipo">
                                    <option selected>Seleccione el tipo de madera</option> 
                                    <option value="1">Haya</option>
                                    <option value="2">Parota</option>
                                    <option value="3">Caoba</option>
                                    <option value="4">Cedro</option>
                                    <option value="5">Tzalam</option>
                                    <option value="6">Nogal</option>
                                </select>
                            </div>
                            <div class="input-group col-md-4">
                                <input type="file" name="imagen" class="form-control" id="inputGroupImg">
                                <label class="input-group-text" for="inputGroupImg">Subir Imagen</label>
                            </div>
                            <div class="form-floating col-12">
                                <textarea class="form-control" name="descripcion" placeholder="Descripcion" id="floatingDescripcion" style="height: 100px"></textarea>
                                <label for="floatingDescripcion">Descripcion</label>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                setTimeout(function() {$('#successMessage').fadeOut('fast');}, 3000);
            });
        </script>
    </body>
</html>