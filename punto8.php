<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 8</title>
</head>
<body>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un numero" />
        <input type="submit" value="Tabla">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['numero'])) {
            $numero = $_POST['numero'];

            for ($i=0; $i < 12 ; $i++) { 
                echo '<p>'.$numero.' X '.($i+1).' = '.($i*$numero).'</p>';
            }
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>