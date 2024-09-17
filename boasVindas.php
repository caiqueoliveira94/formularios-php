<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
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

    <p><a href="index.php">Voltar</a></p>
</body>

</html>