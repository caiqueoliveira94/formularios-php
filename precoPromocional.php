<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Valor com desconto de 5%</h3>
    <form method="get" action="precoPromocional.php">
        <table>
            <tr>
                <td><label for="valor">Informe o valor do produto:</label></td>
                <td><input name="valor" type="text" placeholder="Ex: 100"></td>
                <td><button type="submit">Calcular</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['valor'])) {
        $valor = $_GET['valor'];
        $desconto = ($valor / 100) * 5;
        $valorDesconto = $valor - $desconto;
        echo "<p>O produto de valor $valor reais, vai custar " . number_format($valorDesconto, 2, ',', '.') . " reais com 5% de desconto.</p>";
    }
    ?>
</body>

</html>