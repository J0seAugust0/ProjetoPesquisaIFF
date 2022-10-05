<?php
/*
$host = "ec2-34-203-182-65.compute-1.amazonaws.com";
$user = "oblsyznngznydb";
$pass = "8e86888e0597c4a0e5c63f23d642d0a0509050cd4e39de8eaace9e5e61eb4dc8";
$dbname = "da6163fb3vjd2t";
$port = 5432;
*/
$host = "127.0.0.1";
$user = "root";
$pass = "root";
$dbname = "teste";
$port = "3306";
try{
    //Conexao com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    
    //Conexao sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $erro){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerando " . $erro->getMessage();
}
