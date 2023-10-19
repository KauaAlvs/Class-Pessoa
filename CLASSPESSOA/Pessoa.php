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

class Pessoa {
    private $nome;
    private $dataNascimento;

    public function __construct($nome, $dataNascimento) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
    }

    public function calcularIdade() {
        $dataNascimento = new DateTime($this->dataNascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($dataNascimento)->y;
    
        return $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }
}
?>








