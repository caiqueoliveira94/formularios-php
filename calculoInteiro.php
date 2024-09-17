<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>

<body>
    <h3>Calcular números inteiros</h3>
    <form method="get" action="calculoInteiro.php">
        <table>
            <tr>
                <td><label for="primeiroNumero">Digite um valor:</label></td>
                <td><input name="primeiroNumero" type="number"></td>
            </tr>
            <tr>
                <td><label for="segundoNumero">Digite um valor:</label></td>
                <td><input name="segundoNumero" type="number"></td>
            </tr>
        </table>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET['primeiroNumero']) && isset($_GET['segundoNumero'])) {
        $primeiroNumero = $_GET['primeiroNumero'];
        $segundoNumero = $_GET['segundoNumero'];
        $calculo = $primeiroNumero + $segundoNumero;
        echo "A some entre $primeiroNumero e $segundoNumero é $calculo.";
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>