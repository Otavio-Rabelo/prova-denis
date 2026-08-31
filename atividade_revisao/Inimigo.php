<?php
require_once "Personagem.php";
class Inimigo extends Personagem{
private string $tipo;
private int $ataque;
 public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, int $experiencia, string $tipo, int $ataque)
    {
        parent::__construct($nome, $nivel, $vida, $vidaMaxima, $experiencia);
        $this->tipo = $tipo;
        $this->ataque = $ataque;
       
    }

public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;
    }

    public function getAtaque()
    {
        return $this->ataque;
    }
    public function setAtaque(int $ataque)
    {
        $this->ataque = $ataque;
    }

public function mostrarDados()
    {
         parent::mostrarDados();

        echo "Tipo: " . $this->tipo . "<br>";
        echo "Ataque: " . $this->ataque . "<br>";
       
    }

    public function interagir()
    {
        echo "O Inimigo " . $this->getNome() . " apareceu<br>";
    }

    public function atacar():int {
         return $this->ataque;
    }
}