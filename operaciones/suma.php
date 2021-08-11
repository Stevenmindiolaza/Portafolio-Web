<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplicacion=$num1*$num2;
$division=$num1/$num2;
echo "Resultado"; //* comentario
echo "<br><br>"; //* Esto es un salto de linea
echo "La Suma de $num1 + $num2 es igual a $suma";
echo "<br><br>"; //* Esto es un salto de linea
echo "La Resta de $num1 - $num2 es igual a $resta";
echo "<br><br>"; //* Esto es un salto de linea
echo "La Multiplicacion de $num1 * $num2 es igual a $multiplicacion";
echo "<br><br>"; //* Esto es un salto de linea
echo "La Division de $num1 / $num2 es igual a $division";
echo "<br><br>"; //* Esto es un salto de linea
?>