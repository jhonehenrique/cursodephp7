<?php

//Dividir sempre vem primeiropor isso usar os parentes para forçar a adição
$resultado = (10 + 3) / 2;

//$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;
$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado2);

?>