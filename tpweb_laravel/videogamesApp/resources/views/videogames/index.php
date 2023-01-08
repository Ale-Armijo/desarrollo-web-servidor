<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videogames</title>
</head>
<body>
    <h1>My videogames</h1>
    <!--
    <ul>
        <?php
        /*
        foreach ($videogames as $videogame){
            echo "<li>$videogame</li>";
        }
        */
        ?>
    </ul>
    -->

    <table>
        <tr>
            <th>Titulo</th>
            <th>PEGI</th>
            <th>compañia</th>
        </tr>
        <?php
        foreach ($videogames as $videogame){//List para descomponer el array multidimensional
            list($titulo, $edad, $compania)= $videogame;
            ?>
            <tr>
                <td> <?php echo $titulo?> </td>
                <td> <?php echo $edad?> </td>
                <td> <?php echo $compania?> </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>