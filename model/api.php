<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");


function autoload($class){
    require 'entidad/'.$class.'.php';
}

spl_autoload_register('autoload');

$obj = new user("carlos", 1234);
echo $obj->getUsuario();
?>