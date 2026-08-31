<?php

require_once "Sim.php";
require_once "Comodo.php";

class Casa
{
    private string $nomeCasa;
    private Sim $proprietario;
    private $espacos = array();

    public function __construct(string $nome, Sim $proprietario)
    {
        $this->nomeCasa = $nome;
        $this->proprietario = $proprietario;
    }

    public function adicionarComodo(string $nome, int $tamanho)
    {
        $this->espacos[] = new Comodo($nome, $tamanho);
    }
    private function mostrarComodos()
    {
        foreach ($this->espacos as $comodo)
            echo $comodo;
    }

    public function imprimirRelatorio()
    {
        echo "Nome casa: " . $this->nomeCasa . "<br>";
        $this->proprietario->mostrarDados();
        $this->mostrarComodos();
    }


    public function getnomeCasa()
    {
        return $this->nomeCasa;
    }

    public function setnomeCasa(string $nomeCasa)
    {
        $this->nomeCasa = $nomeCasa;
    }

    public function getProprietario()
    {
        return $this->proprietario;
    }

    public function setProprietario(Sim $proprietario)
    {
        $this->proprietario = $proprietario;
    }

    public function getEspacos()
    {
        return $this->espacos;
    }

    public function setEspacos(Comodo $espacos)
    {
        $this->espacos = $espacos;
    }
}
