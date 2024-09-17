<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>

<body>
    <h3>Tinta nescessária para pintar a parede</h3>
    <form method="get" action="areaPintura.php">
        <table>
            <tr>
                <td><label for="largura">Informe a largura da parede:</label></td>
                <td><input name="largura" type="text" placeholder="Ex: 4"></td>
            </tr>
            <tr>
                <td><label for="altura">Informe a altura da parede:</label></td>
                <td><input name="altura" type="text" placeholder="Ex: 2.5"></td>
            </tr>
        </table>
        <td><button type="submit">Calcular</button></td>
    </form>
    <?php

    if (isset($_GET['largura']) && isset($_GET['altura'])) {
        $area = $_GET['largura'] * $_GET['altura'];
        $tinta = $area / 2;
        echo "<p>Area total da parede: $area m²</p>";
        echo "<p>Você precisará de $tinta litros de tinta para a pintura.</p>";      
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>