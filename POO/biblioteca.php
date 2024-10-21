<?php

Interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Usuario implements Crud {

    public $nome;
    public $senha;
    const MAX_EMPRESTIMO = 2;
    

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

}

class Livro extends Crud {

    public $isbn;
    public $nomeLivro;
    public $autor;
    public function cadastro () {}
    public function listar () {}

}