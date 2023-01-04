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
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        
        body{
           background-color: #9B8E81;
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
            <br><br><br><br>
            <h1 class="display-4 text-center text-white fw-bold p-1">Editar informacion de Muebles</h1>
            <br><br>
            
            <!-- Formulario para subir la informacion de un mueble -->
            <div class="container" id="formulario">
                <div class="card">
                    <div class="card-header text-center">
                        Formulario Muebles
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('edit',$mueble->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="inputName" value="{{$mueble->nombre}}" required>
                            </div>
                            <div class="col-md-2">
                                <label for="inputPrice" class="form-label">Precio</label>
                                <input type="number" name="precio" class="form-control" id="inputPrice" value="{{$mueble->precio}}" required>
                            </div>
                            <div class="col-md-2">
                                <label for="inputStock" class="form-label">Stock</label>
                                <input type="number" name="stock" class="form-control" id="inputStock" value="{{$mueble->stock}}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputMadera" class="form-label">Tipo de Madera</label>
                                <select class="form-select" aria-label="Default select example" id="inputMadera" name="tipo">
                                    <option selected>Seleccione el tipo de madera</option> 
                                    <option value="1" @if($mueble->madera_id=="1") selected @endif>Haya</option>
                                    <option value="2" @if($mueble->madera_id=="2") selected @endif>Parota</option>
                                    <option value="3" @if($mueble->madera_id=="3") selected @endif>Caoba</option>
                                    <option value="4" @if($mueble->madera_id=="4") selected @endif>Cedro</option>
                                    <option value="5" @if($mueble->madera_id=="5") selected @endif>Tzalam</option>
                                    <option value="6" @if($mueble->madera_id=="6") selected @endif>Nogal</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="inputImg">Subir Imagen</label>
                                <input type="file" name="imagen" class="form-control" id="inputImg">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="img">Imagen Actual</label>
                                <img src="{{asset('storage').'/' . $mueble->foto}}" alt="imagen del mueble" width="100" id="img">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="inputDetails">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" id="inputDetails" value="{{$mueble->descripcion}}" required>  
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