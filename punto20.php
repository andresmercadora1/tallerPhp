<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 20</title>

</head>
<body>
    <form method="post">
        <input type="text" name="nombre" placeholder="Digite su nombre" />
        <input type="submit" value="Mostrar">
    </form>
    
    <?php 
       if($_POST && $_POST["nombre"]) {
          
            function mostrarNombre($nombre) {
                if(!is_numeric($nombre)) {
                    echo "<p>El nombre digitado es: $nombre</p>";
                } else {
                    echo "<p>Debe digitar un nombre válido</p>";
                }
            }

            mostrarNombre($_POST["nombre"]);
           
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>