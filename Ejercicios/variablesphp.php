<?php
//definir variable

$nombre = "Daniel";

$url = "www.youtobe.com/nanixc7";

echo  "<h3>direccion</h3>";
echo $url;
echo "<br />";

//cambiando el valor de una variable

$url = 'www.nanixc7.com';
echo $url;
echo "<br />";

//vairable tipo string y concatenar

$apellido = "Cabrera Agustin";
$mensaje = "Mi primer string";

print "$apellido: $mensaje";
echo "<br />";

//variables de tipo entero

$estatura = 123;

echo "Estatura: $estatura";
echo "<br />";

//suma de valores

$num1 = 10;
$num2 = 20;

$suma = $num1 + $num2;

echo "Total: $suma";
echo "<br />";


function sumar(){

    $var1 = 30;
    $var2 = 50;
    $totalSuma = $var1 + $var2;
    echo "La suma es: " . $totalSuma;

}

sumar();
echo "<br />";


function restar(){

    $var1 = 30;
    $var2 = 100;
    $totalSuma = $var1 - $var2;
    echo "La resta es: " . $totalSuma;

}

restar();
echo "<br />";

//varables locales

$contacto = "Daniel Cabrera";

function mostrarContacto(){

    $contacto = "Ignacio Agustin";
    echo $contacto;

}

mostrarContacto();
echo "<br />";
echo $contacto;
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";

//variables globales

global $mensaje;

$mensaje = "saludo";

function mostrarContacto3(){

    global $mensaje;
    echo $mensaje;

}

mostrarContacto3();
echo "<br />";
echo $mensaje;
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";

//variebles estáticas

function contador(){
    static $num = 1;
    echo $num;
    $num = $num + 1;
}

echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";
echo "<br />";
echo "<br />";

//variables superglobales

$saludo4;
$saludo4 = "Bienvenidos";

echo $GLOBALS['saludo4'] . "<br />";

?>