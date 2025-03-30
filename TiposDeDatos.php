<?php 

echo "<br />";
echo "----------- ENTEROS ------------";
echo "<br />";

$puntaje = 120;
echo $puntaje;

echo "<br />";
echo "----------- HEXADECIMAL ------------";
echo "<br />";

$numHexa = 0x6FFF6;
echo $numHexa;

echo "<br />";
echo "----------- STRING A ENTERO ------------";
echo "<br />";

$puntaje = 20;
$total = "120" + $puntaje;
echo $total;

echo "<br />";
echo "----------- NUMEROS NEGATIVOS ------------";
echo "<br />";

$puntajeTotal = 8 - 20;
echo $puntajeTotal;

echo "<br />";
echo "----------- ENTERO MAXIMO ------------";
echo "<br />";

echo PHP_INT_MAX;

echo "<br />";
echo "----------- ENTERO MINIMO ------------";
echo "<br />";

echo PHP_INT_MIN;

echo "<br />";
echo "----------- DECIMALES ------------";
echo "<br />";

$pagoTotal = 102.45;
echo $pagoTotal;

echo "<br />";

$saldoPendiente = -56.23;
echo $saldoPendiente;

echo "<br />";
echo "----------- REDONDEO DE DECIMALES ------------";
echo "<br />";

$puntaje = 48.10;
echo round($puntaje);

echo "<br />";
echo "----------- COMPARACION DE DECIMALES ------------";
echo "<br />";

$precio = 1.87;
$estimado = 1.98;
echo "<br />";
echo (abs($precio - $estimado) < 0.1) ? "PAGA" : "NO PAGA";


?>