<?php

//Credenciais de acesso ao BD
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', 'root');
define('DBNAME', 'teste');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);

$_SESSION['idUsuario'] = 1;