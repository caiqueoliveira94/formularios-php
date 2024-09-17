<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios php</title>
</head>

<body>
    <h3>Equação de segundo grau</h3>
    <form method="get" action="equacao.php">
        <table>
            <tr>
                <td><label for="valorA">Informe o valor de a:</label></td>
                <td><input name="valorA" type="text" placeholder="Ex: 4"></td>
            </tr>
            <tr>
                <td><label for="valorB">Informe o valor de b:</label></td>
                <td><input name="valorB" type="text" placeholder="Ex: 4"></td>
            </tr>
            <tr>
                <td><label for="valorC">Informe o valor de c:</label></td>
                <td><input name="valorC" type="text" placeholder="Ex: 4"></td>
            </tr>
            
        </table>
        <td><button type="submit">Calcular</button></td>
    </form>
    <?php

    if (isset($_GET['valorA']) && isset($_GET['valorB']) && isset($_GET['valorC'])) {
        $a = $_GET['valorA'];
        $b = $_GET['valorB'];
        $c = $_GET['valorC'];

        if ($a == 0) {
            echo "O valor de a deve ser diferente de 0";
        } else {
            $delta = ($b * $b) - (4 * $a * $c);

            echo "<p>O valor de delta é: $delta</p>";
        }
    }
    ?>
</body>

</html>