<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 14</title>

    <style>
        .space {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
           $numeros = [
               [2,4,6,8,10],
               [1,3,5,7,9],
               [2,3,5,7,11],
               [-1,-2,-3,-4,-5]
           ];

           for ($i=0; $i < count($numeros); $i++) { 
               for ($j=0; $j < count($numeros[$i]); $j++) { 
                    echo "<span class='space'>".$numeros[$i][$j]."</span>";
               }

               echo "<p></p>";
                
           }

           
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>