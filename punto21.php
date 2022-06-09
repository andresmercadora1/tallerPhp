<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 21</title>

</head>
<body>
    <form method="post">
        <input type="text" name="numero1" placeholder="Digite un numero" />
        <input type="text" name="numero2" placeholder="Digite un numero" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST && $_POST["numero1"] && $_POST["numero2"]) {
          
            function operaciones($num1, $num2) {
                if(is_numeric($num1) && is_numeric($num2)) {
                    echo "<p>La suma de $num1 + $num2 = ".($num1+$num2)."</p>";
                    echo "<p>La resta de $num1 - $num2 = ".($num1-$num2)."</p>";
                    echo "<p>La multiplicacion de $num1 * $num2 = ".($num1*$num2)."</p>";
                    echo "<p>La divicion de $num1 / $num2 = ".($num1/$num2)."</p>";
                } else {
                    echo "<p>Debe digitar dos números válidos</p>";
                }
            }

            operaciones($_POST["numero1"], $_POST["numero2"]);
           
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>