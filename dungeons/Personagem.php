<?php

abstract class Personagem {
    private $nome;
    private $nivel;
    private $experiencia;

    public function __construct(string $nome, int $nivel, int $experiencia) {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->experiencia = $experiencia;
    }

    public function mostrarDados(): void {
        echo "Nome: {$this->nome} | Nível: {$this->nivel} | Experiência: {$this->experiencia}\n";
    }

    abstract public function interagir(): void;

    public function ganharXP(int $xp): void {
        $this->experiencia += $xp;
        
        // A cada 100 XP, sobe de nível
        while ($this->experiencia >= 100) {
            $this->subirNivel();
        }
    }

    public function subirNivel(): void {
        // Responsável APENAS por aumentar o nível e ajustar a experiência
        $this->nivel++;
        $this->experiencia -= 100;
    }

    // Getters e Setters
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }
    
    public function getNivel(): int { return $this->nivel; }
    public function setNivel(int $nivel): void { $this->nivel = $nivel; }
    
    public function getExperiencia(): int { return $this->experiencia; }
    public function setExperiencia(int $experiencia): void { $this->experiencia = $experiencia; }
}