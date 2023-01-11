<?php 

define("_BASE","/universite");


$action = $_GET['action'];
$tab = explode('/', $action);

$arg = NULL;
$controller = $tab[0];
$fonction = $tab[1];

if (isset($tab[2])){
    $arg= $tab[2];
}


require('controller/'.$controller.'.php') ;
 
if (isset($arg)) {
   
    $fonction($arg);
} else {
    $fonction();
}
?>