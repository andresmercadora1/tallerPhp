<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3</title>
</head>
<body>
    <form method="post">
        <input type="number" name="numero1" placeholder="Ingrese numero 1" />
        <input type="number" name="numero2" placeholder="Ingrese numero 2" />
        <input type="submit" value="Operaciones">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['numero1']) && !empty($_POST['numero2'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multip = $numero1 * $numero2;
            $div = $numero1 / $numero2;
            $modulo = $numero1 % $numero2;

            echo "<div>La suma de $numero1 + $numero2 = $suma</div>";
            echo "<div>La resta de $numero1 - $numero2 = $resta</div>";
            echo "<div>La multiplicación de $numero1 X $numero2 = $multip</div>";
            echo "<div>La divicion de $numero1 / $numero2 = $div</div>";
            echo "<div>La modulo de $numero1 % $numero2 = $modulo</div>";
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>