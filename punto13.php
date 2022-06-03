<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 12</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
           $paises = [
               "170" => "Colombia",
               "152" => "Chile",
               "218" => "Ecuador",
               "724" => "España"
           ];

           foreach ($paises as $key => $value) {
               echo "<p>Codigo: $key - Pais: $value</p>";
           }
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>