<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Clientes</title>
</head>
<body>
    <h1>Vista de Clientes</h1>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre - </th>
            <th>Apellidos - </th>
            <th>Edad</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente -> dni}}</td>
                <td>{{ $cliente -> nombre}}</td>
                <td>{{ $cliente -> apellidos}}</td>
                <td>{{ $cliente -> edad}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>