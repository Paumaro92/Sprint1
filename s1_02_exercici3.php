<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    $x = 1;
    $y = 2;
    $n = 1.564;
    $m = 2.356;


    echo ("Valor x:" . ($x) . "\n"); // 0
    echo ("Valor y:" . ($y) . "\n"); // 2  
    
    echo "Cálculos x, y:\n\n";

    // Suma x + y
    $suma = $x + $y;
    echo ("Suma:" . ($suma) . "\n"); // 3
    
    // Resta x - y
    $resta = $x - $y;
    echo ("Resta:" . ($resta) . "\n");

    // Multiplicació x * y
    $multiplicacio = $x * $y;
    echo ("Multiplicación:" . ($multiplicacio) . "\n");

    // Módulo x % y
    $modulo = $x % $y;
    echo ("Módulo:" . ($modulo) . "\n\n");

    echo "Cálculos n, m:\n\n";
    // Suma x + y
    $suma = $n + $m;
    echo ("Suma:" . ($suma) . "\n");

    // Resta x - y
    $resta = $n - $m;
    echo ("Resta:" . ($resta) . "\n");

    // Multiplicació x * y
    $multiplicacio = $n * $m;
    echo ("Multiplicación:" . ($multiplicacio) . "\n");


    // Módulo x % y
    $modulo = $x % $y;
    echo ("Módulo:" . ($modulo) . "\n\n");

    echo ("Operaciones x, y ,n , m:\n\n");

    echo ("El doble de x es:" . ($x * 2)) . "\n";
    echo ("El doble de y es:" . ($y * 2)) . "\n";
    echo ("El doble de n es: " . ($n * 2)) . "\n";
    echo ("El doble de m es: " . ($m * 2)) . "\n\n";

    //Suma de todas las variables
    echo ("La suma de todas las variables es: " . ($x + $y + $n + $m)) . "\n";

    //Producto de todas las variables
    echo ("El producto de todas las variables es: " . ($x * $y * $n * $m)) . "\n";

    //Función calculadora
    function calculadora($x, $y, $operacio)
    {
        switch ($operacio) {
            case 'suma':
                $resultat = $x + $y;
                break;
            case 'resta':
                $resultat = $x - $y;
                break;
            case 'multiplicación':
                $resultat = $x * $y;
                break;
            case 'división':
                $resultat = $x / $y;
                break;
            default:
                echo "Operación no válida";
        }
        return $resultat;

    }

    ?>
</body>

</html>