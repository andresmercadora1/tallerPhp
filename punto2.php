<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
</head>
<body>
    <form method="post">
        <input type="number" name="altura" placeholder="Ingrese la altura" />
        <input type="number" name="base" placeholder="Ingrese la base" />
        <input type="submit" value="Calcular area del triangulo">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['altura']) && !empty($_POST['base'])) {
            $area = ($_POST['base'] * $_POST['altura']) / 2;
            echo "<div>El area del triangulo es: $area</div>";
        }
        
    ?>

<a href="index.php">Home</a>
</body>
</html>