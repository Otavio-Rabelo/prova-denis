<?php
abstract class Personagem {
    private string $nome;
    
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function mostrarDados()
    {
        echo "Personagem: ". $this->nome . " <br>";
    }

    public abstract function interagir();

    /**
     * Encapsulamento
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(String $nome)
    {
        $this->nome = $nome;
    }
}