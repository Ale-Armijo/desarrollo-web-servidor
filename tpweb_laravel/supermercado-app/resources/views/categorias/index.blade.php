<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>
    <!--Este es para Array Unidimensional-->
    <ul>
        @foreach ($categorias as $categoria) 
            <li>{{$categoria}}</li>
        @endforeach  
    </ul>
    
</body>
</html>