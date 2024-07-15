<?php
include_once 'classes/funcionario.class.php';
include_once 'classes/estagiario.class.php';

$pedrinho = new Funcionario;
$pedrinho->nome = 'Pedrinho';

$mariana = new Estagiario;
$mariana->nome = 'Mariana';

echo $pedrinho->nome . '<br>';
echo $mariana->nome . '<br>';

?>