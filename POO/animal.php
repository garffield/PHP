<?php

// Criar um sistema de classificação de animais vertebrados usando programação orientada a objetos (POO) em PHP, representando subdivisões até chegar a classes específicas 
// como Ornitorrinco, Morcego e Baleia.

// Criação das Classes Principais:

// Inicie com a classe geral Animal que conterá características comuns a todos os animais (ex: nome científico).
// Crie subclasses que representem Vertebrados e, a partir daí, vá subdividindo em classes menores (por exemplo, Mamíferos, Répteis, etc.).
// Características Específicas:

// Cada classe deve conter atributos e métodos específicos de cada subdivisão. Por exemplo:
// Mamíferos: método amamentar().
// Aves: método voar().
// Chegue até as classes mais específicas: Ornitorrinco, Morcego e Baleia.
// Atributos e Métodos:

// Atributos como esqueleto, habitat e alimentacao devem ser herdados pelas subclasses.
// Métodos devem ser implementados para ações comuns (ex: seMovimentar()) e específicas (ex: botarOvo() para algumas classes). 

class Animal {
    protected $nomeCientifico;
    protected $tipoReproducao;
    protected $genero; 

    public function __construct($nomeCientifico, $tipoReproducao, $genero){
        $this->nomeCientifico = $nomeCientifico;
        $this->tipoReproducao = $tipoReproducao;
        $this->genero = $genero;
    }
}

class Vertebrados extends Animal {
    protected $animalVertebral;
    protected $tipoRespiracao;
    protected $locomocao;

    public function __construct($nomeCientifico, $tipoReproducao, $genero, $animalVertebral, $tipoRespiracao, $locomocao) {
        parent::__construct($nomeCientifico, $tipoReproducao, $genero);
        $this->animalVertebral = $animalVertebral;
        $this->tipoRespiracao = $tipoRespiracao;
        $this->locomocao = $locomocao;
    }
    
    public function setInfoAnimal($nomeCientifico, $tipoReproducao, $genero){
        $this->nomeCientifico = $nomeCientifico;
        $this->tipoReproducao = $tipoReproducao;
        $this->genero = $genero;
    }
}   

$monkey = new Vertebrados("Makakos", "Sexuada", "Masc", True, "Pulmonar", "Terrestre");
$monkey->setInfoAnimal("Oragantagus", "Assexuado", "Fluido");
var_dump($monkey);

