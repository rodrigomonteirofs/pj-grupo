<?php

include("conexao.php");
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];

$sql="INSERT INTO cadastro(nome, senha, email, cidade, estado) VALUES('$nome', '$senha', '$email', '$cidade', '$estado')";


if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}else{
    echo "Erro";
}
mysqli_close($conexao);



?>