<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Metros para outras unidades</h3>
    <form name="boasVindas" method="get" action="transformarMetros.php">
        <table>
            <tr>
                <td><label for="numero">Digite uma distância em metros:</label></td>
                <td><input name="numero" type="text" placeholder="Ex: 185.72"></td>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "Adistância de $numero metros, corresponte a:";
        echo "<p>" . $numero / 1000 . "Km</p>";
        echo "<p>" . $numero / 100 . "Hm</p>";
        echo "<p>" . $numero / 10 . "Dam</p>";
        echo "<p>" . $numero * 10 . "dm</p>";
        echo "<p>" . $numero * 100 . "cm</p>";
        echo "<p>" . $numero * 1000 . "mm</p>";
    }
    ?>
</body>

</html>