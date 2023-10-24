<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <form action="mymenu.php" method="post">
        <label for="peso">Peso (em kg):</label>
        <input type="number" name="peso"><br>
        <label for="altura">Altura: (em cm) :</label>
        <input type="number" name="altura"><br>
        <button type="submit" value="enviar" name="enviar">Enviar</button>
    </form>
    <p>
        <?php
          include('mymenu.php');
        ?>
    <p>
</body>
</html>