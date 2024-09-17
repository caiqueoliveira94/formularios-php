<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>

<body>
    <h3>Antecessor e Sucessor de um número</h3>
    <form method="get" action="antecessorSucessor.php">
        <table>
            <tr>
                <td><label for="numero">Digite um número:</label></td>
                <td><input name="numero" type="number"></td>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "O antecessor de $numero é " . ($numero - 1);
        echo "<br>";
        echo "O sucessor de $numero é " . ($numero + 1);
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>