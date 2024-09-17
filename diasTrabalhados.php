<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Salário total</h3>
    <form method="get" action="diasTrabalhados.php">
        <table>
            <tr>
                <td><label for="dias">Informe o número de dias trabalhados:</label></td>
                <td><input name="dias" type="number"></td>
            </tr>            
        </table>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET['dias'])) {
        
        $dias = $_GET['dias'];

        $horasDia = 8;
        $valorHora = 25;

        $salario = $dias * $horasDia * $valorHora;
        echo "O salário total do funcionário é: R$ " . number_format($salario, 2, ',', '.');
    }
    ?>
</body>

</html>