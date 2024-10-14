<?php

class Veiculo{
    
    public $modelo;
    public $ano;
    public $cor;

    public function __construct($modelo, $ano, $cor) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }

}

class Moto  extends Veiculo{
    // public $ciclindradas;
    // public $tamanoPneu;
    // public $empinar;

    // public function __construct($modelo, $ano, $cor) {
    //     $this->modelo = $modelo;
    //     $this->ano = $ano;
    //     $this->cor = $cor;
    // }

    public function Acelera(){
        echo 'bololololololo';
    }

}

class Carro extends Veiculo{
    // public $qtdPortas;
    // public $cavalos;
    // public $cilindros;

    // public function __construct($qtdPortas, $cavalos, $cilindros) {
    //     $this->qtdPortas = $qtdPortas;
    //     $this->cavalos = $cavalos;
    //     $this->cilindros = $cilindros;
    // }
    public function abrirPorta() {
        echo ' * abriu a porta *';
    }
}

$civic = new Carro('Civic', 2020,'preto');


var_dump($civic);