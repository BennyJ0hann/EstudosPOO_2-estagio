<?php
include_once 'classes/funcionario.class.php';
include_once 'classes/estagiario.class.php';

$pedrinho = new Estagiario;
$pedrinho->setSalario(248);

echo 'O Salário do pedrinho é R$: '. $pedrinho->getSalario() . '<br>'

?>