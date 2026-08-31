<?php

require_once "Personagem.php";
class Jogador extends Personagem
{
    private string $classe;
    private int $mana;
    private int $manaMaxima;
    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, int $experiencia, string $classe, int $mana, int $manaMaxima)
    {
        parent::__construct($nome, $nivel, $vida, $vidaMaxima, $experiencia);
        $this->classe = $classe;
        $this->mana = $mana;
        $this->manaMaxima = $manaMaxima;
    }
    public function getClasse()
    {
        return $this->classe;
    }
    public function setClasse(string $classe)
    {
        $this->classe = $classe;
    }

    public function getMana()
    {
        return $this->mana;
    }
    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }
    public function getManaMaxima()
    {
        return $this->manaMaxima;
    }
    public function setManaMaxima(int $manaMaxima)
    {
        $this->manaMaxima = $manaMaxima;
    }

    public function interagir()
    {
        echo "O " . $this->classe . " "
            . $this->getNome()
            . " está pronto para a batalha!<br>";
    }
    public function mostrarDados(): void
    {
        parent::mostrarDados();

        echo "Classe: " . $this->classe . "<br>";
        echo "Mana Atual: " . $this->mana . "<br>";
        echo "Mana Máxima: " . $this->manaMaxima . "<br>";
    }
    public function atacar(): int
    {
        $dano = $this->getNivel() * 10;

        return $dano;
    }

    public function usarHabilidade(): int
    {
        if ($this->mana >= 30) {

            $this->mana -= 30;

            $dano = $this->getNivel() * 20;

            echo $this->getNome()
                . " usou sua habilidade!<br>";

            return $dano;
        }

        echo "Mana insuficiente para usar a habilidade!<br>";

        return 0;
    }
    public function recuperarMana()
    {
        $this->mana += $this->manaMaxima;

    }




}