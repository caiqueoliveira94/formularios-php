<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Antecessor e Sucessor de um número</h3>
    <form name="boasVindas" method="get" action="dobro-terçaParte.php">
        <table>
            <tr>
                <td><label for="numero">Digite um número:</label></td>
                <td><input name="numero" type="text" placeholder="Ex: 3.5"></td>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "O dobro de $numero é " . ($numero * 2);
        echo "<br>";
        echo "A terça parte de $numero é " . ($numero / 3);
    }
    ?>
</body>

</html>