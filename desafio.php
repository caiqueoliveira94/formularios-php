<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>

<body>
    <h3>Desafio</h3>
    <form method="get" action="desafio.php">
        <table>
            <tr>
                <td><label for="cigarros">Cigarros fumados por dia:</label></td>
                <td><input name="cigarros" type="number"></td>
            </tr>            
            <tr>
                <td><label for="anos">Fuma a quantos anos:</label></td>
                <td><input name="anos" type="number"></td>
            </tr>            
        </table>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET['cigarros']) && isset($_GET['anos'])) {
        
        $anos = $_GET['anos'];
        $cigarros = $_GET['cigarros'];

        $minutosProCigarro = 10;
        $minutosPorDia = 1440;

        $totalCigarros = $minutosProCigarro * 365 * $anos;
        $minutosPerdidos = $totalCigarros * $minutosProCigarro;
        $diasPerdidos = $minutosPerdidos / $minutosPorDia;

        echo "<p>O fumante perdeu aproximadamente " . number_format($diasPerdidos, 2, ',', '.') . " dias de vida.</p>";
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>