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
        <input type="text" name="fruta1" placeholder="Digite un fruta 1">
        <input type="text" name="fruta2" placeholder="Digite un fruta 2">
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
        $frutas = ["Limon", "Naranja", "Lima"];
        if($_POST && !empty($_POST['fruta1']) && !empty($_POST['fruta2'])) {
           array_push($frutas, $_POST['fruta1']);
           array_push($frutas, $_POST['fruta2']);

           for ($i=0; $i < count($frutas); $i++) { 
               echo "<p>".$frutas[$i]."</p>";
           }
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>