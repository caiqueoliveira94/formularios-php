<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas vindas</title>
</head>

<body>
    <h3>Boas vindas</h3>
    <form method="get" action="boasVindas.php">
        <table>
            <tr>
                <td><label for="nome">Qual é o seu nome?</label></td>
                <td><input name="nome" type="text"></td>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>

    </form>

    <?php
    if (isset($_GET['nome'])) {
        echo "<p>Bem vindo, " . $_GET['nome'] . "</p><br>";
    }
    ?>
</body>

</html>