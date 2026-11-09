<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <?php 
    $limite = 51;
    for ($i = 0; $i < $limite; $i++) { 
        # Impresion de los numeros del 0 al 50
        echo "Numero: $i<br>";
    }

    $limite = rand(50, 100);
    $inicio = 1;
    # Impresion de numeros del 1 al limite aleatorio (Entre 50 al 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Numero: " . $inicio . "<br>";
        $inicio++;
    }

    # Do while
    $dia = date("d");
    $inicio = rand(10, 20);
    # Mostrar los numeros de un numero random (Entre 10 y 20) a la fecha actual
    do {
        echo "[DO...WHILE] Numero $inicio<br>";
        $inicio++;
    } while ($inicio <= $dia);

    # Mostrar la tabla de multiplicar del 2
    $numero = 2; 
    $multiplicacion = 1;  

    while ($multiplicacion <= 10) {
        echo "$numero x $multiplicacion = " . ($numero * $multiplicacion) . "<br>";
        $multiplicacion++; 
    }

    do {
        $numero2 = 2; 
    $multiplicacion2 = 1;  
    } while ($multiplicacion2 <= 10);
     echo "$numero2 x $multiplicacion2 = " . ($numero2 * $multiplicacion2) . "<br>";
        $multiplicacion2++; 
    ?>
</body>
</html>