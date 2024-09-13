<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de notas</title>
</head>

<body>
    <h3>Calcular média das notas do aluno</h3>
    <form name="boasVindas" method="get" action="notaAluno.php">
        <table>
            <tr>
                <td><label for="primeiraNota">Nota 1:</label></td>
                <td><input name="primeiraNota" type="text"></td>
            </tr>
            <tr>
                <td><label for="segundaNota">Nota 2:</label></td>
                <td><input name="segundaNota" type="text"></td>
            </tr>
        </table>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_GET['primeiraNota']) && isset($_GET['segundaNota'])) {
        $primeiraNota = $_GET['primeiraNota'];
        $segundaNota = $_GET['segundaNota'];
        $calculo = ($primeiraNota + $segundaNota) / 2;
        echo "A média entre $primeiraNota e $segundaNota é $calculo.";
    }
    ?>
</body>

</html>