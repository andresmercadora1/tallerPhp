<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="salario" placeholder="Ingrese su salario" />
        <input type="submit" value="Calcular descuento">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['salario'])) {
            $salario = $_POST['salario'];
            $descuento = $salario * 8 / 100;
            echo "<div>El salario: $salario</div>";
            echo "<div>El descuento por salud es: ".$descuento."</div>";
            echo "<div>El descuento por pension es: ".$descuento."</div>";
            echo "<div>El descuento total: ".$salario - ($descuento * 2)."</div>";
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>