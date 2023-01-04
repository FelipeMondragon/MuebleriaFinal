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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Muestra Muebles para editar</title>

    <style>
        body {
            background-color: #9B8E81;
            width: 100%;
            height: 100%;
        }

        table, .navbar{
            font-family: "Raleway", sans-serif;
        }

        .navbar .nav-link{
            color: rgba(255,255,255,0.75);
        }

        h1 {
            font-family: "Noto Serif Display", serif;
            color: rgba(0,0,0);
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
        
        <br><br><br><br><br>
        <h1 class="display-4 text-center text-white fw-bold p-1">Inventario</h1>
        <br>

        <div class="container mx-auto">
            <table class="table table-hover table-bordered table-sm text-center" >
                <thead>
                    <tr class="table-info">
                        <th scope="col">Mueble</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Tipo de Madera</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($muebles as $m)
                    <tr class="text-center">
                        <td class="table-light">{{$m->nombre}}</td>
                        <td class="table-light">${{$m->precio}}</td>
                        <td class="table-light">{{$m->stock}}</td>
                        <td class="table-light">{{$m->Maderas['tipo']}}</td>
                        <td class="table-light"><img src="{{asset('storage').'/' . $m->foto}}" alt="imagen del mueble" width="75"></td>
                        <td class="table-light">{{$m->descripcion}}</td>
                        <td class="table-light"> 
                            <a href="/editar/{{$m->id}}" class="btn btn-primary btn-sm m-1"><i class="fas fa-edit"></i></a>
                            <a href="/eliminar/{{$m->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>