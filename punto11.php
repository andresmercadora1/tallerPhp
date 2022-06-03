<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 11</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
        if($_POST) {
            $cont = 30;
            for ($i=30; $i > 0; $i--) {
                $cont= $cont - 3;
                if ($cont > 0) {
                    echo '<p>'.$cont.'</p>';
                }
            }
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>