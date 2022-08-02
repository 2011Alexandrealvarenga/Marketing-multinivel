<?php 
try {
    $pdo = new PDO("mysql:dbname=marketing_multinivel;host=localhost","root","");
} catch (PDOException $e) {
    echo 'ERRO: ' .$e->getMessage();
    exit;
}

$limite = 3;

$patentes = array(
	
);