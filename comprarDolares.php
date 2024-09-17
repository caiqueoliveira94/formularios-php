<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Metros para outras unidades</h3>
    <form method="get" action="comprarDolares.php">
        <table>
            <tr>
                <td><label for="numero">Quanto dinheiro você tem em reais:</label></td>
                <td><input name="numero" type="text" placeholder="Ex: 100"></td>
                <td><button type="submit">Calcular</button></td>
            </tr>
        </table>
    </form>
    <?php

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        $dolar = number_format($numero / 4.95, 2, ',', '.');
        echo "Com $numero reais você pode comprar $dolar dolares";       
    }
    ?>
</body>

</html>