<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário x Salário</title>
</head>

<body>
    <h3>Funcionário x Salário</h3>
    <form name="boasVindas" method="get" action="salario.php">
        <table>
            <tr>
                <td><label for="funcionario">Funcionário:</label></td>
                <td><input name="funcionario" type="text"></td>
            </tr>
            <tr>
                <td><label for="salario">Salário:</label></td>
                <td><input name="salario" type="text"></td>
            </tr>
        </table>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_GET['funcionario']) && isset($_GET['salario'])) {
        echo "O funcionario " . $_GET['funcionario'] . " tem um salário de: R$" . $_GET['salario'] . " no mes de junho.";
    }
    ?>
</body>

</html>