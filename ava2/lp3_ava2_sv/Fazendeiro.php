<?php
require_once "Personagem.php";

class Fazendeiro extends Personagem {
    private string $cidadeNatal;
    private int $energia;

    public function __construct(string $nome, string $cidadeNatal)
    {
        parent::__construct($nome);
        $this->cidadeNatal = $cidadeNatal;
        $this->energia = 100;
    }

    public function interagir()
    {
        echo "O fazendeiro ". $this->getNome() . " está cuidando da fazenda em ". $this->cidadeNatal . ". <br>";
    }

    public function mostrarDados()
    {
        parent::mostrarDados();
        echo "Cidade Natal: ". $this->cidadeNatal . " <br>";
        echo "Energia: ". $this->energia . " <br>";
    }

    public function trabalhar() {
        $this->energia -= 40;
        if($this->energia <= 0) {
            echo "Você desmaiou de cansaço!<br>";
            $this->descansar();
        }

    }

    public function descansar() {
        $this->energia = 100;
    }

    /**
     * Encapsulamento
     */ 
    public function getCidadeNatal()
    {
        return $this->cidadeNatal;
    }

    public function setCidadeNatal($cidadeNatal)
    {
        $this->cidadeNatal = $cidadeNatal;
    }

    public function getEnergia()
    {
        return $this->energia;
    }

    public function setEnergia($energia)
    {
        $this->energia = $energia;
    }
}