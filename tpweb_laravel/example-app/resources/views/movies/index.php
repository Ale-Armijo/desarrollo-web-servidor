<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Welcome to movies</h1>
    <ul>
        <?php
        foreach ($movies as $movie)
        echo "<li>$movie</li>"
        ?>
    </ul>
</body>
</html>