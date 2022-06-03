<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
</head>
<body>
    <form method="post">
        <input type="number" name="edad" placeholder="Ingrese su edad" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST && !empty($_POST['edad'])) {
            $edad = $_POST['edad'];

            if ($edad < 18) {
                echo '<div>Es adolescente</div>';
            } else if ($edad <= 28) {
                echo '<div>Es adulto adolecente</div>';
            } else if ($edad <= 49) {
                echo '<div>Es adulto</div>';
            } else {
                echo '<div>Es adulto mayor</div>';
            }

        }
    ?>

<a href="index.php">Home</a>
</body>
</html>