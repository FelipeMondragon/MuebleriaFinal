<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&family=Raleway:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Carrito de Compra</title>

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
        <img src="/storage/logo.jpg" class="rounded-circle" alt="..." style="width: 4%; margin: 5px;">
    </ul>
    <br><br><br>
    <h1 class="display-2 text-center text-white fw-bold p-1">Carrito de Compra</h1>
    <br><br>
    <div class="container mx-auto">
        <table class="table table-borderless table-hover table-sm text-center" >
            <thead>
                <tr class="text-white text-center">
                    <th scope="col">Mueble</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $mueble)
                            @php
                                $subtotal = $mueble['precio'] * $mueble['cantidad'];
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td>
                                    <img src="{{asset('storage').'/' .$mueble['imagen']}}" class="img-fluid" width="100px">
                                    <span>{{$mueble['name']}}</span>
                                </td>
                                <td>{{$mueble['precio']}}</td>
                                <td>
                                    <form action="/cambiarcant/{{$id}}" class="d-flex justify-content-center">
                                        <button type="submit" value="down" name="change_to" class="btn btn-danger">
                                            @if ($mueble['cantidad'] === 1) x @else - @endif
                                        </button>
                                        <input type="number" value="{{$mueble['cantidad']}}" class="text-center" disabled>
                                        <button type="submit" value="up" name="change_to" class="btn btn-success">
                                            +
                                        </button>
                                    </form>
                                </td>
                                <td>{{$subtotal}}</td>
                                <td>
                                    <a href="{{route('eliminarc', [$id])}}" class="btn btn-danger btn-sm">X</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
            </tbody>
            <tfoot>
                <tr> 
                    <td colspan="4"></td>
                    <td class="text-white"> <strong>Total {{$total}}</strong></td>
                </tr>
            </tfoot>
        </table>
        <a href="/pruebaPDF" class="btn btn btn-primary btn-sm" target="_blank">Ver Factura</a>
    </div>
    </body>
</html>
    