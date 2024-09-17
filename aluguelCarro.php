<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Aluguel de carros</h3>
    <form method="get" action="aluguelCarro.php">
        <table>
            <tr>
                <td><label for="km">Informe a quantidade de KM percorridos:</label></td>
                <td><input name="km" type="number"></td>
            </tr>
            <tr>
                <td><label for="dias">Informe a quantidade de dias de aluguel:</label></td>
                <td><input name="dias" type="number"></td>
            </tr>
        </table>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET['km']) && isset($_GET['dias'])) {
        $km = $_GET['km'];
        $dias = $_GET['dias'];

        $valorKm = 90;
        $valorDia = 0.20;

        $custo = ($valorDia * $dias) + ($valorKm * $km);
        echo "O custo total do aluguel é: R$ " . number_format($custo, 2, ',', '.');
    }
    ?>
</body>

</html>