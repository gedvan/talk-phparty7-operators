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
  new Pessoa('Bruce', 23),
  new Pessoa('Peterson', 20),
  new Pessoa('Mary', 30),
  new Pessoa('peter', 20),
  new Pessoa('Thomas', 22),
  new Pessoa('Tom', 30),
  new Pessoa('Tim', 30),
];

function compara_idade_sem_spaceship(Pessoa $a, Pessoa $b) {
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

function compara_nome_sem_spaceship(Pessoa $a, Pessoa $b) {
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

function compara_nome_sem_spaceship_strcmp(Pessoa $a, Pessoa $b) {
	$nomeA = strtoupper($a->getNome());
	$nomeB = strtoupper($b->getNome());
	return strcmp($nomeA, $nomeB);
}

function compara_nome_com_spaceship(Pessoa $a, Pessoa $b) {
	$nomeA = strtoupper($a->getNome());
	$nomeB = strtoupper($b->getNome());
	return $nomeA <=> $nomeB;
}

function compara_pessoa_sem_spaceship(Pessoa $a, Pessoa $b) {
	if ($a->getIdade() < $b->getIdade()) {
		return -1;
	}
	elseif ($a->getIdade() > $b->getIdade()) {
		return 1;
	}
	else {
		if ($a->getNome() < $b->getNome()) {
			return -1;
		}
		elseif ($a->getNome() > $b->getNome()) {
			return 1;
		}
		else {
			return 0;
		}
	}
}

function compara_pessoa_com_spaceship(Pessoa $a, Pessoa $b) {
	$cmp_idade = $a->getIdade() <=> $b->getIdade();
	if ($cmp_idade != 0) {
		return $cmp_idade;
	}
	else {
		return $a->getNome() <=> $b->getNome();
	}
}

usort($pessoas, 'compara_idade_com_spaceship');

require 'header.php'; ?>

<div class="row">
  <div class="col-sm-6 col-sm-offset-3">

		<table class="table">
			<thead>
				<tr>
					<th>Idade</th>
					<th>Nome</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pessoas as $pessoa): ?>
				<tr>
					<td><?php echo $pessoa->getIdade(); ?></td>
					<td><?php echo $pessoa->getNome(); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>
</div>


<?php require 'footer.php'; ?>
