<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/CLASSPESSOA/style.css">
</head>
<body>
    
</body>
</html>

<?php

include 'Pessoa.php';

if(isset($_GET['nome']) && isset($_GET['dataNascimento'])){
    $nome = $_GET['nome'];
    $dataNascimento = $_GET['dataNascimento'];

    $pessoa = new Pessoa($nome, $dataNascimento);

    $nome = $pessoa->getNome();
    $dataNascimento = $pessoa->getDataNascimento();
    $idade = $pessoa->calcularIdade();


    echo "Olá $nome, sua idade é: $idade anos";
}
?>
