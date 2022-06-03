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
        <input type="submit" value="Numero mayor">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['numero1']) && !empty($_POST['numero2'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            if($numero1 < $numero2) {
                echo "<div>El numero $numero2 es mayor que $numero1</div>";
            } else {
                echo "<div>El numero $numero1 es mayor que $numero2</div>";
            }
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>