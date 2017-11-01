<?php

require_once('config.php');


//Se não setar a variavel ele limpa tudo//
session_unset($_SESSION["nome"]);

echo $_SESSION['nome'];

session_destroy();

?>