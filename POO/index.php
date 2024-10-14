<?php

class Pessoa {
    public $nome;
    public $idade;
    public $altura;
    public $peso;

    function __construct($nome, $idade, $altura, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
    }


    // public function getNome($nome) {
    //     return $this->nome;
    // }

    // public function setNome($nome) {
    //     $this->nome = $nome;
    // }
    // public function getIdade($idade) {
    //     return $this->idade;
    // }

    // public function setIdade($idade) {
    //     $this->nome = $idade;
    // }
    // public function getAltura($altura) {
    //     return $this->altura;
    // }

    // public function setAltura($altura) {
    //     $this->nome = $altura;
    // }
    // public function getPeso($peso) {
    //     return $this->peso;
    // }

    // public function setPeso($peso) {
    //     $this->nome = $peso;
    // }

    public function Andar(){
        echo $this->nome . ' andou';
    }

    public function Comer() {
        echo $this->nome . ' comeu';
    }


}

$Pessoa = new Pessoa('Seu Zé', 69, 1.98, 120);

$Pessoa->Andar();
echo '</br>';
$Pessoa->Comer();

