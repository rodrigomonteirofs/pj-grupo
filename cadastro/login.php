<?php
session_start();

include("conexao.php");


if(empty($_POST['senha']) || empty($_POST['email'])){
    header("Location: acesso.php");
}


$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$email = mysqli_real_escape_string($conexao, $_POST['email']);

$query="SELECT * FROM login.cadastro where md5('$senha') and email='$email';";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: Painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: acesso.php');
    exit();

}