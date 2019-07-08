<?php

$host = 'localhost';
$dataBase_name   = 'worldchanger';
$userDB = 'root';
$passDB = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dataBase_name;charset=$charset";
$opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
 $pdo = new PDO($dsn, $userDB, $passDB, $opt);

session_start(); 
} catch ( PDOException $e ) {
  exit ( $e->getMessage() );
}
?>