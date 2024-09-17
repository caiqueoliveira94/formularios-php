<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>

<body>
    <h3>Calcular média das notas do aluno</h3>
    <form method="get" action="notaAluno.php">
        <table>
            <tr>
                <td><label for="primeiraNota">Nota 1:</label></td>
                <td><input name="primeiraNota" type="text" placeholder="Ex: 5.5"></td>
            </tr>
            <tr>
                <td><label for="segundaNota">Nota 2:</label></td>
                <td><input name="segundaNota" type="text" placeholder="Ex: 10"></td>
            </tr>
        </table>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET['primeiraNota']) && isset($_GET['segundaNota'])) {
        $primeiraNota = $_GET['primeiraNota'];
        $segundaNota = $_GET['segundaNota'];
        $calculo = ($primeiraNota + $segundaNota) / 2;
        echo "<p>A média do aluno é: " . number_format($calculo, 2, ',', '.') . "</p>";
    }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>

</html>