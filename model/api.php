<?php
 header('Access-Control-Allow-Origin: *');
 // header("Content-Type: application/json");
 function autoload($class){
     require 'entidad/'.$class.'.php'; //traemos todos los archivos .php qye hay en entidades
 }
 spl_autoload_register('autoload');

$obj = new users("carlos", 1234, "../db.json");
echo json_encode($obj->getUsuario());
?>