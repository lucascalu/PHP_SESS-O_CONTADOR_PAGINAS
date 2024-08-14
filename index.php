<?php

session_start();

if(!isset($_SESSION['visitas'])){

    $_SESSION['visitas'] = 1 ;


}

else {
$_SESSION['visitas'] ++ ;


}

echo " Você  visitou a pagina " . $_SESSION['visitas'] . " vezes";

?>
