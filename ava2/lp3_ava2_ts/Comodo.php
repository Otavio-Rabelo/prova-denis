<?php

class Comodo
{
    private string $nomeEspacos;
    private int $tamanho;

    public function __construct(string $espaco, int $tamanho)
    {
        $this->nomeEspacos = $espaco;
        $this->tamanho = $tamanho;
    }

    public function __toString() {
        return "Cômodo: " . $this->nomeEspacos . " Tamanho: " . $this->tamanho . "<br>";
    }

    public function getNomeEspacos()
    {
        return $this->nomeEspacos;
    }

    public function setNomeEspacos(string $nomeEspacos)
    {
        $this->nomeEspacos = $nomeEspacos;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho)
    {
        $this->tamanho = $tamanho;
    }

    
}
