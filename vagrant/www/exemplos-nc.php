<?php

$dados_importantes = ['nome' => 'Bruce'];
#$dados_importantes = [];


/*
$nome = $dados_importantes['nome']; // Warning!
if ($nome === NULL) {
    $nome = 'Nome Padrão';
}
 */


/**
// if + isset()
if (isset($dados_importantes['nome'])) {
    $nome = $dados_importantes['nome'];
} else {
    $nome = 'Nome Padrão';
}
 */


/*
// operador ternário + isset()
$nome = isset($dados_importantes['nome']) ? $dados_importantes['nome'] : 'Nome Padrão';
 */


#/*
// operador null coalesce
$nome = $dados_importantes['nome'] ?? 'Nome Padrão';
# */


echo "<h1>Olá, $nome!</h1>";


$dados_importantes = []; //['nome' => 'Bruce'];
$dados_alternativos = []; //['nome' => 'José'];

$nome = $dados_importantes['nome'] ?? $dados_alternativos['nome'] ?? 'Nome Padrão';

var_dump($nome);

