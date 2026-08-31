<?php

require_once "Personagem.php";

class Npc extends Personagem{
    private string $papel;

    public function __construct(string $nome, string $papel)
    {
        parent::__construct($nome);
        $this->papel = $papel;
    }
    
    public function getPapel(){
        return $this->papel;
    }

    public function setPapel(string $papel){
        $this->papel = $papel;
    }

    public function interagir(){
        echo "NPC " . $this->getNome() . " está interagindo com o jogador.<br>";
    }
}