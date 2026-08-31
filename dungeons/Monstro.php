<?php
require_once 'Personagem.php';

class Monstro extends Personagem {
    private $tipo;
    private $vida;
    private $ataque;

    public function __construct(string $nome, int $nivel, int $experiencia, string $tipo, int $vida, int $ataque) {
        parent::__construct($nome, $nivel, $experiencia);
        $this->tipo = $tipo;
        $this->vida = $vida;
        $this->ataque = $ataque;
    }

    public function interagir(): void {
        echo "{$this->getNome()}: 'ROAAAR! Intrusos não passarão!'\n";
    }

    public function atacar(): int {
        return $this->ataque;
    }

    public function receberDano(int $dano): void {
        $this->vida -= $dano;
        
        // Não permitir vida menor que 0
        if ($this->vida <= 0) {
            $this->vida = 0;
        }
    }

    public function mostrarDados(): void {
        parent::mostrarDados();
        echo "Tipo: {$this->tipo} | Vida: {$this->vida} | Ataque: {$this->ataque}\n";
    }

    // Getters e Setters
    public function getTipo(): string { return $this->tipo; }
    public function setTipo(string $tipo): void { $this->tipo = $tipo; }
    
    public function getVida(): int { return $this->vida; }
    public function setVida(int $vida): void { $this->vida = $vida; }
    
    public function getAtaque(): int { return $this->ataque; }
    public function setAtaque(int $ataque): void { $this->ataque = $ataque; }
}