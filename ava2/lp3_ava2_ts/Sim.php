<?php

require_once "Personagem.php";

class Sim extends Personagem
{
    private string $sexo;
    private int $nivel = 0;
    private int $experiencia = 0;

    public function __construct(string $nome, string $sexo)
    {
        parent::__construct($nome);
        $this->sexo = $sexo;
    }


    public function interagir()
    {
        echo "Sim " . $this->getNome() . " está andando pela casa.<br>";
    }

    public function mostrarDados()
    {
        parent::mostrarDados();
        echo "Sexo: " . $this->getSexo() . "<br>";
        echo "Nível: " . $this->getNivel() . "<br>";
        echo "Experiência: " . $this->getExperiencia() . "<br>";
    }

    public function trabalhar(int $x)
    {
        if ($x > 0 && $x <= 60)
            $this->experiencia += $x;
        if ($this->experiencia >= 100)
            $this->mudarNivel();
    }

    private function mudarNivel()
    {
        $this->nivel += 1;
        $this->experiencia -= 100;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel(int $nivel)
    {
        $this->nivel = $nivel;
    }

    public function getExperiencia()
    {
        return $this->experiencia;
    }

    public function setExperiencia(int $experiencia)
    {
        $this->experiencia = $experiencia;
    }
}
