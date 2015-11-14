<?php

class Pessoa
{
  private $nome;
  private $idade;

  public function __construct($nome, $idade) {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getIdade() {
    return $this->idade;
  }
}

$pessoas = [
  new Pessoa('Bruce', 25),
  new Pessoa('Peter', 28),
  new Pessoa('Mary', 22),
  new Pessoa('BRUCE', 23),
  new Pessoa('Peterson', 20),
  new Pessoa('mary', 30),
  new Pessoa('peter', 20),
  new Pessoa('Thomas', 22),
  new Pessoa('TOM', 30),
  new Pessoa('Tim', 30),
];

#sort($pessoas);
usort($pessoas, 'compara_nome_e_idade');

function compara_idade(Pessoa $a, Pessoa $b) {
  if ($a->getIdade() < $b->getIdade()) {
    return -1;
  }
  elseif ($a->getIdade() > $b->getIdade()) {
    return 1;
  }
  else {
    return 0;
  }
}


function compara_idade_com_spaceship(Pessoa $a, Pessoa $b) {
  return $a->getIdade() <=> $b->getIdade();
}


function compara_nome(Pessoa $a, Pessoa $b) {
  $nomeA = strtoupper($a->getNome());
  $nomeB = strtoupper($b->getNome());
  if ($nomeA < $nomeB) {
    return -1;
  }
  elseif ($nomeA > $nomeB) {
    return 1;
  }
  else {
    return 0;
  }
}


function compara_nome_com_strcmp(Pessoa $a, Pessoa $b) {
  $nomeA = strtoupper($a->getNome());
  $nomeB = strtoupper($b->getNome());
  return strcmp($nomeA, $nomeB); // http://php.net/manual/en/function.strcmp.php
}


function compara_nome_com_spaceship(Pessoa $a, Pessoa $b) {
  $nomeA = strtoupper($a->getNome());
  $nomeB = strtoupper($b->getNome());
  return $nomeA <=> $nomeB;
}


function compara_nome_e_idade(Pessoa $a, Pessoa $b) {
  $nomeA = strtoupper($a->getNome());
  $nomeB = strtoupper($b->getNome());

  $compNomes = $nomeA <=> $nomeB;
  if ($compNomes != 0) {
    return $compNomes;
  }
  else {
    return $a->getIdade() <=> $b->getIdade();
  }
}


require 'header.php'; ?>

<div class="row">
  <div class="col-sm-6 col-sm-offset-3">

    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pessoas as $pessoa): ?>
        <tr>
          <td><?php echo $pessoa->getNome(); ?></td>
          <td><?php echo $pessoa->getIdade(); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>


<?php require 'footer.php'; ?>
