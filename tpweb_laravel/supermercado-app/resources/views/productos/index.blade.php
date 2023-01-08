<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <p>{{$mensaje}}</p><!--Este es el mensaje que está en el archivo ProductosController-->

    <!--
    <ul>Bucle foreach para recorrer los productos.  Es unidimensional.
        ARROBAforeach ($productos as $producto)
        <li>{ARROBAproducto}}</li>
        ARROBAendforeach
    </ul>
    -->

    <table>
        <tr>
            <th>Producto -</th>
            <th>Precio -</th>
            <th>Marca</th> 
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto[0]}}</td><!--Primera columna es la 0 -->
                <td>{{ $producto[1]}}</td>
                <td>{{ $producto[2]}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>