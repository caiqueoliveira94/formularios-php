<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>

<body>
    <h3>Dobre e terça parte de um número</h3>
    <form method="get" action="dobro-tercaParte.php">
        <table>
            <tr>
                <td><label for="numero">Digite um número:</label></td>
                <td><input name="numero" type="text" placeholder="Ex: 3.5"></td>
                <td><button type="submit">Calcular</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "O dobro de $numero é " . number_format(($numero * 2), 2, ',', '.') ;
        echo "<br>";
        echo "A terça parte de $numero é " . number_format(($numero / 3), 2, ',', '.') ;
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>