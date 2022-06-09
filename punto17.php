<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 17</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
           $numeros = [3, 5, 9, 10, 35, 42, 12, 22, 25];
           $medio = count($numeros) / 2;

           echo "<span>Vector: [</span>";
           for ($i=0; $i < count($numeros); $i++) { 
                echo "<span>".$numeros[$i].", </span>";
            }
            echo "]<p>Primer numero del vector: ".$numeros[0]."</p>";
            echo "<p>Numero central del vector: ".$numeros[$medio]."</p>";
            echo "<p>Ultimo numero del vector: ".$numeros[count($numeros)-1]."</p>";
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>