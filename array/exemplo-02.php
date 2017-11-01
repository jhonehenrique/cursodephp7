<?php

//ARRAY BIDIMENSIONAL

$carros[0][0] = "GM";
$carros[0][1] = "Corsa";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "FORD";
$carros[1][1] = "Fusion";
$carros[1][2] = "Fiesta";
$carros[1][3] = "Eco Sport";

echo $carros[0][1]."<br>";
echo end($carros[1]);

echo "<pre>";
print_r($carros);

?>