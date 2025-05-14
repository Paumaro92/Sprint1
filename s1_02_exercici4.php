<?php

/*$contador = 1;
 $limite = 10; 
 while($contador <= $limite){ 
 echo $contador . "\n"; 
 $contador++; 
 } */
function contarHasta($limite = 10, $deQuantoEnQuanto = 1)
{
  if ($deQuantoEnQuanto <= 0) {
    echo "El incremento debe ser mayor que 0 o te vas a un bucle O_o.\n";
    return;
  }
  for ($x = 1; $x <= $limite; $x += $deQuantoEnQuanto) {
    echo $x . "\n";
  }
}
//Sin parámetro definido contará hasta 10 de 1 en 1
contarHasta();
echo "Se cuenta de 2 en 2:\n";
// Con el primero y el segundo parámetros definidos contará hasta 20 de 2 en 2 en este caso. 
contarHasta(22, 3);



?>