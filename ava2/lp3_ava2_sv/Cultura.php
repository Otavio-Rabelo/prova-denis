<?php
class Cultura {
    private string $nomeCultura;
    private int $tempoDeCrescimento;

    public function __construct(string $nomeCultura, int $tempo)
    {
        $this->nomeCultura = $nomeCultura;
        $this->tempoDeCrescimento = $tempo;
    }

    public function __toString()
    {
        return "Cultura: $this->nomeCultura Tempo de crescimento: $this->tempoDeCrescimento <br>";
    }

    /**
     * Encapsulamento
     */ 
    public function getNomeCultura()
    {
        return $this->nomeCultura;
    }

    public function setNomeCultura(string $nomeCultura)
    {
        $this->nomeCultura = $nomeCultura;
    }

    public function getTempoDeCrescimento()
    {
        return $this->tempoDeCrescimento;
    }

    public function setTempoDeCrescimento(int $tempoDeCrescimento)
    {
        $this->tempoDeCrescimento = $tempoDeCrescimento;
    }
}