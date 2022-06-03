<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 6</title>
</head>
<body>
    <form method="post">
        <input type="number" name="dia" placeholder="Ingrese el dia de la sema" />
        <input type="submit" value="Ver dia">
    </form>
    
    <?php 
        if($_POST && !empty($_POST['dia'])) {
            $dia = $_POST['dia'];

            switch($dia) {
                case 1:
                    echo "<div>El dia de la sema es lune</div>";
                    break;
                case 2:
                    echo "<div>El dia de la sema es martes</div>";
                    break;
                case 3:
                    echo "<div>El dia de la sema es miercoles</div>";
                    break;
                case 4:
                    echo "<div>El dia de la sema es jueves</div>";
                    break;
                case 5:
                    echo "<div>El dia de la sema es viernes</div>";
                    break;
                case 6:
                    echo "<div>El dia de la sema es sabado</div>";
                    break;
                case 7:
                    echo "<div>El dia de la sema es domingo</div>";
                    break;
                default:
                    echo "<div>El dia ingresado no es valido</div>";
                    break;
            }
        }
    ?>

<a href="index.php">Home</a>
</body>
</html>