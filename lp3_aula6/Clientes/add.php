<?php 

$nome = $_POST['camponome'];
$email = $_POST['campoemail'];
$cpf = $_POST['campocpf'];
$nascimento = $_POST['campodata'];
$sexo = $_POST['camposexo'];
$obs = $_POST['campoobs'];


if($sexo == 0){
    $sexo = "Feminino";
}else{
    $sexo = "Masculino";
};

include "../includes/conexao.php";

$sql = "insert into clientes(nome, email, cpf, data, sexo, obs)
        Values ('$nome', '$email', '$cpf', '$nascimento', '$sexo', '$obs')";

$conexao->query($sql);

header("location: ../Clientes");