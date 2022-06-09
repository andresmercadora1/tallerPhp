<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 19</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
            $arreglo1 = [3, 5, 9, 10, 35, 42];
            $arreglo2 = [9, 15, 7, 1, 22, 2];
            $result1 = 0;
            $result2 = 0;

            echo "<span>Vector1: [</span>";
            for ($i=0; $i < count($arreglo1); $i++) { 
                echo "<span>".$arreglo1[$i].", </span>";
            }

            echo "]<p></p>";
            echo "<span>Vector2: [</span>";
            for ($i=0; $i < count($arreglo2); $i++) { 
                echo "<span>".$arreglo2[$i].", </span>";
            }

            echo "]<p></p>";
            echo "<span>Suma de los vectores: [</span>";
            for ($i=0; $i < count($arreglo2); $i++) { 
                echo "<span>".($arreglo2[$i]+$arreglo1[$i]).", </span>";
                $result1+=$arreglo1[$i];
                $result2+=$arreglo2[$i];
            }
            echo ($result1 + $result2)."]<p></p>";
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>