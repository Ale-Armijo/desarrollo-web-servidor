<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View of Companies</title>
</head>
<body>
    <h1>Vista de Compañias</h1>


    <table>
        <tr>
            <th>Nombre compañia -</th>
            <th>Año Fundacion -</th>
            <th>Ciudad</th>
        </tr>
        <?php
        foreach ($companies as $companie){//List para descomponer el array multidimensional
            list($nombre, $ano, $ciudad)= $companie;
            ?>
            <tr>
                <td> <?php echo $nombre?> </td>
                <td> <?php echo $ano?> </td>
                <td> <?php echo $ciudad?> </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>