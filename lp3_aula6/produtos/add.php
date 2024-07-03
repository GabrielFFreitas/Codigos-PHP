<?php 

$nome = $_POST['camponomeproduto'];
$preco = $_POST['campoprecoproduto'];
$categoria = $_POST['campocategoriaproduto'];

include "../includes/conexao.php";

$sql = "insert into produtos(nome, categoria, preco)
        Values ('$nome', '$categoria', '$preco')";

$conexao->query($sql);

header("location: ../produtos");