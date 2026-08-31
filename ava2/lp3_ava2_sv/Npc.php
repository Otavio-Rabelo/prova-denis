<?php
require_once "Personagem.php";

class Npc extends Personagem {
    public string $papel;

    public function __construct(string $nome, string $papel)
    {
        parent::__construct($nome);
        $this->papel = $papel;
    }

    public function interagir()
    {
        echo "NPC: " . $this->getNome() . " não faço nada! <br>";
    }

    /**
     * Encapsulamento
     */ 
    public function getPapel()
    {
        return $this->papel;
    }

    public function setPapel($papel)
    {
        $this->papel = $papel;
    }
}