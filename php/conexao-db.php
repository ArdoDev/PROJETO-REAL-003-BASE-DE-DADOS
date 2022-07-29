<?php
$hostname = 'localhost';
$bancodedados = 'oaes';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli ->connect_errno){
        echo 'Falha ao conectar>(' .$mysqli->connect_errno.')'.$mysqli->connect_error;
    }

$sql = "SELECT * FROM oaes" ;
$result = $conexao->query($sql);
print_r($result);