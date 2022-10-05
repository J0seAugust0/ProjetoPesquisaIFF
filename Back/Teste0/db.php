<?php

$host = "127.0.0.1";
$user = "root";
$password = "root";
$dbname = "teste";
$port = "3306";
//$host = "ec2-34-203-182-65.compute-1.amazonaws.com";
//$user = "oblsyznngznydb";
//$password = "8e86888e0597c4a0e5c63f23d642d0a0509050cd4e39de8eaace9e5e61eb4dc8";
//$dbname = "da6163fb3vjd2t";
//$port = 5432;

try{
  //Set DSN data source name
    //$dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
	
	$dsn = "mysql:host=$host;dbname=$dbname";

  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>
