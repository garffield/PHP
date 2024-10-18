<?php

abstract class Veiculo{
    
    public $nome;
    public $cor;

    public function __construct($nome, $cor) {
        $this->nome = $nome;
        $this->cor = $cor;
    }
    abstract public function Acelerar();

    abstract public function Freiar();
}

class Barco  extends Veiculo{

    public function Acelerar() {
        echo "O barco acelerou";
    }
    public function Freiar() {
        echo "O barco freiou";
    }
}

class Aviao extends Veiculo{

    public function Acelerar() {
        echo "A avião acelerou";
    }
    public function Freiar() {
        echo "O avião freiou";
    }
}

class Carro extends Veiculo{
    public function Acelerar() {
        echo "O carro acelerou vrum vrum";
    }
    public function Freiar() {
        echo "o carro freiouuu";
    }

}

class Bicicleta extends Veiculo{
    public function Acelerar() {
        echo "Pedalou e acelerou";
    }
    public function Freiar() {
        echo "Apertou o freio e freiou";
    }

}

class Skate  extends Veiculo{
    public function Acelerar() {
        echo "Deu a remada";
    }
    public function Freiar() {
        echo "boto o pé no chao e freiou";
    }

}

class Moto extends Veiculo{
    public function Acelerar() {
        echo "Cortou giro e acelerou";
    }
    public function Freiar() {
        echo "Freiou e quase bateu";
    }

}

class Elevador extends Veiculo{
    public function Acelerar() {
        echo "Subiu com tudo";
    }
    public function Freiar() {
        echo "Quase despencou do quinto andar mas parou";
    }

}

$Barco = new Barco ("Cruzeiro do Ney", "Branco");
$Aviao = new Aviao ("Avião das Torre Gemeas", "Branco");
$Carro = new Carro ("Gol Turbão", "Vermelho");
$Bicicleta = new Bicicleta ("Hudson", "Preta");
$Skate = new Skate ("Skate do Zezin da Esquina", "Branco e Verde");
$Moto = new Moto ("CG-160", "Verdona");
$Elevador = new Elevador ("Kamikaze", "Cinza");

$Barco->Acelerar(); 
echo ' ';
$Barco->Freiar();

echo '<hr>';

$Aviao->Acelerar();
echo ' ';
$Aviao->Freiar();

echo '<hr>';

$Carro->Acelerar();
echo ' ';
$Carro->Freiar();

echo '<hr>';

$Bicicleta->Acelerar();
echo ' ';
$Bicicleta->Freiar();

echo '<hr>';

$Skate->Acelerar();
echo ' ';
$Skate->Freiar();

echo '<hr>';

$Moto->Acelerar();
echo ' ';
$Moto->Freiar();

echo '<hr>';

$Elevador->Acelerar();
echo ' ';
$Elevador->Freiar();
