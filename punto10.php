<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 10</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numero" placeholder="Digite un numero" />
        <input type="submit" value="Calcular" />
    </form>
    
    <?php 
        if($_POST && $_POST["numero"]) {
            $numero = $_POST["numero"];
            $cont = 0;
            for ($i=0; $i < $numero; $i++) {
                
                if ($cont <= $numero) {
                    echo '<p>'.$cont.'</p>';
                }
                $cont= $cont +3;
            }
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>