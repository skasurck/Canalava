<?php

$server = 'canalava.org.mx';
$username = 'canalava_skacana';
$password = '17diciembre2010';
$database = 'canalava_php_login_database';

$mysqli =new mysqli($server, $username, $password, $database );

if($mysqli->connect_error){
    die('Error en la conexion' . $mysqli->connect_error);
}

?>
