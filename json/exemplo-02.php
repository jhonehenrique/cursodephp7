<?php

//JSON DECODE//

$json = '[{"nome":"Jhone","idade":27,"profissao":"programador"},{"nome":"Bianca","idade":19,"profissao":"dona de casa"}]';

//Sem o true ele deixa em objeto//
$data = json_decode($json, true);

var_dump($data);

?>