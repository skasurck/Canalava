<?php

$server = 'canalava.org.mx';
$username = 'canalava_skacana';
$password = '17diciembre2010';
$database = 'canalava_php_login_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
