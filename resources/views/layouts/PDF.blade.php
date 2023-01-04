<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Pago</title>

    <style>
        .oxxo{
            width: 60%;
            margin: 10px;
        }

        .contenedor{
            margin: auto;
            text-align: center;
        }

        table{
            font-family: monospace;
            font-size: 20px;
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
        }

        thead th:nth-child(1) {
            width: 30%;
        }

        thead th:nth-child(2) {
            width: 20%;
        }

        thead th:nth-child(3) {
            width: 15%;
        }

        thead th:nth-child(4) {
            width: 35%;
        }

        th, td {
            padding: 20px;
        }
    </style>
</head>
    <body>
        <header>
            <h1>Factura</h1>
            <p>Chiquito No. 486 
               CP 78877
               San Luis Potosi, SLP
               México
            </p>
        </header>
        <div class="contenedor">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $c)
                            @php
                                $subtotal = $c['precio'] * $c['cantidad'];
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td align="center">{{$c['name']}}</td>
                                <td align="center"><img src="{{asset('storage').'/' .$c['imagen']}}" class="img-fluid" width="100px"></td>
                                <td align="center">{{$c['cantidad']}}</td>
                                <td align="center">{{$c['precio']}}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td><strong>Total {{$total}}</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="contenedor">
            <h2>Método de Pago</h2>
            <img src="{{url('/storage/oxxo.png') }}" class="oxxo"> 
        </div>
    </body>
</html>