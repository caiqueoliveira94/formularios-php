<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>

<body>
    <h3>Aumento de 15% no salário</h3>
    <form method="get" action="aumentoSalario.php">
        <table>
            <tr>
                <td><label for="valor">Informe o seu salario:</label></td>
                <td><input name="valor" type="text" placeholder="Ex: 1400"></td>
                <td><button type="submit">Calcular</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['valor'])) {
        $valor = $_GET['valor'];
        $aumento = ($valor / 100) * 15;
        $valorAumento = $valor + $aumento;
        echo "<p>Você terá um aumento de " . number_format($aumento, 2, ',', '.') . " reais, seu novo salário será " . number_format($valorAumento, 2, ',', '.') . " reais.</p>";
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>