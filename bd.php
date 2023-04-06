<?php
$servidor="localhost";
$baseDeDatos="agenda";
$usuario="root";
$contraseña="";

try{
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contraseña);

}catch(Exception $ex){
    echo $ex->getMessage();
}

?>