<?php
require_once 'Personagem.php';

class Aventureiro extends Personagem {
    private $classe;
    private $vida;
    private $ataque;

    public function __construct(string $nome, int $nivel, int $experiencia, string $classe, int $vida, int $ataque) {
        parent::__construct($nome, $nivel, $experiencia);
        $this->classe = $classe;
        $this->vida = $vida;
        $this->ataque = $ataque;
    }

    public function interagir(): void {
        echo "{$this->getNome()}: 'Pela glória e por tesouros, eu explorarei esta masmorra!'\n";
    }

    public function atacar(): int {
        return $this->ataque + ($this->getNivel() * 5);
    }

    public function receberDano(int $dano): void {
        $this->vida -= $dano;
        
        // Nunca permitir vida menor que 0
        if ($this->vida <= 0) {
            $this->vida = 0;
            echo "{$this->getNome()} foi derrotado...\n";
        }
    }

    public function mostrarDados(): void {
        parent::mostrarDados();
        echo "Classe: {$this->classe} | Vida: {$this->vida} | Ataque: {$this->ataque}\n";
    }

    // Getters e Setters
    public function getClasse(): string { return $this->classe; }
    public function setClasse(string $classe): void { $this->classe = $classe; }
    
    public function getVida(): int { return $this->vida; }
    public function setVida(int $vida): void { $this->vida = $vida; }
    
    public function getAtaque(): int { return $this->ataque; }
    public function setAtaque(int $ataque): void { $this->ataque = $ataque; }
}