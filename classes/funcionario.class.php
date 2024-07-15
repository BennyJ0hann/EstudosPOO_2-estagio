<?php
class Funcionario {
    private $codigo;
    public $nome;
    private $nascimento;
    protected $salario;

    public function setSalario($salario){
        if(is_numeric($salario) and ($salario > 0)){
            $this->salario = $salario;
        }
    }
    public function getSalario(){
        return $this->salario;
    }
}


?>