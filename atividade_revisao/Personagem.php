<?php

abstract class Personagem
{
    private string $nome;
    private int $nivel;
    private int $vida;
    private int $vidaMaxima;
    private int $experiencia;

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, int $experiencia)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = $vida;
        $this->vidaMaxima = $vidaMaxima;
        $this->experiencia = 0;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getNivel()
    {
        return $this->nivel;
    }
    public function setNivel(int $nivel)
    {
        $this->nivel = $nivel;
    }
    public function getVida()
    {
        return $this->vida;
    }
    public function setVida(int $vida)
    {
        $this->vida = $vida;
    }
    public function getVidaMaxima()
    {
        return $this->vidaMaxima;
    }
    public function setVidaMaxima(int $vidaMaxima)
    {
        $this->vidaMaxima = $vidaMaxima;
    }

    public function mostrarDados()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Nível: " . $this->nivel . "<br>";
        echo "Vida Atual: " . $this->vida . "<br>";
        echo "Vida Máxima: " . $this->vidaMaxima . "<br>";
    }

    public abstract function interagir();


    public function receberDano(int $dano)
    {
        $this->vida -= $dano;

        if ($this->vida < 0){

            $this->vida = 0;
    }
        if($this->vida == 0){
                    echo "O " . $this->nome . "Foi derrotado <br>";
        }}
    
    public function estaVivo(): bool
    {
        if ($this->vida > 0) {
            return true;
        } else {

            return false;
        }
    }

public function ganharExperiencia(int $experiencia): void
{
    $this->experiencia += $experiencia;

    if ($this->experiencia >= 100) {
        $this->nivel += 1;
        $this->vidaMaxima += 20;
        $this->vida = $this->vidaMaxima;

        $this->experiencia -= 100;

        echo "O " . $this->nome . " subiu de nível!<br>";
    }
}


}
