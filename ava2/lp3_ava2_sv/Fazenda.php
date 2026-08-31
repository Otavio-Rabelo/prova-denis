<?php

require_once "Fazendeiro.php";
require_once "Cultura.php";

class Fazenda {
    private string $nomeFazenda;
    private Fazendeiro $proprietario;
    private $culturas = [];

    public function __construct(string $nomeFazenda, Fazendeiro $proprietario)
    {
        $this->nomeFazenda = $nomeFazenda;
        $this->proprietario = $proprietario;
    }

    public function produzirCultura(string $NomeCultura, int $tempoDeCrescimento) {
        $this->culturas[] = new Cultura($NomeCultura, $tempoDeCrescimento);
    }

    public function mostrarCulturas() {
        foreach ($this->culturas as $planta) {
            echo $planta;
        }
    }

    public function imprimirRelatorio() {
        echo "Fazenda: " . $this->nomeFazenda . "<br>";
        $this->proprietario->mostrarDados();
        $this->mostrarCulturas();
    }

    /**
     * Encapsulamento
     */ 
    public function getNomeFazenda()
    {
        return $this->nomeFazenda;
    }

    public function setNomeFazenda(string $nomeFazenda)
    {
        $this->nomeFazenda = $nomeFazenda;
    }

    public function getProprietario()
    {
        return $this->proprietario;
    }

    public function setProprietario(Fazendeiro $proprietario)
    {
        $this->proprietario = $proprietario;
    }

}