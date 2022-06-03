<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un numero" />
        <input type="submit" value="Determinar">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['numero'])) {
            $numero = $_POST['numero'];
            
            if($numero % 2 == 0) {
                echo "<div>El numero $numero es par </div>";
            } else {
                echo "<div>El numero $numero es impar </div>";
            }

            if($numero < 0) {
                echo "<div>El numero $numero es negativo </div>";
            } else {
                echo "<div>El numero $numero es positivo </div>";
            }

            
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>