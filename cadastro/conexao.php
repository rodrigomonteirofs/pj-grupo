<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="login";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Houve um erro");
}




?>