<?php

session_id('74ui3ra17ou2uvpbhumjub21f9'); 

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>