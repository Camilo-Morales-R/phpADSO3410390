<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Tipos de variables
    // En PHP no es necesario declarar el tipo de datos
    $dia = 4; // Tipo int
    $salario = 200000.50; //Tipo double
    $nombre = "Camilo"; // tipo string o var
    $estado = true; // tipo boleano

    // Imprsion de vbles
    echo "<br>Vble tipo entero: $dia";
    echo "<br>Vble tipo double: ".$salario;
    echo "<br>Vble tipo string: ".$nombre;
    echo "<br>Vble tipo boleano: ".$estado;
    echo"<hr>";

    echo"{$nombre} gana \$$salario"; // Interpolacion y escape de caracteres
    echo "<br>";
    $text = sprintf("Hoy es %d", $dia);
    echo $text;
    $peras = 3;
    $manzana = 5;
    $mango = 4;
    $precioFrutas = 25500.30;
    $text = sprintf("soy %s y tengo % d peras, %d manzanas, %d mango y costaron $%.2f", $nombre,$peras, $manzana, $mango, $precioFrutas);
    echo "<br>" .$text;

    // Uso de heredoc
    $titulo ="Programa de Formacion";
    $texto = "Analisis y Desarrollo de Software";
    $html = <<<HTML
    <div class ="card">
    <h2>Programa de Formacion</h2>
    <p>Analisis y desarrollo de Software</p>
</div>
HTML;
  echo "<br>" .$html;
  
  $numero = rand(10,15);
 $randomtexto = ["diez","once", "Doce", "trece", "catorce", "quince"];
    $texto = $randomtexto[$numero -10];
    echo "<div> $numero y se escribe $texto";

  
    ?>
</body>
</html>