<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 15</title>

</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
           $libros = [
               "accion" => [
                   "El corsario negro", "La vuelta al mundo en ochenta días",
                   "The Silver Serpent (Ben Hope, Book 25)", "Mi misión era acercarme a Miranda"
               ],
               "terror" => [
                   "It (novela)", "Drácula", "El misterio de Salem's Lot", "El resplandor (novela)"
               ],
               "aventura" => [
                   "Robinson Crusoe", "La isla del tesoro", "Las aventuras de Tom Sawyer", "La vuelta al mundo en ochenta días"
               ],
               "comedia" => [
                   "La conjura de los necios", "Sin noticias de Gurb", "Diario de una dama de provincias", "Divina comedia"
               ]
           ];

           foreach ($libros as $key => $libro) {
                echo "<span>Libro de ".$key.": </span>";
               foreach ($libro as $key1 => $genero) {
                    echo "<span>[".$genero."] - </span>";
               }
               echo "<p></p>";
           }

           
       }
    ?>

<a href="index.php">Home</a>
</body>
</html>