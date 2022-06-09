<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 16</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
           $numeros = [3, 5, 9, 10, 35, 42, 12, 22];
           $contPar = 0;
           $contImpar = 0;

           echo "<span>Vector: [</span>";
           for ($i=0; $i < count($numeros); $i++) { 
                echo "<span>".$numeros[$i].", </span>";
            }
            echo "]<p></p>";

            echo "<span>Numero pares: </span>";
            for ($i=0; $i < count($numeros); $i++) { 
                if($numeros[$i] % 2 == 0) {
                    $contPar++;
                    echo "<span>".$numeros[$i].", </span>";
                }
            }
            echo "<p>Cantidad numero par: $contPar</p>";
            echo "<p></p>";

            echo "<span>Numero impares: </span>";
            for ($i=0; $i < count($numeros); $i++) { 
                if($numeros[$i] % 2 == 1) {
                    $contImpar++;
                    echo "<span>".$numeros[$i].", </span>";
                }
            }
            echo "<p>Cantidad numero impar: $contImpar</p>";
            echo "<p></p>";
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>