<?php

abstract class Personagem{
    private string $nome;

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function mostrarDados(){
        echo "Nome: " . $this->nome . "<br>";
    }

    public abstract function interagir();
}