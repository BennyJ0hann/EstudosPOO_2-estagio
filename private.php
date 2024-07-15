<?php
include_once 'classes/funcionario.class.php';

$pedro = new Funcionario;
$pedro->setSalario(876);

echo 'Salario: R$ '. $pedro->getSalario();
?>